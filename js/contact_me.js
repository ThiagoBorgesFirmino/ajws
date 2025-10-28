(function ($) {
  function isMobile() {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
  }
  function showAlert(type, msg) {
    var html = "<div class='alert alert-" + type + " alert-dismissible' role='alert'>" +
               "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>" +
               msg + "</div>";
    $("#contato_success").html(html);
  }
  function validateFields() {
    var name = $("#contato_name").val().trim();
    var email = $("#contato_email").val().trim();
    var message = $("#contato_message").val().trim();
    var errors = [];
    if (!name) errors.push("Digite seu nome.");
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) errors.push("Digite um e-mail válido.");
    if (!message) errors.push("Digite sua mensagem.");
    return { ok: errors.length === 0, errors: errors };
  }

  $(function () {
    console.log('contact_me.js carregado!');
    var $form = $("#contact_form");
    var $submit = $form.find("button[type='submit'], .botao");

    $form.on("submit", function (e) {
      e.preventDefault();
      console.log('submit interceptado');
      $("#contato_success").html("");

      var v = validateFields();
      if (!v.ok) { showAlert("danger", v.errors.join("<br>")); return; }

      var data = {
        name: $("#contato_name").val().trim(),
        email: $("#contato_email").val().trim(),
        telefone: $("#contato_telefone").val().trim(),
        message: $("#contato_message").val().trim(),
        dispositivo: isMobile() ? "Mobile" : "Desktop"
      };

      $submit.prop("disabled", true);

      $.ajax({
        url: "phpmailer/contact_me.php",
        type: "POST",
        dataType: "json",
        data: data,
        cache: false,
        timeout: 30000
      })
      .done(function (out) {
        if (out && out.status) {
          showAlert("success", out.msg || "Mensagem enviada com sucesso!");
          $form.trigger("reset");
        } else {
          showAlert("danger", (out && out.msg) ? out.msg : "Não foi possível enviar. Tente novamente mais tarde.");
        }
      })
      .fail(function (xhr) {
        var msg = "Falha ao comunicar com o servidor.";
        if (xhr.status === 404) msg = "Endpoint não encontrado (404).";
        if (xhr.status === 500) msg = "Erro no servidor (500).";
        showAlert("danger", msg);
      })
      .always(function () {
        $submit.prop("disabled", false);
      });
    });

    $form.find("#contato_name, #contato_email, #contato_telefone, #contato_message").on("focus", function () {
      $("#contato_success").html("");
    });
  });
})(jQuery);
