$(document).ready(function(){
	$('#pel').click(function (e) {
		e.preventDefault();
		$('#myTab a[href="#peliculas"]').tab('show')
	})
	$('#al').click(function (e) {
		e.preventDefault();
		$('#myTab a[href="#altas"]').tab('show')
	})
	$('#ba').click(function (e) {
		e.preventDefault();
		$('#myTab a[href="#bajas"]').tab('show')
	});
	$('#ca').click(function (e) {
		e.preventDefault();
		$('#myTab a[href="#cambios"]').tab('show')
	});
	$('#bus').click(function (e) {
		e.preventDefault();
		$('#myTab a[href="#busquedas"]').tab('show')
	});
});
