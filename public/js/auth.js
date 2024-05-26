
$(document).ready(function(){

    function clear(){
        $('.reg__form input,.login__form input').val('');
        $('.reg__accept:checkbox').prop('checked', false);
        $('.reg__photo img').css('display', 'block');
        $('.reg__photo span').text("Фотография");

    }
    $(document).on('click', '.button_reg',function(event){
        event.preventDefault();
        $('body').css('overflow', 'hidden');
        $('.reg_window').css('display', 'block');
        $('.overlay').css('display', 'block');
    });
    function closeModalReg(){
        clear();
        $('body').css('overflow', 'visible');
        $('.reg_window').css('display', 'none');
        $('.login_window').css('display', 'none');
        $('.overlay').css('display', 'none');

    }
    $(document).on('click', '.close_icon',function(event){
        event.preventDefault();
        closeModalReg();
    });
    $(document).on('click', '.overlay',function(event){
        closeModalReg();
    });
    $(document).on('click', '.button_reg',function(event){
        event.preventDefault();
        $('body').css('overflow', 'hidden');
        $('.reg_window').css('display', 'block');
        $('.overlay').css('display', 'block');
    });

    $(document).on('click', '.reg_login',function(event){
        clear();
        event.preventDefault();
        $('body').css('overflow', 'hidden');
        $('.login_window').css('display', 'block');
        $('.reg_window').css('display', 'none');
        $('.overlay').css('display', 'block');

    });
    $(document).on('click', '.login__reg',function(event){
        clear();
        event.preventDefault();
        $('body').css('overflow', 'hidden');
        $('.login_window').css('display', 'none');
        $('.reg_window').css('display', 'block');
        $('.overlay').css('display', 'block');

    });
    $(document).on('change', '#reg__photo',function(event){
        $('.reg__photo img').css('display', 'none');
        $('.reg__photo span').text(this.files[0].name);
    });
    $(document).on('click', '.login__reg',function(event){

        event.preventDefault();
       

    });

});