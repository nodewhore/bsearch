$(function (){
    const cookieBlock = $(".send-cookie");
    const cookieBtn = $('#cookie-btn');
    let cookieAccept;
    let storageCookie = localStorage.cookies;
    let response;
    cookieBtn.on('click',function (){
        localStorage.setItem('cookies', true);
        cookieAccept = true;
        console.log(cookieAccept);

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

        // if(storageCookie === false){
        //     cookieBlock.show();
        // }
        // else{
        //     cookieBlock.hide();
        // }




})
