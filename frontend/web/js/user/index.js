$(document).ready( function () {
    var fullPath = window.location.href;
    var fullPathArr = fullPath.split('/');
    var role = fullPathArr[fullPathArr.length - 2];
    fullPathArr.splice(-1, 1);
    var fullPathCropped = fullPathArr.join('/');

    $('.delete').on('click',function () {
        var user_id = $(this).parents('tr').first().attr('id');
        bootbox.confirm({
            message: "Удалить пользователя?",
            buttons: {
                confirm: {
                    label: 'Удалить',
                    className: 'btn-danger'
                },
                cancel: {
                    label: 'Отмена',
                    className: 'btn-secondary'
                }
            },
            callback: function (result) {
                if (!result) return;
                $.get(fullPathCropped + "/user/delete", {
                    'id': user_id,
                }).done(function (data) {
                    if (data) {
                        bootbox.alert('<p class="text-success">Пользователь Удален!</p>',function () {
                            AddTable();
                        });
                    } else {
                        bootbox.alert('<p class="text-danger">Произошла ошибка!</p>');
                    }
                });
            }
        });
    })

    $('.update').on('click',function () {
        var user_id = $(this).parents('tr').first().attr('id');
        $.get(fullPathCropped + "/user/form",{
            'id': user_id,
        }).done(function (data) {
            bootbox.dialog({
                message: data,
            });
        });
    })

} );