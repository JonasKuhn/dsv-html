$(window).load(function(){
	if($('#image').width()>$('#container_image').width() || $('#image').height()>$('#container_image').height() ){
		
		// POSIÇÃO ABSOLUTA DO CONTEUDO NA TELA
		var pos_x = $('#container_image').offset().left;
		var pos_y = $('#container_image').offset().top;
		
		// LARGURA E ALTURA DO CONTAINER
		var container_x = $('#container_image').width();
		var container_y = $('#container_image').height();
		
		// LARGURA E ALTURA DO CONTEUDO
		var conteudo_x = $('#image').width();
		var conteudo_y = $('#image').height();
		
		// QUANTOS PX DO CONTEÚDO FICAM PRA FORA DO CONTAINER
		var diferenca_x = conteudo_x - container_x;
		var diferenca_y = conteudo_y - container_y;
		
		// POSICAO INICIAL ( na metade da tela)
		var metade_x = - parseInt(diferenca_x / 2);
		var metade_y = - parseInt(diferenca_y / 2);
		
		// POSICIONANDO CONTEUDO
		$('#container_image').mousemove(function(e){
			porcentagem_x = parseInt( (e.pageX - pos_x) / container_x * 100);
			porcentagem_y = parseInt( (e.pageY - pos_y) / container_y * 100);
			leftPosition = parseInt(0 - (diferenca_x  / 100 * porcentagem_x ));
			topPosition = parseInt(0 - (diferenca_y  / 100 * porcentagem_y ));
			$('#image').css({
				'left':leftPosition,
				'top':topPosition
			});
		});					
		
		// MOSTRANDO A IMAGEM
		$('#image').css('visibility','visible');
	}
	
});