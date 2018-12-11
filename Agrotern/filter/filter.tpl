<script type="text/javascript" src="{THEME}/filter/filter.js"></script>
<div class="filter no-select">
	<div class="title"><i class="fa fa-calendar"></i> Год выпуска</div>
	<div id="xf_year" class="filter-slider">
		<span class="filter-value val1"></span>
		<span class="filter-value val2"></span>
	</div>
	<!-- <div class="title"><i class="fa fa-star-o"></i> Рейтинг КиноПоиск</div>
	<div id="xf_kinopoisk" class="filter-slider">
		<span class="filter-value val1"></span>
		<span class="filter-value val2"></span>
	</div> -->
	<div class="clr"></div>
</div>
<div class="filter-buttons no-select">
	<div class="butt yellow">
		<span>Выбрать жанры <i class="fa fa-angle-down"></i></span>
		<div class="list" id="genre-id">
			<div class="top">
			Фильмы
				<span class="offin"><span id="one-genre">и</span><span id="all-genres" class="active">или</span></span>
				<span class="about">
					<b>и:</b> отберутся фильмы, соответствующие всем выбранным жанрам;<br />
					<b>или:</b> отберутся все фильмы хотя бы одного жанра
				</span>
				<div class="clr"></div>
			</div>
			<button class="cbtn [category=2] active[/category]" data-id="2">Биография</button>
			<button class="cbtn [category=3] active[/category]" data-id="3">Боевик</button>
			<button class="cbtn [category=4] active[/category]" data-id="4">Вестерн</button>
			<button class="cbtn [category=5] active[/category]" data-id="5">Военный</button>
			<button class="cbtn [category=6] active[/category]" data-id="6">Детектив</button>
			<button class="cbtn [category=7] active[/category]" data-id="7">Детский</button>
			<button class="cbtn [category=8] active[/category]" data-id="8">Документальный</button>
			<button class="cbtn [category=9] active[/category]" data-id="9">Драма</button>
			<button class="cbtn [category=10] active[/category]" data-id="10">Исторический</button>
			<button class="cbtn [category=11] active[/category]" data-id="11">Комедия</button>
			<button class="cbtn [category=12] active[/category]" data-id="12">Криминал</button>
			<button class="cbtn [category=13] active[/category]" data-id="13">Мелодрама</button>
			<button class="cbtn [category=14] active[/category]" data-id="14">Мистика</button>
			<button class="cbtn [category=15] active[/category]" data-id="15">Музыка</button>
			<button class="cbtn [category=16] active[/category]" data-id="16">Мультфильмы</button>
			<button class="cbtn [category=17] active[/category]" data-id="17">Мюзикл</button>
			<button class="cbtn [category=18] active[/category]" data-id="18">Приключения</button>
			<button class="cbtn [category=19] active[/category]" data-id="19">Психологический</button>
			<button class="cbtn [category=20] active[/category]" data-id="20">Разное</button>
			<button class="cbtn [category=21] active[/category]" data-id="21">Романтический</button>
			<button class="cbtn [category=22] active[/category]" data-id="22">Семейный</button>
			<button class="cbtn [category=23] active[/category]" data-id="23">Спорт</button>
			<button class="cbtn [category=24] active[/category]" data-id="24">Триллер</button>
			<button class="cbtn [category=25] active[/category]" data-id="25">Ужасы</button>
			<button class="cbtn [category=26] active[/category]" data-id="26">Фантастика</button>
			<button class="cbtn [category=27] active[/category]" data-id="27">Фэнтези</button>
			<div class="top">Мультфильмы</div>
			<button class="cbtn [category=28] active[/category]" data-id="28">Приключения</button>
			<button class="cbtn [category=29] active[/category]" data-id="29">Комедия</button>
			<button class="cbtn [category=30] active[/category]" data-id="30">Страшные</button>
			<button class="cbtn [category=31] active[/category]" data-id="31">Детские</button>
			<button class="cbtn [category=32] active[/category]" data-id="32">Короткометражки</button>
			<button class="cbtn [category=33] active[/category]" data-id="33">Аниме</button>
			<button class="cbtn [category=34] active[/category]" data-id="34">Отечественные</button>
			<button class="cbtn [category=35] active[/category]" data-id="35">Зарубежные</button>
			<button class="cbtn [category=36] active[/category]" data-id="36">Советские</button>
			<button class="cbtn [category=37] active[/category]" data-id="37">Мультсериалы</button>
			<button class="cbtn [category=38] active[/category]" data-id="38">Для девочек</button>
			<button class="cbtn [category=39] active[/category]" data-id="39">Для мальчиков</button>
		</div>
		</div>
	<div class="butt yellow">
		<span>Выбрать страны <i class="fa fa-angle-down"></i></span>
		<div class="list" id="xf_country">
			<div class="top">Выберите необходимые страны</div>
			<button class="cbtn">Австралия</button>
			<button class="cbtn">Бразилия</button>
			<button class="cbtn">Великобритания</button>
			<button class="cbtn">Германия</button>
			<button class="cbtn">Дания</button>
			<button class="cbtn">Индия</button>
			<button class="cbtn">Ирландия</button>
			<button class="cbtn">Испания</button>
			<button class="cbtn">Италия</button>
			<button class="cbtn">Канада</button>
			<button class="cbtn">Люксембург</button>
			<button class="cbtn">Нидерланды</button>
			<button class="cbtn">Норвегия</button>
			<button class="cbtn">Польша</button>
			<button class="cbtn">Россия</button>
			<button class="cbtn">Румыния</button>
			<button class="cbtn">СССР</button>
			<button class="cbtn">США</button>
			<button class="cbtn">Украина</button>
			<button class="cbtn">Франция</button>
		</div>
	</div>
	<div class="butt red">
		<span>Подобрать <i class="fa fa-filter"></i></span>
	</div>
	<div class="clr"></div>
</div>