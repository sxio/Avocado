$(document).ready(function(){
	$("#accordion").hide();

	$("#drop").click(function(){
		$(this).hide();
	});

	$("#thelist").on("hide.bs.collapse", function(){
		$("#expcoll").html('Jenis Dokter <i class="fa fa-plus fa-fw exp"></i>');
	});

	$("#thelist").on("show.bs.collapse", function(){
		$("#expcoll").html('Jenis Dokter <i class="fa fa-minus fa-fw exp"></i>');
	});
});