$(document).ready(function(){

	$('[data-toggle="tooltip"]').tooltip();
	$('#btn-view').hide();
	$('.content-loader').hide();
	//$('#dis').hide();

	$('#btn-add').click(function(){
		$('.content-loader').fadeIn('slow', function(){					
			$('#btn-add').hide();
			$('#btn-view').show();
		});
	});

	$('#btn-view').click(function(){
		$('body').fadeOut('slow',function(){
			$('body').load('index.php');
			$('body').fadeIn('slow');
			window.location.href='index.php';
		});
	});



	$('#btn-cancel').click(function(){
		$('.content-loader').fadeOut('slow', function(){					
			$('#btn-add').show();
			$('#btn-view').hide();
		});
	});

	$('#btn-save').click(function(e){
		e.preventDefault();
		var data = $("form").serialize();
		$.post('includes/create.php', data).done(function(values){
			$('#new-user-creation').fadeIn('slow', function(){				
				if(values.indexOf('Sorry') == -1){
					$('#new-user-creation').html('<div class="alert alert-success" role="alert" id="creation-success-message">'+values+'</div>').fadeIn('slow');
					
					$('#emp-SaveForm')[0].reset();
					setTimeout(function(){
						window.location.href='index.php';
					}, 8000);
				} else{
					$('#new-user-creation').html('<div class="alert alert-danger" role="alert">'+values+'</div>').fadeIn('slow');
				}

				
				
			});
		});
	});

});