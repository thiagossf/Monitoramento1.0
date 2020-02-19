$(document).ready(function(){
	setInterval(check, 5000);
});

function check(){
	$('table').each(function(){
		$(this).find('tr').each(function(){
			$(this).find('td').each(function(indice){

				if(indice == 2){
					var ip = $(this).attr('class');
					$.ajax({
						url : "/monitoramento2.0/check.php",
						type : "GET",
						dataType : "html",
						data : {
							ip : ip
						},
						success: function(result){
							$("." + ip).html(result);	
						},
					});
				}
			});
		});
	});
}