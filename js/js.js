jQuery(document).ready(function ($) {


    //validation 
    //

    $('.alert').alert();
    $('.alert').hide();
    $('.arc-make-register,.arc-make-login ').click(function () {
        $('.alert').hide();
    })
    $('.arc_town_loadin').hide()

    //card_id_toggle
    $('#arc_make_card').change(function () {
        if ($('#arc_make_card[type=checkbox]:checked').length > 0) {
            $('#arc_card_id').prop('disabled', true);
        } else {
            $('#arc_card_id').prop('disabled', false);
        }
    });



    //datapicker
    $('.datapicker').datepicker({
        format: "dd.mm.yy",
        weekStart: 1,
        startView: 2,
        language: "uk"
    });
   


    $.getJSON(ajax_object.ppath + "json/regions.json", function (data) {
        var sel = '';
        //$('#arc_region option[value=' + $('#arc_region').data('current') + ']').attr('select', 'selected');

        // $.ajaxSetup({cache: false});
        $.each(data, function (keys, val) {
            var sel = val.region === ($('#arc_region').data('current')) ? 'selected' : ''
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
            var sel = val.area === ($('#arc_area').data('current')) ? 'selected' : ''
            items += '<option  ' + sel + ' data-order="' + keys + '" data-id="' + val.id + '">' + val.area + '</option>';

        });
        $('#arc_area').html(items);
    });

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

    $('.arc-register').hide();
    $('.arc-make-register').on('click', function (e) {
        e.preventDefault();
        $('.arc-register').show();
        $('.arc-login').hide();
    })
    $('.arc-make-login').on('click', function (e) {
        e.preventDefault();
        $('.arc-register').hide();
        $('.arc-login').show();
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
                    $('.alert').show();
                    $('.alert p').html(res.data.msg);
                    $.each(res.data.fields, function (index, value) {
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
                //action: 'register_user_front_end',
                req: $('#arc-register-form').serialize()
            },
            success: function (res) {

                $('.alert').addClass('alert-success');
                $('.alert').show();
                $('.alert p').html(res.data.msg);
                if (res.success != false) {
                    //location.reload();
                } else {
                    $('.alert').addClass('alert-success');
                    $('.alert').show();
                    $('.alert p').html(res.data.msg);
                    $.each(res.data.fields, function (index, value) {
                        $('.alert p').append($('label[for="' + value + '"]').text() + '<br />');
                    });

                }

            },
            error: function (errorThrown) {
                alert(errorThrown);
            }
        });
    });

    //profile

    $("#arc_profile .arc-update").on('click', function (e) {

        e.preventDefault();
        // $(this).after('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i><span class="sr-only">Loading...</span>');

        $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            data: {
                action: 'profile_user_front_end',
                req: $('#arc-profile-from').serialize()
            },
            success: function (res) {

                $('.alert').addClass('alert-success');
                $('.alert').show();
                $('.alert p').html(res.data.msg);
                if (res.success != false) {
                    // location.reload();
                } else {
                    $('.alert').addClass('alert-success');
                    $('.alert').show();
                    $('.alert p').html(res.data.msg);
                    $.each(res.data.fields, function (index, value) {
                        $('.alert p').append($('label[for="' + value + '"]').text() + '<br />');
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