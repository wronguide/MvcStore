$(document).ready(function(){
    $(document).on('click', '.card__title',function(event){
        var productId = event.target.dataset.id;

        // Строим URL с параметром id_product
        var url = 'product?id_product=' + productId;

        // Переходим на новую страницу с передачей параметров через URL
        window.location.href = url;
    });
});