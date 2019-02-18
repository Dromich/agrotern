

<div class="row">
	<div class="col-md-12 col-xs-12">

		<div id="ajax-next-page">[next-link]Показать Еще[/next-link]</div>
		
				
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
</div>
