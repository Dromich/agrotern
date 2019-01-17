<div class="main_item col-md-4">
		
	<div class="item_in">
			[full-link]
			<img class="item_img" src="[xfvalue_image_url_main_img]" alt="{title}">
			[/full-link]
			<h3 class="item_ttl">{title limit="20"}...</h3>
			<span class="item_brand">[xfvalue_brand]</span>
			<span class="marketing_span">Хит продаж</span>
			
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