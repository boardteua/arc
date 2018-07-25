<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://weekdays.te.ua
 * @since      1.0.0
 *
 * @package    loyalty
 * @subpackage loyalty/inc/frontend/views
 */
?>
    
    <?php

 echo '<!-- Modal -->
            <div class="modal fade" id="chpass" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Змінити пароль</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <div class="form-group"><label for="arc_old_pass">Старий пароль</label> <input  class="form-control"  value="" type="password" id="arc_old_pass" name="arc_old_pass"/></div>
                  <div class="form-group"><label for="arc_new_pass">Новий пароль</label> <input  class="form-control"  value="" type="password" id="arc_new_pass_check" name="arc_new_pass_check"/></div>
                  <div class="form-group"><label for="arc_renew_pass_check">Повторіть</label> <input  class="form-control"  value="" type="password" id="arc_renew_pass_check" name="arc_renew_pass_check"/></div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити</button>
                    <button type="button" class="btn btn-primary">Зберегти</button>
                  </div>
                </div>
              </div>
            </div>
            <!--modal-rules---->


<div class="modal fade" id="arc-modal-rules" tabindex="-1" role="dialog" aria-labelledby="arc-modal-rules" aria-hidden="true">
  <div class="modal-dialog   modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="arc-modal-rules-Title">Правилами програми.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">  
            <svg width="16" height="16" viewBox="0 0 288 288" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0L268 268" transform="translate(10 10)" stroke="black" stroke-width="19.685" stroke-linecap="round"/>
            <path d="M268 0L0 268" transform="translate(10 10)" stroke="black" stroke-width="19.685" stroke-linecap="round"/>
            </svg>
            </span>
        </button>
      </div>
      <div class="modal-body">
        Я погоджуюсь з обробкою ТОВ "ТГ АРС-Кераміка" моїх персональних даних, які є в цій формі для реалізації програми лояльності АРС. Я заявляю, про своє право на доступ до своїх персональних даних та право на їх виправлення, та що ці персональні дані були надані на добровільній основі. Я заявляю, что приймаю усі офіційні правила Програми лояльності. Персональна інформація, яку містить дана форма буде внесена в базу даних ТОВ "ТГ Арс-Кераміка
      </div>
    </div>
  </div>
</div>


          <!--activate-->


<div class="modal fade" id="activated" tabindex="-1" role="dialog" aria-labelledby="arc-modal-rules" aria-hidden="true">
  <div class="modal-dialog   modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Активація завершена.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">  
            <svg width="16" height="16" viewBox="0 0 288 288" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0L268 268" transform="translate(10 10)" stroke="black" stroke-width="19.685" stroke-linecap="round"/>
            <path d="M268 0L0 268" transform="translate(10 10)" stroke="black" stroke-width="19.685" stroke-linecap="round"/>
            </svg>
            </span>
        </button>
      </div>
      <div class="modal-body">
        Ваша картка активована. 
      </div>
    </div>
  </div>
</div>
'
    
    
    
    
    
    ;