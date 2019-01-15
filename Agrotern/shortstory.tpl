<div class="main_item col-md-3">
		
	<div class="item_in">
			[full-link]
			<img class="item_img" src="[xfvalue_image_url_main_img]" alt="main image">
			[/full-link]
			<h3 class="item_ttl">{title limit="30"}...</h3>
			<span class="item_brand">[xfvalue_brand]</span>
			<span class="marketing_span">Хит продаж</span>
			
			<div class="price_section">
				<span class="price"><span id="price_val{news-id}" class="price_val">[xfvalue_price]<span> <b>грн</b> </span>

			</div>

			<div class="butts">
				<span class="b_but fl">Купить</span> 
				[full-link]<span class="v_but fr">Посмотреть</span>[/full-link]
		</div>

		 
		

			
	</div>
	
</div>
<script>
	function split_register() {
		console.log('Spl')
		$('#price_val{news-id}').each(function () {
	var price = $(this).text();
	//console.log(price);
	var metamorf = price .replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
	$(this).text(metamorf);	
	});
	}
	
	split_register();
	
	
	</script>