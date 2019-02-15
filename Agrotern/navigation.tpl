<div class="col-md-12">

		<div id="ajax-next-page">[next-link]Показать Еще[/next-link]</div>
		<!--div class="page_next-prev">
				<span class="page_prev" title="Предыдущая страница">
					[prev-link]<svg class="icon icon-left"><use xlink:href="#icon-left"></use></svg>[/prev-link]
				</span>
				<span class="page_next" title="Следующая страница">
					[next-link]<svg class="icon icon-right"><use xlink:href="#icon-right"></use></svg>[/next-link]
				</span>
			</div>
			<div class="pages">{pages}</div-->

				
</div>




<script type="text/javascript">



$( "#ajax-next-page" ).click(function( event ) {
  event.preventDefault();
  var nextPage = $('#ajax-next-page a').attr('href');
                if (nextPage !== undefined) {
                    $.ajax({
                        url: nextPage,
                        success: function(data) {
                            $('#ajax-next-page').remove();
							$('#dle-content').append($('#dle-content', data).html());
							setTimeout(() => {
								lazyload();	
							}, 500);
							
                        }
                    })
				}
				
  
});

</script>