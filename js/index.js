$(document).ready(function() {


    $('#employee_submit, #brigadier_submit').on('click', function(e) {
        var data = $(this).parent().serialize();
        console.log(data);
        var str = e.target.id;
        var pos = str.indexOf('_');
        str = str.substring(0, pos);
        
        $.ajax({
            url: 'create.php',
            method: 'post',
            data: data ,
            dataType: 'json',
            success: function(response) {
                $('.error').remove();
                $('.has-error').removeClass('has-error');

                if(response['error'] == true) {
                    for(var i = 0; i < response['fields'].length; i++) {
                        var name = response['fields'][i];
                        var status = response['status'][name];

                        $('#' + str + '_' + name).parent().addClass('has-error');
                        $('#' + str + '_' + name).after("<div class='error'>" + status + "</div>");
                    }
                } else {
                    window.location.reload();
                }
            },
            error: function(response) {
                console.log(response);
            }
        })
    });

    $('.delete_item').on('click', function(e) {
        e.preventDefault();

        var data = {};
        data['id'] = $(this).data("id");
        data['type'] = $(this).data("type");

        $.ajax({
            url: 'delete.php',
            method: 'post',
            data: data ,
            success: function(response) {
                window.location.reload();
            },
            error: function(response) {
                console.log(response);
            }
        })
    })
});