

jQuery(document).ready(function ($) {

    function checkphonenumber(inp) {
        var rgxp = /^([0-9]{12})$/i;
        return rgxp.test(inp);
    }
    function phoneAutocomplete() {
        $.map($('.input_phone_mask'), function (inputPhones) {
            var phoneNumber = $(inputPhones).val();
            var firstThreeNumber = phoneNumber.substring(0, 3);
            if (firstThreeNumber === '380')
                $(inputPhones).val(phoneNumber.substr(3));
        });
        $('.input_phone_mask').attr("placeholder", "+38(0__)___-__-__");
        $(".input_phone_mask").inputmask({
            "mask": "+38(099)999-99-99",
            "clearIncomplete": true
        });
    }

    function GetURLParameter(sParam)
    {
        var sPageURL = window.location.search.substring(1);
        var sURLVariables = sPageURL.split('&');
        for (var i = 0; i < sURLVariables.length; i++)
        {
            var sParameterName = sURLVariables[i].split('=');
            if (sParameterName[0] == sParam)
            {
                return sParameterName[1];
            }
        }
    }


    phoneAutocomplete();

    //tabs

    // store the currently selected tab in the hash value
    $(" .nav-justified > a.nav-link").on("shown.bs.tab", function (e) {
        var id = $(e.target).attr("href").substr(1);
        window.location.hash = id;
    });

    // on load of the page: switch to the currently selected tab
    var hash = window.location.hash;
    $('.nav-justified > a.nav-link[href="' + hash + '"]').tab('show');


    // Show activate success modal
    if (GetURLParameter('activate_success')) {
        $("body").children().first().before($(".modal"));
        $("#activated").modal({show: true});

        window.history.pushState(" ", " ", "/лоялті/#arc_history");
    }

    // product filter     
    $('#arc_search').keyup(function () {

        var rex = new RegExp($(this).val(), 'i');
        console.log()

        $('.arc-products ').hide();
        $('.arc-products ').filter(function () {
            return rex.test($(this).text());
        }).show();
    });

    //date filter


    //barcode gen
    JsBarcode(".barcode").init();

    //alerts
    $('.alert').alert();
    $('.alert-warning').hide();
    $('.arc-make-register,.arc-make-login ').click(function () {
        $('.alert-warning').hide();
    })
    $('.arc_town_loadin').hide()

    //card_id_toggle
    /* $('#arc_make_card').change(function () {
     if ($('#arc_make_card[type=checkbox]:checked').length > 0) {
     $('#arc_card_id').prop('disabled', true);
     } else {
     $('#arc_card_id').prop('disabled', false);
     }
     });*/

    $(".show-product").toggle(function () {
        $(this).text('Приховати');
        $(".arc-product-list-" + $(this).data('check')).slideToggle("fast", function () {

        });
    }, function () {
        $(this).text('Глянути товари');
        $(".arc-product-list-" + $(this).data('check')).slideToggle("fast", function () {

        });
    }
    );

    //datapicker
    $('.datapicker').datepicker({
        format: "yyyy.dd.mm",
        weekStart: 1,
        startView: 2,
        language: "uk"
    });





    $.getJSON(ajax_object.ppath + "json/regions.json", function (data) {
        var sel = '';
        //$('#arc_region option[value=' + $('#arc_region').data('current') + ']').attr('select', 'selected');

       // $.ajaxSetup({cache: false});
        $.each(data, function (keys, val) {
            var sel = val.region.trim() === ($('#arc_region').data('current')) ? 'selected' : ''
            $('#arc_region').append('<option ' + sel + ' data-order="' + keys + '" data-id="' + val.id + '">' + val.region + '</option>');
        });
    });

    $.getJSON(ajax_object.ppath + "json/areas.json", function (data) {
        var items = '';
        var region_id = $("#arc_region option:selected").data('id');
       // $.ajaxSetup({cache: false});
        $.each(data.filter(function (i) {
            return i.region_id === region_id;
        }), function (keys, val) {
            var sel = val.area.trim() === ($('#arc_area').data('current')) ? 'selected' : ''
            items += '<option  ' + sel + ' data-order="' + keys + '" data-id="' + val.Id + '">' + val.area + '</option>';

        });
        $('#arc_area').html(items);
    });
    /*
     $('#arc_town').addClass('loading');
     $.getJSON(ajax_object.ppath + "json/towns.json", function (data) {
     var items = '';
     $('#arc_town').removeClass('loading');
     var area_id = $("#arc_area option:selected").data('id');
     // $.ajaxSetup({cache: false});
     $.each(data.filter(function (i) {
     return i.area_id === area_id;
     }), function (keys, val) {
     var sel = val.village === ($('#arc_town').data('current')) ? 'selected' : ''
     items += '<option  ' + sel + ' data-order="' + keys + '" data-id="' + val.id + '">' + val.village + '</option>';
     });
     $('#arc_town').html(items);
     });
     */


    $("#arc_region").change(function () {
        var region_id = $("#arc_region option:selected").data('id');


        $.getJSON(ajax_object.ppath + "json/areas.json", function (data) {
            var items = '';
            //$.ajaxSetup({cache: false});
            $.each(data.filter(function (i) {
                return i.region_id === region_id;
            }), function (keys, val) {
                items += '<option data-order="' + keys + '" data-id="' + val.id + '">' + val.area + '</option>';
            });
            $('#arc_area').html(items);

            $('#arc_town').prop('disabled', true);
        });

    });

    $("#arc_area").change(function () {
        area_id = $("#arc_area option:selected").data('id');

        $('#arc_town').prop('disabled', false);
        $('#arc_town').addClass('loading');
        $.getJSON(ajax_object.ppath + "json/towns.json", function (data) {
            $('#arc_town').removeClass('loading');
            var items = '';
            // console.log(sdata);
            $.each(data.filter(function (i) {
                return i.area_id === area_id;
            }), function (keys, val) {

                items += '<option data-order="' + keys + '" data-id="' + val.id + '">' + val.village + '</option>';

            });
            $('#arc_town').html(items);

        });

    });



    //register  
    $('.open-register').on('click', function () {
        $('.arc-make-register').trigger('click');
    })

    $('.open-login').on('click', function () {
        $('.arc-make-login  ').trigger('click');
    })
    /*
     $('.open-register-nocard').on('click', function () {
     $('.email-group').show();
     $('.pass-group').hide();
     });*/
    $('.arc-register').hide();
    $('.arc-make-register').on('click', function (e) {
        e.preventDefault();
        $('.arc-register').show();
        $('.arc-login').hide();
        $('#arc-modal-login .modal-dialog').removeClass('modal-md');
        $('#arc-modal-login .modal-dialog').addClass('modal-lg');
        $('#arc-modal-login .modal-title').html('Реєстрація');
        //  $('.email-group').hide();
        //  $('.pass-group').show();
    })
    $('.arc-make-login').on('click', function (e) {
        e.preventDefault();
        $('.arc-register').hide();
        $('.arc-login').show();
        $('#arc-modal-login .modal-dialog').removeClass('modal-lg');
        $('#arc-modal-login .modal-dialog').addClass('modal-md');
        //  $('.arc-login').show(); 
        $('#arc-modal-login .modal-title').html('Вхід');
    })

    //login
    $(".arc-log").on('click', function (e) {
        e.preventDefault();

        //$(this).after('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i><span class="sr-only">Loading...</span>');

        $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            data: {
                action: 'login_user_front_end',
                req: $('#arc-login-form').serialize()
            },
            success: function (res) {

                if (res.success != false) {

                    $('.alert').addClass('alert-success');
                    $('.alert').show();
                    $('.alert p').html(res.data.msg);
                    location.reload();

                } else {
                    $('.alert').addClass('alert-warning');
                    $('.alert').show();
                    $('.alert p').html(res.data.msg);
                    $.each(res.data.fields, function (value) {
                        $('.alert p').append($('label[for="' + value + '"]').text() + '<br />');
                    });
                }
            },
            error: function (errorThrown) {
                alert(errorThrown);
            }
        });
    });


    //registration
    $(".arc-reg").on('click', function (e) {

        e.preventDefault();
        // $(this).after('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i><span class="sr-only">Loading...</span>');


        $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            //url: 'https://redpanda.ml/register',
            data: {
                action: 'register_user_front_end',
                req: $('#arc-register-form').serialize()
            },
            success: function (res) {
                $('.alert').addClass('alert-success');
                $('.alert').show();
                $('.alert p').html(res.data.msg);
                if (res.success != false) {
                    location.reload();
                } else {
                    //$('.alert').addClass('alert-success');
                    $('.alert').addClass('alert-warning');
                    $('.alert').show();
                    $('.alert p').html(res.data.msg);
                    $.each(res.data.fields, function (index, value) {
                        $('.alert p').append($('label[for="' + value + '"]').text() + '<br />');
                    });

                }



            },
            error: function (errorThrown) {
                console.log(errorThrown);
            }
        });
    });

    //profile

    $("#arc_profile .arc-update").on('click', function (e) {

        e.preventDefault();
        // $(this).after('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i><span class="sr-only">Loading...</span>');
        formData = $('#arc-profile-from').serialize();
        reg_id = $('#arc_region option:selected').data('id');
        ar_id = $('#arc_area option:selected').data('id');
        formData += '&' + 'reg_id=' + reg_id + '&ar_id=' + ar_id;
        $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            data: {
                action: 'profile_user_front_end',
                req: formData
            },
            success: function (res) {

                $('.alert').addClass('alert-success');
                $('.alert').show();
                $('.alert p').html(res.data.msg);
                if (res.success != false) {
                    //location.reload();
                } else {
                    //$('.alert').addClass('alert-success');
                    $('.alert-warning').show();
                    $('.alert-warning p').html(res.data.msg);
                    $.each(res.data.fields, function (index, value) {
                        $('.alert-warning p').append($('label[for="' + value + '"]').text() + '<br />');
                    });

                }

            },
            error: function (errorThrown) {
                alert(errorThrown);
            }
        });
    });


    //create_card
    $(".create-card").on('click', function (e) {
        e.preventDefault();

        //$(this).after('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i><span class="sr-only">Loading...</span>');
        console.log('click');
        $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            data: {
                action: 'create_card_id_front_end'
            },
            success: function (res) {

                if (res.success != false) {

                    $('.alert').addClass('alert-success');
                    $('.alert').show();
                    $('.alert p').html('Картку створено, ваш id:' + res.data.msg);
                    //location.reload();

                } else {
                    $('.alert-warning').show();
                    $('.alert-warning p').html(res.data.msg);
                    $.each(res.data.fields, function (index, value) {
                        $('.alert-warning p').append(value + '<br />');
                    });
                }
            },
            error: function (errorThrown) {
                alert(errorThrown);
            }
        });
    });


    //logout
    $(".arc-logout").on('click', function (e) {
        e.preventDefault();
        //$(this).after('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i><span class="sr-only">Loading...</span>');

        $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            data: {
                action: 'logout_user_front_end',
            },
            success: function (res) {
                if (res.success != false) {
                    location.reload();
                } else {
                    $('.arc-userinfo').text(res.data.msg);
                    //$(this).next().remove;
                }
            },

            error: function (errorThrown) {
                alert(errorThrown);
            }
        });
    });






});