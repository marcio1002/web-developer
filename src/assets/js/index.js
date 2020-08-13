$(function () {


  function getPropsUrl(url) {
    let obj = new Object;
    let infoUrl = new URL(url);
    let urlParams = new URLSearchParams(infoUrl.search)
    for ([key, val] of urlParams.entries()) obj[key] = val;
    return obj || {}
  }


  window.setInterval(() => $('.carousel').carousel('prev'), 3000)
  $('.carousel').carousel({ fullWidth: true, indicators: true, onCycleTo: 5 })
  $('select').formSelect()
  $('input#senha').characterCounter();
  M.updateTextFields();
  $('.materialboxed').materialbox();
  M.FormSelect.init($('select*'));


  /* btn idioma */
  $(".home #btnIdioma").click(function () { $(".home #dropdown").toggleClass('hiddenIdioma') })



  /* Opacidade do menu ao rolar para baixo */
  $(document).on("scroll", function () {
    if ($(this).scrollTop() > 4)
      $(".home").css("opacity", "0.7")
    else
      $(".home").css("opacity", "10")

    const parent = $(this);

    $(".home").hover(function () {
      if ($(parent).scrollTop() != 0) $(this).css("opacity", "10")
    }, function () {
      if ($(parent).scrollTop() != 0) $(this).css("opacity", "0.7")
    })
  })

  //script da senha

  $(".botao").click(function () {
    $(this).prop("class", "material-icons").css('cursor', 'pointer')

    if ($('#senha').prop("type") == "password") {
      $('#senha').prop("type", "text")
      $(this).prop("class", "material-icons").html("visibility");
    } else {
      $('#senha').prop("type", "password")
      $(this).prop("class", "material-icons").html("visibility_off");
    }

  });

  // função de click no cadastro de cursos

  $('.input-field .input').click(function () {
    $('.cursosbox').addClass("box_input")
    $('.cursosbox form').addClass("box_form")
    $('.btn-cursos button').addClass("centralizar waves-effect  red lighten-1")
    $('.input-field').addClass("input-select col s4")
  })


  $("#formLanguage").on("click", "#btnLanguagePtRB, #btnLanguageEnUS", function (evt) {
    evt.preventDefault()
    
    let data = getPropsUrl($(this).prop("href"))
  
    const options = {
      method: "POST",
      url: `${BASE_URL}/system/traduzir`,
      contentType: "application/x-www-form-urlencoded; charset=UTF-8",
      dataType: "json",
      data,
      beforeSend: () => $("#btnConversor").prop("disabled", true),
      complete: () => $("#btnConversor").prop("disabled", false),
      success: (res) => console.log(res),
      error: (err) => console.warn(err.responseText)
  
    }
  
    $.ajax(options)
  })

});