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