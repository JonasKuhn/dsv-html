var sizeImage = 1;
var original_x, original_y;
var pause = false;

$(window).load(function(){

	// POSIÇÃO ABSOLUTA DO CONTEUDO NA TELA
	var pos_x = $('#container_image').offset().left;
	var pos_y = $('#container_image').offset().top;
	
	// LARGURA E ALTURA DO CONTAINER
	var container_x = $('#container_image').width();
	var container_y = $('#container_image').height();
	
	original_x = $('#image').width();
	original_y = $('#image').height();


	function atualizaMove(){
		
		$('#container_image').unbind();
		
		if($('#image').width()>$('#container_image').width() || $('#image').height()>$('#container_image').height() ){
			
			// LARGURA E ALTURA DO CONTEUDO
			var conteudo_x = parseInt(original_x * sizeImage);
			var conteudo_y = parseInt(original_y * sizeImage);
			
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
			
		}
	}
	
	atualizaMove();
	
	// MOSTRANDO A IMAGEM
	$('#image').css('visibility','visible');	

	
	
	function wheel(event){var delta=0;if(!event)event=window.event;if(event.wheelDelta){delta=event.wheelDelta/120;if(window.opera)delta=-delta;}else if(event.detail){delta=-event.detail/3;}if(delta)handle(delta);if(event.preventDefault)event.preventDefault();event.returnValue=false;}if(window.addEventListener)window.addEventListener('DOMMouseScroll',wheel,false);window.onmousewheel=document.onmousewheel=wheel;  
	function handle(delta){
		if(pause==false){
			
			pause = true;
			window.setTimeout(function(){
				pause = false;
			},100);			
			
			if(delta < 0){
				if( (original_x * (sizeImage - 0.02) ) < container_x) return false;
				sizeImage = sizeImage - 0.03;
			} else {
				sizeImage = sizeImage + 0.03;
			}

			new_width = parseInt(original_x * sizeImage);
			new_height = parseInt(original_y * sizeImage);
			
			$('#image').width(new_width).height(new_height);
			
			atualizaMove();
			
		}
		
		
	}	
	
});