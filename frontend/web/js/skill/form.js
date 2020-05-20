$(document).ready( function () {
    var fullPath = window.location.href;
    var fullPathArr = fullPath.split('/');
    var role = fullPathArr[fullPathArr.length - 2];
    fullPathArr.splice(-1, 1);
    var fullPathCropped = fullPathArr.join('/');

    $('#sendSkill').on('click',function () {
        var fd = new FormData($(this).parents('form')[0]);
        $.ajax({
            url: fullPathCropped + "/skill/create",
            type: "POST",
            data: fd,
            cache: false,
            processData: false,
            contentType: false,
        }).done(function (data) {
            if (data) {
                $('.modal-backdrop:first').remove();
                $('.bootbox:first').remove();
                bootbox.alert('<p class="text-success">Навык Сохранен!</p>',function () {
                });
            } else {
                bootbox.alert('<p class="text-danger">Произошла ошибка!</p>');
            }
        });
    })
} );