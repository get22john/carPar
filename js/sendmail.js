$('document').ready(function () {
  /* validation */
  $('#contactForm').validate({
    rules: {
      name: {
        required: true,
      },

      subject: {
        required: true,
        minlength: 10,
        maxlength: 50,
      },

      email: {
        required: true,
        email: true,
      },

      message: {
        required: true,
      },
    },

    messages: {
      name: { required: 'Please enter your name' },
      subject: { required: 'Please enter message subject' },
      email: { required: 'Please enter your email' },
      message: { required: 'Please enter message content' },
    },
    errorElement: 'span',
    errorClass: 'help-block',

    submitHandler: submitForm,
  })
  /* validation */

  /* login submit */
  function submitForm() {
    var data = $('#contactForm').serialize()

    $.ajax({
      type: 'POST',
      cache: false,
      url: 'models/mailer-ajax.php',
      data: data,
      beforeSend: function () {
        $('#error').fadeOut()
        $('#btn-send').html(
          '<span class="fa fa-spinner fa-spin"></span> &nbsp; Sending...'
        )
      },
      success: function (response) {
        if (response == 'ok') {
          $('#btn-send').html(
            '<span class="fa fa-spinner fa-spin"></span> &nbsp; Delivering...'
          )
          $('#btn-send').html('Submit')
          setTimeout('alert("Message sent successfully")', 3000)
          $('#contactForm').trigger('reset')
        } else {
          $('#error').fadeIn(1000, function () {
            $('#error').html(response)
            $('#btn-send').html('Submit')
            // $('#contactForm').trigger('reset')
          })
        }

        //Auto Notification dismiss
        window.setTimeout(function () {
          $('#error')
            .fadeTo(500, 0)
            .slideUp(500, function () {
              $(this).remove()
            })
        }, 5000)
      },
    })
    return false
  }
})
