//btn idioma
$(document).ready(function () {
  let ulElement = $(".home #dropdown")
  $(".home .viewIdioma").hover(function () {
    ulElement.removeClass('hiddenIdioma')
  })
  ulElement.mouseleave(function () {
    ulElement.addClass('hiddenIdioma')
  })
})

// carrosel de slide
window.setInterval(function () {
  $('.carousel').carousel('prev');

}, 3000)

$(document).ready(function () {
  $('.carousel').carousel({
    fullWidth: true,
    indicators: true,
    onCycleTo: 5
  });
});

// opacidade do menu quando dar um scroll
var menu = document.querySelector('.home')
window.addEventListener('scroll', function () {
  if (document.body.scrollTop > 4 || document.documentElement.scrollTop > 4 || menu.fo) {
    menu.style.opacity = '0.7'
  } else {
    menu.style.opacity = "10"
  }
  $('.home').hover(function () {
    menu.style.opacity = '10'
  }, function () {
    menu.style.opacity = '0.7'
  })
});


//código de inicialização select
document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('select');
  var instances = M.FormSelect.init(elems);
});

$(document).ready(function () {
  $('select').formSelect();
});

//script da senha
let olho = $(".botao");
olho.click(function () {
  let senha = $('#senha');
  let senhatype = senha.attr("type")
  $(this).attr("class", "material-icons").css({ 'cursor': 'pointer' })

  if (senhatype == "password") {
    senha.attr("type", "text")
    $(this).attr("class", "material-icons").html("visibility");
  } else if (senhatype == "text") {
    senha.attr("type", "password")
    $(this).attr("class", "material-icons").html("visibility_off");
  }

});
$(document).ready(function () {
  $('input#senha').characterCounter();
});
// funcao de click no cadastro de cursos
const input = $('.input-field .input')

input.click(function caixaInput() {
  let divElement = $('.cursosbox')
  let formElement = $('.cursosbox form')
  let btn = $('.btn-cursos button')
  let divElementInput = $('.input-field')

  divElement.attr("class", "box_input")
  formElement.attr("class", "box_form")
  btn.attr("class", "centralizar waves-effect  red lighten-1")
  divElementInput.attr("class", "input-select col s4")
});

//script de label do input
$(document).ready(function () {
  M.updateTextFields();
});
