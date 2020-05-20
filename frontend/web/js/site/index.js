var fullPath = window.location.href;
var fullPathArr = fullPath.split('/');
var role = fullPathArr[fullPathArr.length - 2];
fullPathArr.splice(-1, 1);
var fullPathCropped = fullPathArr.join('/');

function AddTable() {
    $.get(fullPathCropped + "/user/index").done(function (data) {
        $('#user_table').html(data);
        $('#table_id').DataTable({
            "oLanguage": {
                "sUrl": "/js/DataTableRu/Russian.json"
            }
        });
    });
}

(function ($) {


    //добавляем таблицу на страницу
    AddTable();

    $('#CreateUser').on('click', function () {
        $.get(fullPathCropped + "/user/form").done(function (data) {
            bootbox.dialog({
                message: data,
            });
        });
    })

    $('#CreateRandomUser').on('click', function () {
        $.get(fullPathCropped + "/user/create-random").done(function (data) {
            if (data) {
                AddTable();
            } else {
                bootbox.alert('<p class="text-danger">Произошла ошибка!</p>');
            }
        });
    })

    $('#CreateCity').on('click', function () {
        $.get(fullPathCropped + "/city/form").done(function (data) {
            bootbox.dialog({
                message: data,
            });
        });
    })

    $('#CreateSkill').on('click', function () {
        $.get(fullPathCropped + "/skill/form").done(function (data) {
            bootbox.dialog({
                message: data,
            });
        });
    })


})(jQuery);
