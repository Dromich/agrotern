<section class="iner_cont">
	<h1 class="iner_ttl">{title}</h1>
<div class="container">
<div class="row">
	<div class="iner_slider col-md-4">
		<div class="fotorama" data-width="100%" 
	 data-fit="contain" data-autoplay="true" data-loop="true" data-nav="thumbs">
	 
	 [xfvalue_slide_img]
		
	  </div> 
	</div>
	<div class="market_elem col-md-4">
		<ul class="market_ul">
			<li class="manufacturer">"Производитель: <b>[xfvalue_brand]</b>"</li>
			<li><div class="rate_stars">{rating}</div></li>
			<li class="price"><b>[xfvalue_price]</b> грн</li>
					[xfgiven_on-sale] 	<li class="on_sele"> <i class="fas fa-check"></i> В наличии</li>[/xfgiven_on-sale]
					[xfnotgiven_on-sale] <li class="on_sele_off"> <i class="fas fa-times"></i>  Нет в наличии</li> [/xfnotgiven_on-sale]
			<li><a class="" href="#"></a><a href="{full-link}" class="add_to_cart bay_naw" data-goodsId="{news-id}" data-goodsPrice="[xfvalue_price]" data-goodsTitle="{title}">В корзину </a></li>
			
			<li><a class="bay_naw one_klick" href="#">Купить в 1 клик</a></li>
			<li><a class="bay_naw one_klick" href="#">Купить в кредит</a></li>
			
			<li class="short_disk"><h5>Краткое описание</h5>
				{short-story} </li>
		</ul>
	</div>
	<div class="market_ditail col-md-4">
		<ul class="market_dit_ul">
			<li>
				<img class="fulstor_icon" src="{THEME}/img/icon/delivery-truck.svg" alt="delivery-truck">
				
				<h4>Доставка</h4> <br>
			<p>Бесплатная доставка</p> </li>
			<li><img class="fulstor_icon" src="{THEME}/img/icon/get-money.svg" alt="get-money"><h4>Оплата</h4> <br>
				<p>Наличными, <br>
					Безналичными (с НДС и без НДС)  <br>
					Кредит</p>
			</li>
			<li><img class="fulstor_icon" src="{THEME}/img/icon/warranty.svg" alt="warranty">
				<h4>Гарантия</h4> <br>
				<p>Официальная гарантия от производителя</p>
				<p> Возврат в течении 14 дней</p>
				
			</li>
		</ul>
	</div>
<div class="col-md-12 desc">
		<div itemprop="description"><h2>{title} - описание</h2>


 

			{full-story}

			</div>

</div>

</div>

</div>
<script>
		function split_register() {
			console.log('Spl')
			$('.price').each(function () {
		var price = $(this).text();
		//console.log(price);
		var metamorf = price .replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
		$(this).text(metamorf);	
		});
		}
		
		split_register();
		
		
		</script>
</section>