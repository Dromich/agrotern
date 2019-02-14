<script type="text/javascript" src="{THEME}/filter/filter.js"></script>
<div class="filter no-select">
	<div class="title"><i class="fa fa-calendar"></i> Цена От и До</div>
	<div id="xf_price" class="filter-slider">
		<span class="filter-value val1"></span>
		<span class="filter-value val2"></span>
	</div>
	
	<div class="clr"></div>
</div>
<div class="hidden">
		[category=9]<span id="cat_value">9</span>[/category]
		[category=10]<span id="cat_value">10</span>[/category]
		[category=11]<span id="cat_value">11</span>[/category]
		[category=12]<span id="cat_value">12</span>[/category]
		[category=13]<span id="cat_value">13</span>[/category]
		[category=14]<span id="cat_value">14</span>[/category]
		[category=15]<span id="cat_value">15</span>[/category]
		[category=16]<span id="cat_value">16</span>[/category]
		[category=17]<span id="cat_value">17</span>[/category]
		[category=18]<span id="cat_value">18</span>[/category]

</div>
<div class="filter-buttons no-select">
	<div class="butt yellow">
			[not-category=12]	<span>Производитель<i class="fa fa-angle-down"></i></span>[/not-category]
		<div class="list" id="xf_brand">
				[not-category=11,12,13,14] 
			<button class="cbtn">Claus</button>
			<button class="cbtn">DW</button>			
			<button class="cbtn">Forte</button>
			<button class="cbtn">GARDEN SCOUT</button>
			<button class="cbtn">Shifeng</button>
			<button class="cbtn">Булат</button>
			<button class="cbtn">Витязь</button>
			<button class="cbtn">Добрыня</button>
			<button class="cbtn">ДТЗ</button>
			<button class="cbtn">Файтер</button>
			<button class="cbtn">Lider</button>
			[/not-category]

			[category=10] 
			<button class="cbtn">DongFeng</button>			
			<button class="cbtn">Foton</button>
			<button class="cbtn">Jinma</button>
			<button class="cbtn">Mitsubishi</button>
			<button class="cbtn">SOLIS</button>
			<button class="cbtn">WUZHENG</button>
			<button class="cbtn">Xingtai</button>
			<button class="cbtn">Zoomlion</button>			
			<button class="cbtn">МТЗ(Belarus)</button>

			[/category]<!--Мінітрактори-->

			[category=11] 
			<button class="cbtn">ДТЗ</button>
			<button class="cbtn">Forte</button>
			<button class="cbtn">GARDEN SCOUT</button>
			<button class="cbtn">Zirka</button>
			<button class="cbtn">Карпаты</button>
			<button class="cbtn">Кентавр</button>
			

			[/category]<!--Мотоблоки-->
			
			
			
			
			
		</div>
		</div>
	<div class="butt yellow">
		<span>Мощность   <i class="fa fa-angle-down"></i></span>
		<div class="list" id="xf_power">
			
			<button class="cbtn">12</button>
			<button class="cbtn">15</button>
			<button class="cbtn">16</button>
			<button class="cbtn">18</button>
			<button class="cbtn">20</button>
			<button class="cbtn">22</button>
			<button class="cbtn">24</button>
			[category=10]
			<button class="cbtn">18</button>
			<button class="cbtn">20</button>
			<button class="cbtn">22</button>
			<button class="cbtn">24</button>
			<button class="cbtn">25</button>
			<button class="cbtn">35</button>
			<button class="cbtn">36</button>
			<button class="cbtn">40</button>
			<button class="cbtn">45</button>
			<button class="cbtn">50</button>
			<button class="cbtn">81</button>
			<button class="cbtn">88</button>
			<button class="cbtn">105</button>
			<button class="cbtn">120</button>
			<button class="cbtn">130</button>
			<button class="cbtn">140</button>
			[/category]<!--Мінітрактори-->
			[category=11] 
			<button class="cbtn">5</button>
			<button class="cbtn">6</button>
			<button class="cbtn">6.5</button>
			<button class="cbtn">7</button>
			<button class="cbtn">7.6</button>
			<button class="cbtn">8</button>
			<button class="cbtn">8.8</button>
			<button class="cbtn">9</button>
			<button class="cbtn">10</button>
			<button class="cbtn">11</button>
			<button class="cbtn">12</button>
			<button class="cbtn">13</button>
			<button class="cbtn">15</button>
			

			[/category]<!--Мотоблоки-->

			[category=13] 
			<button class="cbtn">1-15Квт</button>
			<button class="cbtn">15-120Квт</button>
			<button class="cbtn">120-900Квт</button>
			
			

			[/category]<!--ГЕНЕРАТОРИ-->
			
		</div>
	</div>

	[category=9,10]
	<div class="butt yellow">
			<span>Количество цилиндров <i class="fa fa-angle-down"></i></span>
			<div class="list" id="xf_cylinders">
				
				<button class="cbtn">1</button>
				<button class="cbtn">3</button>
				<button class="cbtn">4</button>
				[not-category=9]
				<button class="cbtn">6</button>
				[/not-category]
				
				
			</div>
		</div>

		[/category]

		[category=11]
	<div class="butt yellow">
			<span>Охлаждение <i class="fa fa-angle-down"></i></span>
			<div class="list" id="xf_coling">
				
				<button class="cbtn">Воздушное</button>
				<button class="cbtn">Водяное</button>
				
				
				
			</div>
		</div>
		<div class="butt yellow">
				<span>Тип топлива<i class="fa fa-angle-down"></i></span>
				<div class="list" id="xf_toplivo">
					
					<button class="cbtn">Дизель</button>
					<button class="cbtn">Бензин</button>
					
					
					
				</div>
			</div>
		[/category]

		[category=9,10]
		<div class="butt yellow">
				<span>Привод <i class="fa fa-angle-down"></i></span>
				<div class="list" id="xf_wd">
					
					<button class="cbtn">4X4</button>
					<button class="cbtn">4X2</button>
					
					
					
					
				</div>
			</div>
			<div class="butt yellow">
					<span>Регулируемая колея <i class="fa fa-angle-down"></i></span>
					<div class="list" id="xf_weels">
						
						<button class="cbtn">Да</button>
						<button class="cbtn">Нет</button>
						
						
						
						
					</div>
				</div>
				<div class="butt yellow">
						<span>Кабина <i class="fa fa-angle-down"></i></span>
						<div class="list" id="xf_cabin">
							
							<button class="cbtn">Есть</button>
							<button class="cbtn">Нет</button>							
							
							
						</div>
					</div>
					[/category]

					[category=12]
					<div class="butt yellow">
							<span>Предназначение<i class="fa fa-angle-down"></i></span>
							<div class="list" id="xf_prdz">
								
								<button class="cbtn">Для мототрактора</button>
								<button class="cbtn">Для минитрактора</button>
								<button class="cbtn">Для мотоблока</button>							
								
								
							</div>
						</div>
						<div class="butt yellow">
								<span>Тип<i class="fa fa-angle-down"></i></span>
								<div class="list" id="xf_tip_obor">
									
									<button class="cbtn">Бороны</button>
									<button class="cbtn">Грабли</button>
									<button class="cbtn">Картофелекопатели</button>
									<button class="cbtn">Картофелесажатели</button>
									<button class="cbtn">Культиваторы</button>
									<button class="cbtn">Окучиватели</button>
									<button class="cbtn">Плуги</button>
									<button class="cbtn">Почвофрезы</button>
									<button class="cbtn">Прицепы</button>
									<button class="cbtn">Косы</button>
									<button class="cbtn">Чеснококопатели</button>
									<button class="cbtn">Чеснокосажатели</button>
									<button class="cbtn">Фронтальные погрузчики</button>
									<button class="cbtn">Другое оборудование</button>
									<button class="cbtn">Буры</button>
									<button class="cbtn">Опрыскиватели</button>
									<button class="cbtn">Разбрасыватели удобрений</button>
									<button class="cbtn">Сеялки</button>
									<button class="cbtn">Щетки</button>							
									
									
								</div>
							</div>

							[/category]

	<!---div id="filter_red_but" class="butt red">
		<span>Подобрать <i class="fa fa-filter"></i></span>
	</div-->
	<div class="clr"></div>
</div>