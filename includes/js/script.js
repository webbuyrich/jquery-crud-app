$(document).ready(function(){

	$('[data-toggle="tooltip"]').tooltip();
	$('#btn-view').hide();
	$('.content-loader').hide();

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
		console.log(data);
	});

});