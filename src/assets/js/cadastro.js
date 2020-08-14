$(function() {
  searchCurses();

  $(".botao").click(function () {
    $(this).prop("class", "material-icons").css('cursor', 'pointer')
    
    if ($('#passwd').prop("type") == "password") {
      $('#passwd').prop("type", "text")
      $(this).prop("class", "material-icons").html("visibility");
    } else {
      $('#passwd').prop("type", "password")
      $(this).prop("class", "material-icons").html("visibility_off");
    }

  })

  $("#cpf").keypress(e => { if(isNaN(Number(e.key))) return false; })

  $("input*,select*").keypress(evt => {if(evt.keyCode == 13) evt.preventDefault()})

  $("#formCadastro").on("submit",function(evt) {
    evt.preventDefault()
    if(isInvalidForm()) return alert("preencha os campos em vermelho")
    if(!$("#confirm").is(":checked")) return alert("Confirme o registro");
    if(!$("#terms").is(":checked")) return alert("Aceite os termos");
      const data  = new FormData(this)

      const options = {
        method: "POST",
        url: `${BASE_URL}/system/createaccountstudants`,
        dataType: "json",
        contentType: false,
        processData: false,
        data,
        success: (res) => {if(!res.error) alert("Cadastro realizado com sucesso! \n acesse a plataforma de estudos para começar.")},
        error: (err) => console.warn(err.responseText) 
      }

      $.ajax(options)
  })

  function searchCurses() {
    const options = {
      method: "POST",
      url: `${BASE_URL}/system/searchcurses`,
      dataType: "json",
      contentType: false,
      processData: false,
      success: (res) => {
        if(!res.error) {
        res.data.forEach((res,i) => {
          let curso = (Array.isArray(res[i])) ? res[i] : res;
          $("#id_curso").append(`<option value="${curso.id_curso}">${curso.nome}</option>`)
        })
        $("select*").formSelect()
      }},
      error: (err) => console.warn(err.responseText) 
    }

    $.ajax(options)
  }

  function isInvalidForm(element = "") {
    let invalid = false;
    $("[data-required]").css("border-bottom","none")

    $(`${element} [data-required]`).each(function() {
      if($(this).is("input"))
          if($(this).val().length == 0 ) {
            invalid  = true
            $(this).css("border-bottom","1px solid #FE3E0D")
          }
      if($(this).is("select"))
          if(!$(this).val() || $(this).val().length == 0 ) {
            invalid  = true
            $(this).css("border-bottom","1px solid #FE3E0D")
          }
    })
    return invalid;
  }
})