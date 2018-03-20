// DEFININDO GLOBAIS; 
var light_width, light_height, thumb_x, thumb_y, pos_thumb_x, pos_thumb_y;
var altura, largura, diferenca_shadow, shadow_100_porcento_x, shadow_100_porcento_y;						

// POSICIONANDO SHADOWS
function shadows(leftShadow,topShadow){
	topShadow = ( topShadow / 100 * shadow_100_porcento_y);
	leftShadow = ( leftShadow / 100 * shadow_100_porcento_x);
	$('#shadow_1').css('height',topShadow+'px');
	$('#shadow_2').css({'width':leftShadow+'px','top':topShadow+'px'});	
	$('#shadow_3').css({'left':leftShadow+'px','top':topShadow+'px'});
	$('#shadow_4').css('top',topShadow+'px');
}

$(window).load(function(){
	
	if($('#image').width()>$('#container_image').width() || $('#image').height()>$('#container_image').height() ){
		
		// POSIÇÃO ABSOLUTA DO CONTEUDO NA TELA
		var pos_x = $('#thumb').offset().left;
		var pos_y = $('#thumb').offset().top;
		
		// LARGURA E ALTURA DO CONTAINER
		var container_x = $('#container_image').width();
		var container_y = $('#container_image').height();
		
		// LARGURA E ALTURA DO CONTEUDO
		var conteudo_x = $('#image').width();
		var conteudo_y = $('#image').height();
		
		// LARGURA E ALTURA DO#thumb
		thumb_x = $('#thumb').width();
		thumb_y = $('#thumb').height();					
		
		// QUANTOS PX DO CONTEÚDO FICAM PRA FORA DO CONTAINER
		var diferenca_x = conteudo_x - container_x;
		var diferenca_y = conteudo_y - container_y;
		
		// POSICAO INICIAL ( na metade da tela)
		var metade_x = - parseInt(diferenca_x / 2);
		var metade_y = - parseInt(diferenca_y / 2);
			
		// ADICIONANDO SHADOWS
		for(i=1;i<5;i++){
			$('#container_thumb').append('<div class="shadow" id="shadow_'+i+'"><\/div>');
		}
		
		
		// VENDO QNTAS VEZES O THUMB É MENOR DO QUE A IMAGEM ORIGINAL
		var porcentagem_tamanho_x = $('#container_image').width() / $('#image').width() * 100;
		var porcentagem_tamanho_y = $('#container_image').height() / $('#image').height() * 100;
		light_width  = parseInt(thumb_x / 100 * porcentagem_tamanho_x);
		light_height = parseInt(thumb_y / 100 * porcentagem_tamanho_y);
		
	
		// PREPARANDO VARIÁVEIS  DO SHADOW
		$('#shadow_2, #shadow_3').css('height',light_height);
		$('#shadow_3').css('margin-left',light_width+'px');
		$('#shadow_4').css('margin-top',light_height+'px');
		
		altura = $('#container_thumb').height();
		largura = $('#container_thumb').width();
		$('#thumb, #shadow_4').height(altura);
		
		shadow_100_porcento_y = thumb_y - light_height;
		shadow_100_porcento_x = thumb_x - light_width;

		shadows(0,0);					
		
		
		// POSICIONANDO CONTEUDO
		$('#container_thumb').mousemove(function(e){
			
			pos_thumb_x = e.pageX - pos_x;
			pos_thumb_y = e.pageY - pos_y;
			
	
			porcentagem_x = parseInt( pos_thumb_x / thumb_x * 100);
			porcentagem_y = parseInt( pos_thumb_y / thumb_y * 100);
			leftPosition = parseInt(0 - (diferenca_x  / 100 * porcentagem_x ));
			topPosition = parseInt(0 - (diferenca_y  / 100 * porcentagem_y ));
			
			shadows(porcentagem_x,porcentagem_y);						

			$('#image').css({
				'left':leftPosition,
				'top':topPosition
			});
		});					

		// MOSTRANDO IMAGENS
		$('img').css('visibility','visible');		
		$('.shadow').css('opacity','0.7');

	}
});