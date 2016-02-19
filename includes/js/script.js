$(document).ready(function(){

	$('#btn-view').hide();
	$('.content-loader').hide();

	$('#btn-add').click(function(){
		$('.content-loader').fadeOut('slow', function(){
			$('.content-loader').fadeIn('slow');
			$('.content-loader').load('add-form.php');
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

});