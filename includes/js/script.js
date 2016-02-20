$(document).ready(function(){

	$('[data-toggle="tooltip"]').tooltip();
	$('#btn-view').hide();
	$('.content-loader').hide();
	$('#creation-message-success').hide();
	$('#creation-message-error').hide();
	$('#emp-table').load('includes/table.php');
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

	$(document).on('click', '.cancel-error',function(){
		$('#creation-message-error').fadeOut('slow');
	});

	$('#btn-save').click(function(e){
		e.preventDefault();
		var data = $("form").serialize();
		$.post('includes/create.php', data).done(function(values){						
				if(values.indexOf('Sorry') == -1){
					$('#creation-message-success').html(values).fadeIn('slow');
					$('#creation-message-success').delay(2000).fadeOut('slow', function(){
						$('#emp-table').fadeOut('slow').load('includes/table.php').fadeIn('slow');
					});
					$('#emp-SaveForm')[0].reset();				
				} else{
					$('#creation-message-error').html(values +'<button class="btn btn-danger btn-xs cancel-error" type="button" id="btn-message-cancel"><span class="glyphicon glyphicon-remove" title="Cancel"></span> close</button>').fadeIn('slow');
				}
		});
	});

});