$(function (){
    const cookieBlock = $(".send-cookie");
    const cookieBtn = $('#cookie-btn');
    const formRegister = $('#register-form');
    let inputEmail = $('email').val();
    let inputName = $('name').val();
    let inputPassword = $('password').val();
    let inputPassword2 = $('password_2').val();
    let inputNumber = $('number').val();
    let inputCity = $('city').val();
    let storageCookie = localStorage.getItem('cookies');
    let checkBox = $('flexCheckChecked');
    let cookieAccept;
    let storageCookie1 = localStorage.cookies;
    let response;
    $('.preloader').fadeOut();
    // formRegister.submit(function (e){
    //     e.preventDefault();
    //     $('.error').remove();
    //    if(inputEmail.length< 6){
    //     $('#email').after('<span class="error">E-mail слишком короткий</span>')
    //    }
    //     if(inputName.length< 6){
    //         $('#name').after('<span class="error">Имя слишком короткое</span>')
    //     }
    //     if(inputCity.length< 6){
    //         $('#city').after('<span class="error">Название города слишком короткое</span>')
    //     }
    //     if(inputNumber.length< 6){
    //         $('#number').after('<span class="error">Номер слишком короткий</span>')
    //     }
    //     if(inputPassword.length< 6){
    //         $('#password').after('<span class="error">Пароль слишком короткий</span>')
    //     }
    //     if(inputPassword!==inputPassword){
    //         $('#password_2').after('<span class="error">Пароли не совпадают</span>')
    //     }
    //    // else{
    //    //     $(".error").remove();
    //    // }
    // });
    cookieBtn.on('click',function (){
        localStorage.setItem('cookies', true);
        cookieAccept = true;
        console.log(cookieAccept);
        hideCookie(storageCookie)
        function checkCookie(cookieAccept){
        if(cookieAccept === true){
            response = 'Куки разрешены';
            cookieBlock.hide(100);
            console.log(response)
        }
        else{
          response = 'Куки запрещены';
          console.log(response)
        }
    }
        checkCookie(cookieAccept);
    });

    function hideCookie(storageCookie){
        if(storageCookie === true){
            cookieBlock.hide();
        }
        else{
            cookieBlock.show();
        }
    }




})
