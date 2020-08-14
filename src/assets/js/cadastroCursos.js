$(function() {
  $('.input-field .input').one("click",function () {
    $("h1:eq(0)").addClass("white-text center-align")
    $('#cursosbox').addClass("box")
    $('#cursosbox form').addClass("box_form")
    $("#formCadCurses").removeClass("s12").addClass("s8 push-s2");
    $('.input-field').addClass("input-select col s4 push-s3")
    $('#btnCadCurses').addClass("btn-cadastrar waves-effect  red lighten-1")
  })

  $("#formCadCurses").on("submit",function(evt) {
    evt.preventDefault()

    $("[data-required]").css("border-bottom","none")

    if($("#nameCurse").val().length == 0 ) return $("#nameCurse").css("border-bottom","1px solid #FE3E0D")
    let data = new FormData(this)

    const options = {
      method: "POST",
      url: `${BASE_URL}/system/createcurses`,
      dataType: "json",
      contentType: false,
      processData: false,
      data,
      success: (res) => {if(!res.error) alert("cadastro realizado com sucesso!")},
      error: (err) => console.warn(err.responseText) 
    }

    $.ajax(options)
  })
})