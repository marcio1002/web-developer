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
  $('.materialboxed').materialbox()


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
      success: (res) => {if(!res.error) location.reload()},
      error: (err) => console.warn(err.responseText)
  
    }
  
    $.ajax(options)
  })

});