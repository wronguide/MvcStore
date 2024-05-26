const filterButton = document.querySelector(".fields__filters-button ")
const filters = document.querySelector(".filters")
const catalog_cards = document.querySelector(".catalog__cards")


filterButton.addEventListener("click",function () {
    if(window.getComputedStyle(filters).display === 'none'){
        filters.classList.add('filters_active'); // Добавляем класс для изменения ширины
        filterButton.classList.add('fields__filters-button_active');
        catalog_cards.style.gridTemplateColumns="repeat(4, 230px)";

    }else {
        filters.classList.remove('filters_active');
        filterButton.classList.remove('fields__filters-button_active');
        catalog_cards.style.gridTemplateColumns="repeat(5, 230px)";
    }

})