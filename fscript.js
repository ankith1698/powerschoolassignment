$(document).ready(function(){
	$("#enter").keyup(function(){
		$.get("find.php", {cars: $(this).val()}, function(data){
			$("#carss").empty();
			$("#carss").html(data);
		});
	}
});
