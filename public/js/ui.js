
$(document).ready(function() {
    const $searchField = $(".fields__search-field");

    $searchField.on("input", function(event) {
        if( $searchField.val()!=""){
            $searchField.addClass('fields__search-field_active')
        }else{
            $searchField.removeClass('fields__search-field_active')
        }

    });

    // ---------------------------------

    const $sliderEl = $("#players__range");
    const $sliderValue = $(".range__value");

    $sliderEl.on("input", function(event) {
        let tempSliderValue = event.target.value;

        if (tempSliderValue < 1) {
            $sliderValue.text("Любое");
        } else if (tempSliderValue > 10) {
            $sliderValue.text("Больше");
        } else {
            $sliderValue.text(tempSliderValue);
        }
        $sliderEl.val(tempSliderValue);

        const progress = (tempSliderValue / $sliderEl.prop("max")) * 100;
    });


// ---------------------------------


    function slideOne() {
        if (parseInt($sliderTwo.val()) - parseInt($sliderOne.val()) <= minGap) {
            $sliderOne.val(parseInt($sliderTwo.val()) - minGap);
        }
        displayValOne.text($sliderOne.val());
        fillColor();
    }

    function slideTwo() {
        if (parseInt($sliderTwo.val()) - parseInt($sliderOne.val()) <= minGap) {
            $sliderTwo.val(parseInt($sliderOne.val()) + minGap);
        }
        displayValTwo.text($sliderTwo.val());
        fillColor();
    }

    function fillColor() {
        let percent1 = ($sliderOne.val() / $sliderMaxValue) * 100;
        let percent2 = ($sliderTwo.val() / $sliderMaxValue) * 100;
        $sliderTrack.css("background", `linear-gradient(to right, #e9e9e9 ${percent1}%, #BA576F ${percent1}%, #BA576F ${percent2}%, #e9e9e9 ${percent2}%)`);
    }


        // Ваш код здесь




    let $sliderOne = $("#minPrice");
    let $sliderTwo = $("#maxPrice");
    let displayValOne = $("#range1");
    let displayValTwo = $("#range2");
    let minGap = 0;
    let $sliderTrack = $(".slider-track");
    let $sliderMaxValue = $("#minPrice").prop("max");

    $sliderOne.on("input", slideOne);
    $sliderTwo.on("input", slideTwo);

     function initialize() {
        slideOne();
        slideTwo();

    }

    $(window).on("load", initialize);

});
