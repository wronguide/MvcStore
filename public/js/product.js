$(document).ready(function(){
$(document).on('click', '.images__other img',function(event){

    $(".images__other img").removeClass('selected');
    event.target.classList.add('selected');
    $(".images__main img").attr('src', event.target.src);
});
});