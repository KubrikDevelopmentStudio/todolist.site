/**
 * Created by root on 18.11.16.
 */

$(document).ready(function () {
    $('[name=userLogin]').on('change', function () {
        var inputValue = $(this).val();

        if(inputValue != "") {
            $.ajax({
                type: "POST",
                dataType: "JSON",
                url: "../functions/handler.php",
                data: {
                    action: "checkUserExists",
                    input_login: inputValue
                },

                error: function (e) {
                    console.log("При обращении к серверу произошла ошибка: " + e.responseText);
                },

                success: function (data) {
                    if(data != null) {
                        dataParse(data);
                    }
                }

            });
        }
    });


    function dataParse(data) {
        var dataPrs = JSON.parse(dataPrs);

        if(dataPrs.exists != "false") {
            /*Парсимся*/
        } else {
            console.log('Внимание! Пользователь с ником <ник> не найден!');
            return false;
        }
    }
});
