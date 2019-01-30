<div class="main_item col-md-4">
		
	<div class="item_in">

			[xfgiven_onsale]	<div class="onsale">Роспродажа</div>[/xfgiven_onsale]
			[full-link]
			<img class="item_img" src="[xfvalue_image_url_main_img]" alt="{title}">
			[/full-link]
			<h3 class="item_ttl">{title}</h3>
			<span class="item_brand">[xfvalue_brand]</span>
			[xfgiven_hitman]<span class="marketing_span">Хит продаж</span>[/xfgiven_hitman]
			[xfgiven_novinka]	<span class="marketing_span">Новинка</span>[/xfgiven_novinka]
			
			<div class="price_section">
				<span class="price"><span id="price_val{news-id}" class="price_val">[xfvalue_price]<span> <b>грн</b> </span>

			</div>
			[kylshop]{add-to-cart}[/kylshop]
			

		 
		

			
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