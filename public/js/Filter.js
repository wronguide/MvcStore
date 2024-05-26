// Находим элемент кнопки по идентификатору


$(document).ready(function() {

    $(document).on('change',".filters__genre,.filters__age,.players__range input,#minPrice,#maxPrice ",function(event) {
        setFilter();
    });
    $(document).on('input',".fields__search-field",function(event) {
        setFilter();
    });

    function setFilter() {
        event.preventDefault();
        let genre = $(".filters__genre").val();
        let age = $(".filters__age").val();
        let player_count=$(".players__range input").val();
        let minPrice = $("#minPrice").val();
        let maxPrice = $("#maxPrice").val();
        let search=$(".fields__search-field").val();
        $.ajax({
            url: "filter",
            type: "post",
            data: {genre: genre,age:age,player_count:player_count,minPrice:minPrice,maxPrice:maxPrice,search:search},
            success: function(response) {
                $(".catalog__cards").html(response);
            }
        });
    }

    $(document).on('click',".clear-filter-button",function(event) {
        event.preventDefault();
       $(".filters__genre").val('All');
         $(".filters__age").val(0);
        $(".range__value").text("Любое")
        $(".players__range input").val(0);
        $("#minPrice").val('0');
        $("#minPrice").trigger('input')
        $("#maxPrice").val('5000');
        $("#maxPrice").trigger('input');
        $(".fields__search-field").val('');
        $(".fields__search-field").trigger('input');

        setFilter();
    });

});