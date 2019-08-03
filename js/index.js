// carrosel de slide
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.carousel').carousel({
    	fullWidth: true,
    	indicators: true,
      onCycleTo: 5
    });
  });
  // Slide automatico
  window.setInterval(function(){
      $('.carousel').carousel('prev');

    },3000)   
// opacidade do menu quando dar um scroll
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
  

      let olho = $(".botao");
        olho.click(function() {
            let senha = $('#senha');
            let senhatype = senha.attr("type")
            $(this).attr("class","material-icons").css({'cursor':'pointer'})

            if(senhatype == "password"){
                  senha.attr("type", "text")
                  $(this).attr("class","material-icons").html("visibility");
            }else if(senhatype == "text"){
               senha.attr("type", "password")
               $(this).attr("class","material-icons").html("visibility_off");
            }
          
        });

$(document).ready(function() {
    $('input#senha').characterCounter();
  });
