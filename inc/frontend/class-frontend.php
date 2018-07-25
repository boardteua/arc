<?php

namespace loyalty\Inc\Frontend;

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @link       https://weekdays.te.ua
 * @since      1.0.0
 *
 * @author    Karan NA Gupta
 */
class Frontend {

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * The text domain of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_text_domain    The text domain of this plugin.
     */
    private $plugin_text_domain;

    /**
     * Initialize the class and set its properties.
     *
     * @since		1.0.0
     * @param		string $plugin_name       The name of this plugin.
     * @param		string $version    The version of this plugin.
     * @param		string $plugin_text_domain	The text domain of this plugin
     */
    private $data;
    private $path;
    public static $post_type = "arc";
    public static $role = "loyalty_user";
    public $discount_array;
    public $store_array;

    public function __construct($plugin_name, $version, $plugin_text_domain) {

        $this->discount_array = $this->get_discount_array();
        $this->store_array = array('1' => array('#219CDE', 'Салон плитки та сантехніки "АРС Еліт"'), '2' => array('#82BA27', 'Будівальний супермаркет "АРС"'), '3' => array('#FFAC38', 'Меблевий центр "АРС"'));

        //
        $this->plugin_name = $plugin_name;
        $this->version = $version;
        $this->plugin_text_domain = $plugin_text_domain;

        //

        $this->path = $path = plugin_dir_url('') . $this->plugin_name . '/inc/frontend/';
    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        wp_register_style($this->plugin_name . '-bootstrap', plugins_url('css/bootstrap.min.css', __FILE__), $this->version, true);
        wp_enqueue_style($this->plugin_name . '-bootstrap');

        wp_register_style($this->plugin_name . '-style', plugins_url('css/css.css', __FILE__), $this->version, true);
        wp_enqueue_style($this->plugin_name . '-style');

        wp_register_style($this->plugin_name . '-piccer', plugins_url('css/bootstrap-datepicker3.min.css', __FILE__), $this->version, true);
        wp_enqueue_style($this->plugin_name . '-piccer');
    }

    /**
     * Register the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
//wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/nds-wp-list-table-demo-frontend.js', array('jquery'), $this->version, false);

        wp_register_script($this->plugin_name . '-proper_script', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), $this->version, false);
        wp_enqueue_script($this->plugin_name . '-arc_proper_script');

        wp_register_script($this->plugin_name . '-bootstrap_script', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), $this->version, false);
        wp_enqueue_script($this->plugin_name . '-bootstrap_script');

        wp_register_script($this->plugin_name . '-vaidate', plugins_url('js/jquery.validate.min.js', __FILE__), array('jquery'), $this->version, false);
        wp_enqueue_script($this->plugin_name . '-vaidate');

        wp_register_script($this->plugin_name . '-jsmask', plugins_url('js/jquery.inputmask.bundle.min.js', __FILE__), array('jquery'), $this->version, false);
        wp_enqueue_script($this->plugin_name . '-jsmask');

        wp_register_script($this->plugin_name . '-barcode', plugins_url('js/barcode.js', __FILE__), '1.0');
        wp_enqueue_script($this->plugin_name . '-barcode');


        wp_register_script($this->plugin_name . '-picker', plugins_url('js/bootstrap-datepicker.min.js', __FILE__), array('jquery'), $this->version, false);
        wp_enqueue_script($this->plugin_name . '-picker');

        wp_register_script($this->plugin_name . '-picker_lang', plugins_url('js/bootstrap-datepicker.uk.min.js', __FILE__), array('jquery'), $this->version, false);
        wp_enqueue_script($this->plugin_name . '-picker_lang');

        wp_register_script($this->plugin_name . '-script', plugins_url('js/js.js', __FILE__), '1.0');
        wp_enqueue_script($this->plugin_name . '-script');


        wp_localize_script($this->plugin_name . '-script', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php'), 'ppath' => plugins_url('/js/', __FILE__)));
    }

    static function add_loyalty_roles() {
        add_role(self::$role, 'loyalty', array('read' => true, 'level_0' => true));
    }

    static function arc_loyalty_sh($atts) {
        extract(shortcode_atts(['id' => null,
                        ], $atts, 'org_content'));


        if (is_user_logged_in()) {
            $this->get_profile();
        } else {
            $this->get_registration();
        }
        include_once( 'views/loyalty-frontend-display-modal.php');
    }

    static function logout_user_front_end() {
        if (is_user_logged_in()) {
            wp_logout();
        } else {
            wp_send_json_error(array(
                'msg' => "Already logout"
            ));
        }
    }

    static function login_user_front_end() {

        $form = array();
        $err = array();
        $rem = false;

        parse_str($_POST['req'], $form);

        // прибираєм лишні символи з телефонного номера      
        $user_name = $this->clean_phone(sanitize_user($form['arc_login_username']));
        if ($user_name == '') {
            $err[] = 'arc_login_username';
        }

        $pass = $form['arc_login_pass'];
        if ($pass == '') {
            $err[] = 'arc_login_pass';
        }

        $rem = $form['arc_login_remember'];

        if (!empty($err)) {
            wp_send_json_error(array(
                'msg' => "Пусті поля:</br>",
                'fields' => $err
            ));
        }

        if (isset($pass) && isset($user_name)) {


            // питаємось, чи є такий користувач в базі магазину
            $userdata = $this->get_user(array($user_name, $pass));

            // Якщо є то з-вертаємся в базу вордпрес і стартуєм сесію
            if ($userdata['response'][0]->codep) {

                // Для уніфікації логіну робимо те, що не можна робити зазвичай
                $login = $this->arc_login($user_name . '-' . $pass, $pass, $rem);

                if ($login === true) {
                    wp_send_json_success(array(
                        'msg' => 'Вхід успішний'
                    ));
                } else {
                    wp_send_json_error(array(
                        'msg' => $login
                    ));
                }
            } else {
                wp_send_json_error(array(
                    'msg' => '<stron>Помилка:</strong> Такої картки не існує'
                ));
            }
        }
    }

    public function profile_user_front_end() {

        $form = array();
        $err = array();

        parse_str($_POST['req'], $form);

        if (get_current_user_id()) {
            $user_id = get_current_user_id();
        }

        $user = wp_update_user(array('ID' => $user_id, 'user_email' => $form['arc_email']));

        if (is_wp_error($user)) {

            wp_send_json_error(array(
                'msg' => 'Помилка оновлення eMail, можливо цей eMail вже використувається'
            ));
        }

        if (get_user_meta($user_id, 'arc_activate', true) == 'false' && empty(get_user_meta($user_id, 'arc_activate_hash', true))) {
            $this->make_activation(
                    $user_id, 
                    $form['arc_email'], 
                    array(
                        'arc_first_name' => get_user_meta($user_id, 'arc_name', true),
                        'arc_last_name' => get_user_meta($user_id, 'arc_surname', true)
                    )
            );
        }

        foreach ($form as $index => $field) {
            if (trim($field) != '') {
                if ($index == 'arc_username') {
                    $this->clean_phone($field);
                }
                update_user_meta($user_id, $index, sanitize_user($field));
            } else {
                $err[] = $index;
            }
        }



        if (empty($err)) {
            if (get_user_meta($user_id, 'arc_activate', true) == 'false') {
                wp_send_json_success(array(
                    'msg' => 'На ваш eMail відправлений лист для активації'
                ));
            } else {

                // Відправляємо дані в магазин
                $data = array(
                    get_userdata($user_id)->user_nicename,
                    sanitize_user($form['arc_address']),
                    sanitize_user($form['reg_id']),
                    sanitize_user($form['ar_id']),
                    sanitize_user($form['arc_town']),
                    sanitize_user($form['arc_birthday'])
                );

                if ($this->send_data($data)) {
                    wp_send_json_success(array(
                        'msg' => 'Профіль оновлено'
                    ));
                } else {
                    wp_send_json_error(array(
                        'msg' => 'Помилка при завантаженні в магазин'
                    ));
                };
            }
        } else {
            wp_send_json_error(array(
                'msg' => 'Пусті поля: <br />',
                'fields' => $err
            ));
        }
    }

    public function profile_user_back($data, $user_id) {

        foreach ($data as $index => $field) {
            if (get_user_meta($user_id, $index, true) != '') {

                if ($index == 'arc_username') {
                    $this->clean_phone($field);
                }

                update_user_meta($user_id, $index, sanitize_user($field));
            } else {
                add_user_meta($user_id, $index, sanitize_user($field), true);
            }
        }
    }

    static function register_user_front_end() {

        $form = array();
        $err = array();

        parse_str($_POST['req'], $form);

        //collect data

        $new_user_name = $this->clean_phone(sanitize_user($form['arc_username']));
        if ($new_user_name == '') {
            $err[] = 'arc_username';
        }


        $new_user_password = sanitize_text_field(trim($form['arc_number']));
        if ($new_user_password == '') {
            $err[] = 'arc_number';
        }

        $arc_agree = sanitize_text_field(trim($form['arc_agree']));
        if ($arc_agree == '') {
            $err[] = 'arc_agree';
        }

        // Пароль це карточка, найбего!1

        $new_user_card = $new_user_password;
        $user_data = array($new_user_name, $new_user_card);

        if ($this->card_in_base($new_user_card) == false) {
            wp_send_json_error(array(
                'msg' => 'Картка відсутня в базі даних'
            ));
        }

        if (!empty($err)) {
            wp_send_json_error(array(
                'msg' => 'Помилки в полях:<br />',
                'fields' => $err
            ));
        } else {
            $err[] = '';

            /// Взяти наявну інфомація про користувача в базі магазину

            $user = $this->get_user($user_data)['response'][0];

            /// Додаємо користувача в вордпрес

            if ($user) {
                $user_data = array(
                    'user_login' => $new_user_name . '-' . $new_user_card,
                    'user_email' => '',
                    'user_pass' => $new_user_password,
                    'user_nicename' => $user->codep,
                    'display_name' => $user->namep,
                    'role' => self::$role
                );
            } else {
                wp_send_json_error(array(
                    'msg' => 'Номер телефону відстуній в базі даних'
                ));
            }


            $user_id = wp_insert_user($user_data);


            if (!is_wp_error($user_id)) {

                /// Ховаєм бар
                update_user_meta($user_id, 'show_admin_bar_front', 'false');

                // додаєм юзермета для користувача
                //в базі ФІО введене одним полем, розбираєм його на пробіли в масив
                $n = explode(' ', $user->namep);

                $form = array();
                $form['arc_email'] = '';
                $form['arc_card_id'] = $new_user_card;
                $form['arc_username'] = $user->codep;
                $form['arc_name'] = $n[0];
                $form['arc_surname'] = $n[1];
                $form['arc_address'] = $user->adres;
                $form['arc_typezn'] = $user->typezn;
                $form['arc_sumall'] = $user->sumall;
                $form['arc_region'] = $user->Nameoblast;
                $form['arc_area'] = $user->NameRayon;
                $form['arc_town'] = $user->city;
                $form['arc_birthday'] = $user->birthday;
                $form['arc_agree'] = $arc_agree;
                $form['arc_activate'] = 'false';

                $this->profile_user_back($form, $user_id);

                /// логінимося

                $login = $this->arc_login($new_user_name . '-' . $new_user_card, $new_user_password, true);

                if ($login === true) {
                    wp_send_json_success(array(
                        'msg' => 'Вхід успішний'
                    ));
                } else {
                    wp_send_json_error(array(
                        'msg' => 'err'
                    ));
                }
            } else {
                if (isset($user_id->errors['empty_user_login'])) {
                    wp_send_json_success(array(
                        'msg' => 'Пусте поле мобільного'
                    ));
                } elseif (isset($user_id->errors['existing_user_login'])) {
                    wp_send_json_error(array(
                        'msg' => 'Такий користувач вже є'
                    ));
                } else {
                    wp_send_json_error(array(
                        'msg' => $user_id->get_error_message()
                    ));
                }
            }
        }
    }

    /*
      public function create_card_id_front_end($card_id, $user_id) {
      $err = array();

      $this->data = new \loyalty\Inc\Integration\Integration('noauth');

      $email = get_userdata($user_id)->user_email;
      $username = get_user_meta($user_id, 'arc_username', true);

      $data['create_card'] = array(
      'card_id' => $card_id,
      'card_info' => array(
      'email' => $email,
      'login' => $username
      )
      );

      if (!$this->card_in_base($card_id)) {
      $newcard = $this->data->make_get($data);
      } else {
      $err[] = "Картка вже існує";
      wp_send_json_error(array(
      'msg' => 'Помилка при створенні: <br />',
      'fields' => $err
      ));
      }
      if ($newcard) {

      add_user_meta($user_id, 'arc_card_id', $card_id);

      $this->mail_new_card($email, $card_id);

      if (!isset($card_id)) {
      wp_send_json_success(array(
      'msg' => $data['create_card']['card_id']
      ));
      } else {
      return $data['create_card']['card_id'];
      }
      } else {
      $err[] = 'Помилка при створенні';
      wp_send_json_error(array(
      'msg' => 'Помилка при створенні: <br />',
      'fields' => $err
      ));
      }
      } */

    private function load_check($incard_id) {

        $user_id = get_current_user_id();
        $user_token = get_userdata($user_id)->user_nicename;

        $this->data = new \loyalty\Inc\Integration\Integration($user_token);

        $order_data['get_check'] = $user_token . ',orders';
        $products_data['get_check'] = $user_token . ',products';

        $card_order_history_items = $this->data->make_get($order_data);
        $card_products_history_items = $this->data->make_get($products_data);

        if ($card_products_history_items['success'] == true) {
            $pitems = $card_products_history_items['response'];
        }

        if ($card_order_history_items['success'] == true) {
            $items = $card_order_history_items['response'];

            $htm = '';



            if ($items) {


                foreach ($items as $key => $value) {
                    $prd = '';

                    foreach ($pitems as $product) {

                        if ($product->coden == $value->coden) {

                            $tprice = $tprice + round(floatval($product->cena_r) * $product->kol, 2);

                            $prd .= '<div class="card mb-2"><div class="card-body">'
                                    . '<br /> <strong>Найменування:</strong>  ' . $product->nametv
                                    . '<br /> <strong>Одиниці виміру:</strong>  ' . $product->ov
                                    . '<br /> <strong>Кількість:</strong>  ' . (int) $product->kol
                                    . '<br /> <strong>Ціна:</strong> ' . floatval($product->cena_r)
                                    . '</div></div>';
                        }
                    }

                    $htm .= '<tr class="order-row">'
                            . '<th scope="row">' . $value->nomn . '</th>'
                            . '<td>' .date("Y.m.d H:i", strtotime(  $value->daten) ) . '</td>'
                            . '<td>' . $tprice . '</td>'
                            . '<td><a href="#product" data-check="' . $value->coden . '" class="show-product" /> Глянути товари </a>'
                            . '<td><span class="badge badge-secondary badge-store" style="background-color:' . $this->show_store_by_id($value->store)[0] . '"> </span></td>'
                            . '</td>'
                            . '</tr>'
                            . '<tr class="arc-products arc-product-list-' . $value->coden . '"> <td colspan="6">'
                            . $prd;

                    $htm .= '</td></tr>';
                    $tprice = 0;
                }
            } else {
                $htm .= '<tr><td  colspan="5" class="text-center"> Відсутні чеки </td></tr>';
            }


            return $htm;
        } else {
            return '<tr><td  colspan="5" class="text-center text-danger"> Відсутні чеки </td></tr>';
        }
    }

    private function show_store_by_id($id) {
        return $this->store_array[$id];
    }

    public function show_store_list() {
        $html = '';
        foreach ($this->store_array as $key => $index) {
            $html .= '<div class="store-' . $key . '"><span class="badge badge-secondary badge-store" style="background-color:' . $index[0] . '"> </span> - ' . $index[1] . '</div>';
        }
        return $html;
    }

    private function get_profile() {

        $uid = get_current_user_id();
        $udata = get_userdata($uid);
        $arc_card = get_user_meta($uid, 'arc_card_id', true);
        //$agree = ( get_user_meta($uid, 'arc_agree', true) == '') ? '' : 'checked';
        $username = (get_user_meta($uid, 'arc_name', true) == '') ? 'Анонім' : get_user_meta($uid, 'arc_name', true);
        $surname = ( get_user_meta($uid, 'arc_surname', true) == '' ) ? '' : get_user_meta($uid, 'arc_surname', true);
        $birthday = ( get_user_meta($uid, 'arc_birthday', true) == '' ) ? '' : get_user_meta($uid, 'arc_birthday', true);
        $region = ( get_user_meta($uid, 'arc_region', true) == '') ? '' : get_user_meta($uid, 'arc_region', true);

        $area = ( get_user_meta($uid, 'arc_area', true) == '') ? '' : get_user_meta($uid, 'arc_area', true);

        $town = ( get_user_meta($uid, 'arc_town', true) == '') ? '' : get_user_meta($uid, 'arc_town', true);
        $address = ( get_user_meta($uid, 'arc_address', true) == '') ? '' : get_user_meta($uid, 'arc_address', true);
        //$phone = ( get_user_meta($uid, 'arc_phone', true) == '') ? '' : get_user_meta($uid, 'arc_phone', true);
        ///
        $discount = $this->current_discount()['current_discount'];
        $next_discount = $this->current_discount()[0]['next_discount'];
        $less_amount = $this->current_discount()[0]['less_amount'];
        
        if ($less_amount < 0) {
            $less_amount = $this->current_discount()[1]['less_amount'];
            $next_discount = $this->current_discount()[1]['next_discount'];
        }

        $activate = ( get_user_meta($uid, 'arc_activate', true) == 'false') ? false : true;

        include_once( 'views/loyalty-frontend-display-profile.php');
    }

    private function get_registration() {
        include_once( 'views/loyalty-frontend-display-registration.php');
    }

//    private function card_in_base($card_id) {
//        
//        
//        $this->data = new \loyalty\Inc\Integration\Integration($card_id);
//        if ($card_id && $card_id !== 'nocard') {
//            $data = array();
//            $data['card_id'] = $card_id;
//            $card = $this->data->make_get($data);
//            if ($card['success'] == true) {
//                return true;
//            } else {
//                return false;
//            }
//        }
//    }

    private function arc_login($user, $pass, $remember) {
        $creds = array();
        $creds['user_login'] = $user;
        $creds['user_password'] = $pass;
        $creds['remember'] = $remember;
        $user = wp_signon($creds, false);
        if (is_wp_error($user)) {
            return $user->get_error_message();
        } else {
            return true;
        }
    }

    public function current_discount() {

        return $this->calc_discount($this->calc_totals());
    }

    private function calc_totals() {
        $user_id = get_current_user_id();
        $user_token = get_userdata($user_id)->user_nicename;
        $this->data = new \loyalty\Inc\Integration\Integration($user_token);
        $phone = $this->clean_phone(get_user_meta($user_id, 'arc_username', true));

        $user_data = array($phone, get_user_meta($user_id, 'arc_card_id', true));

        $data['get_total'] = implode(',', $user_data);

        $get_data = $this->data->make_get($data);

        return (int) $get_data['response'];
    }

    private function calc_discount($card_value) {

        $i = 0;
        $j = 0;
        $out = array();



        $first_value = array_values($this->discount_array);
        $first_value = array_shift($first_value);
        $first_value = explode('-', $first_value)[0];



        if ((int) $card_value > $first_value) {

            foreach ($this->discount_array as $key => $discount) {

                $disc = explode('-', $discount);

                if ($disc[1] != '*') {
                    if ($this->nBetween($card_value, $disc[1], $disc[0])) {
                        $j = $i;
                        $out['current_discount'] = $key;
                    }
                } else {
                    if ($card_value >= $disc[0]) {
                        $out = array('current_discount' => $key, array('next_discount' => $key, 'less_amount' => 'Максимальна знижка'));
                    }
                }


                if ($i - $j === 1) {

                    $next_value = $disc[0] - $this->calc_totals();
                    $out[] = array('next_discount' => $key, 'less_amount' => $next_value);
                    
                }

                $i++;
            }
            if (!empty($out)) {
                return $out;
            }
            return false;
        } else {
            $first_key = array_keys($this->discount_array);
            $first_key = array_shift($first_key);
            $first_amount = $first_value - $this->calc_totals();
            
           
            
            $out = array('current_discount' => 0, array('next_discount' => $first_key, 'less_amount' => $first_amount));
            return $out;
        }
    }

    private function nBetween($varToCheck, $high, $low) {
        if ($varToCheck < $low)
            return false;
        if ($varToCheck > $high)
            return false;
        return true;
    }

    private function generate_id() {
        $no = rand(0, 999999999999);
        return str_pad($no, 12, "0", STR_PAD_LEFT);
    }

    private function check_fields($bool = false, $activate) {
        $err = '';
        $uid = get_current_user_id();
        if (get_user_meta($uid, 'arc_name', true) == '')
            $err .= '<li>Ім\'я</li>';
        if (get_user_meta($uid, 'arc_email', true) == '')
            $err .= '<li>Email</li>';
        if (get_user_meta($uid, 'arc_region', true) == '')
            $err .= '<li>Область</li>';
        if (get_user_meta($uid, 'arc_area', true) == '')
            $err .= '<li>Район</li>';
        if (get_user_meta($uid, 'arc_town', true) == '')
            $err .= '<li>Місто</li>';


        if ($err != '') {

            if ($activate == false) {

                if ($bool == false) {
                    return '<div class="alert alert-info" role="alert">
                            <p>Будь ласка, заповність наступні поля, щоб активувати картку:</p> <ul>' . $err . '</ul>
                          </div>';
                } else {
                    return false;
                }
            } else {
                if ($bool == false) {
                    return '<div class="alert alert-info" role="alert">
                            <p>Будь ласка, заповність наступні поля:</p> <ul>' . $err . '</ul>
                          </div>';
                } else {
                    return false;
                }
            }
        }
    }

    /*
      private function mail_new_card($smail, $info) {

      $multiple_to_recipients = array(
      $smail
      );

      $mailbody = "
      <p> Привіт {$info['arc_first_name']} {$info['arc_last_name']}, код вашої нової картки <strong>{$info['card']}</strong>. <br />
      Використайте її як пароль для входу в акаунт.
      </p>";


      wp_mail($multiple_to_recipients, 'АРС-кераміка. Реєстрація', $mailbody);
      } */

    /* ---new_mssql_functions---- */

    private function clean_phone($in) {
        return substr(str_replace(array('-', ')', '('), '', $in), 3);
    }

    private function get_user($user_data) {
        $this->data = new \loyalty\Inc\Integration\Integration($user_data[1]);
        $data['ms_auth'] = implode(',', $user_data);
        $user_data = $this->data->make_get($data);
        return $user_data;
    }

    private function send_data($data) {

        $this->data = new \loyalty\Inc\Integration\Integration($data[0]);

        $data['update_user'] = implode('|', $data);

        $user_data = $this->data->make_get($data);


        if (!empty($user_data['response'][0])) {
            return true;
        } else {
            return false;
        }
    }

    private function card_in_base($card_id) {

        $user_data = $this->get_user(array(0, $card_id));



        if (!empty($user_data['response'][0])) {
            return true;
        } else {
            return false;
        }
    }

    private function make_activation($uid, $smail, $info) {

        if (!get_user_meta($uid, 'arc_activate_hash', true) && !get_user_meta($uid, 'arc_active', true)) {
            $hash = $this->generate_id();
            add_user_meta($uid, 'arc_activate_hash', $hash);

            $multiple_to_recipients = array(
                'myrror555@gmail.com',
                $smail
            );

            $mailbody = "
            <p> Привіт {$info['arc_first_name']} {$info['arc_last_name']}, Перейдіть по посиланню для активації вашої картки <strong><a href='" . get_site_url() . "?activate=" . $hash . "'>" . get_site_url() . "?activate=" . $hash . "</a></strong>. <br />  
	
            </p>";
            $headers = array('Content-Type: text/html; charset=UTF-8');

            wp_mail($multiple_to_recipients, 'АРС-кераміка. Активація картки', $mailbody, $headers);
        }
    }

    private function get_discount_array() {

        $this->data = new \loyalty\Inc\Integration\Integration('open');


        $data['get_discount'] = 'true';

        $get_data = $this->data->make_get($data)['response'];

        $discount = array();
        $dcount = count($get_data);
        for ($i = 0; $i < $dcount; $i++) {

            $z = $i + 1;
            if ($z < $dcount) {
                $e = (int) $get_data[$z]->sumall - 1;
            } else {
                $e = '*';
            }

            $discount[$get_data[$i]->przn] = (int) $get_data[$i]->sumall . '-' . $e;
        }

        //var_dump($discount);
        #$this->discount_array = array('3' => '4000-9999', '4' => '10000-19999', '5' => '20000-49999', '10' => '50000-*');

        return $discount;
    }

    public function get_activate_link() {
        if (isset($_GET['activate'])) {
            $response_hash = $_GET['activate'];
            //$uid = get_current_user_id();

            $user_query = get_users(array('meta_key' => 'arc_activate_hash', 'meta_value' => intval($response_hash)));
            if (!empty($user_query)) {

                foreach ($user_query as $u) {
                    $uid = $u->ID;
                }

                $activate = get_user_meta($uid, 'arc_activate', true);

                if ($activate != 'true') {

                    update_user_meta($uid, 'arc_activate', 'true');

                    wp_redirect(home_url() . '/лоялті/?activate_success=true', 304);

                    return true;
                } else {
                    return false;
                }
            }
        }
    }

}
