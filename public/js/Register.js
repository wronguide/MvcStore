$(document).ready(function() {
    $(document).on('click',".header__exit_icon",function(event) {
        event.preventDefault();
        $.ajax({
            url: "logout",
            type: "get",
            data: {

            },
            success: function(response) {
                window.location.href="/";
            }

    });
});
    $(document).on('click',".reg__button",function(event) {
        let reg_name = $(".reg__name").val();
        let reg_surname = $(".reg__surname").val();
        let reg_email = $(".reg__email").val();
        let reg_number_phone = $(".reg__number_phone").val();
        let reg_password = $(".reg__password").val();
        let reg_password_repeat = $(".reg__password_repeat").val();
        let reg_accept = $("#reg__accept").val();
        var formData = new FormData();
        formData.append('file', $("#reg__photo")[0].files[0]);
        if(reg_name==""||reg_surname==""||reg_email==""||reg_number_phone==""||reg_password==""||reg_accept==""||reg_password_repeat==""){

        }else{
            if(reg_password_repeat!=reg_password){
                event.preventDefault();
                $(".reg__error").text('Пароли не совпадают');
                $(".reg__error").css('display', 'block');
            }else{
                event.preventDefault();
                $.ajax({
                    url: "register",
                    type: "get",
                    data: {
                        reg_name: reg_name
                        ,reg_surname: reg_surname,
                        reg_email: reg_email,
                        reg_number_phone: reg_number_phone,
                        reg_password: reg_password,
                        reg_photo: formData,
                        reg_accept: reg_accept
                    },
                    success: function(response) {
                        if(response==0){
                            $(".reg__error").text('Пользователь с такой почтой или номером телефона уже зарегистрирован!')
                            $(".reg__error").css('display', 'block');
                        }else{
                            window.location.href="/";
                        }
                    }

                });
            }


        }









        });
    $(document).on('click',".login__button",function(event) {
        event.preventDefault();

        let login_email = $(".login__email").val();
        let login_password = $(".login__password").val();


        $.ajax({
            url: "login",
            type: "get",
            data: {
                reg_email: login_email,
                reg_password: login_password,
            },
            success: function(response) {
                if(response==0){
                    $(".login__error").css('display', 'block');
                }else{
                    window.location.href="/";
                }
            }

        });
    });

});
