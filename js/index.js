document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.carousel').carousel({
    	fullWidth: true,
    	indicators: true,
    });
  });
  var menu = document.querySelector('.home')
	window.addEventListener('scroll',function() {
	if(document.body.scrollTop > 4 || document.documentElement.scrollTop > 4 ){
		menu.style.opacity = '0.7'
	}else{
		menu.style.opacity = "10"
	}
});
  //código de inicialização select
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
  //script da senha
  
      var senha = $('#senha');
      var olho = $(".botao");

        olho.click(function() {
          senha.attr("type", "text");
          olho = "visibility_off"
          olho.style.color = "red"
        });

        olho.click(function() {
          senha.attr("type", "password");
        });
$(document).ready(function() {
    $('input#senha').characterCounter();
  });
        