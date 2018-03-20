$(document).ready(function(){
	
	if($('#conteudo').width()>$('#container').width()){

		var pos_linha_tempo = $('#conteudo').offset();
		var pos_x = pos_linha_tempo.left;
		var container = $('#container').width();
		var conteudo = $('#conteudo').width();
		var diferenca = conteudo - container;
		var metade = - parseInt(diferenca / 2);
		
		$('#conteudo').mousemove(function(e){
			x = e.pageX - pos_x;
			porcentagemX = parseInt(x / container * 100);
			left = parseInt(0 - (diferenca  / 100 * porcentagemX ));
			$('#conteudo').css('left',left);
		});		
		
		$('#conteudo').animate({
			'left':metade
		},200);
	}
});