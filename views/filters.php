

        <span class="filters-title">
            Жанр
        </span>
                <select class="filters__select filters__genre">
                    <option value="All">Все</option>
                    <?
                    foreach ($filters as $genre){
                    ?>
                    <option value="<?=$genre['id_category']?>"><?=$genre['name_category']?></option>
                <?
                    }?>
                </select>
                <span class="filters-title">
            Возраст
        </span>
                <select class="filters__select filters__age">
                    <option value="0">Все</option>
                    <option value="6">6+</option>
                    <option value="12">12+</option>
                    <option value="16">16+</option>
                    <option value="18">18+</option>
                </select>
                <span class="filters-title">
            Количество игроков
        </span>
                <div class="players__range">
                    <input type="range" min="0" max="11" value="0" id="players__range" />
                    <div class="range__value">Любое</div>
                </div>
                <span class="filters-title">
            Цена
        </span>
                <div class="filters__price-container">


                        <div class="slider-container">
                            <div class="slider-track"></div>
                            <input type="range" min="0" max="20000" value="0" id="minPrice" >
                            <input type="range" min="0" max="20000" value="5000" id="maxPrice" >
                        </div>
                    <div class="values">
                        <span id="range1">
                            0
                        </span>

                         <span id="range2">
                        5000
                        </span>
                    </div>

                </div>
                <a href="" class="clear-filter-button"> Очистить фильтры</a>
