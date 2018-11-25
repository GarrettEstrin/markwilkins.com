<section class="section section--white mainview contact" id="jsContact" vs-anchor="jsContact">
  <div class="container">
    <form action="/submitForm.php" method="POST">
      <h1 class="contact__title">Say hello!</h1>
      <input type="text" class="contact__name" id="jsName" placeholder="Name" name="name">
      <input type="text" class="contact__email" id="jsEmail" placeholder="Email" name="email">
      <textarea class="contact__textarea" rows="10" id="jsTextarea" placeholder="Your message" name="message"></textarea>
      <h1 class="contact__send" id="jsSend">> Send</h1>
    </form>
    <h4 class="contact__error" id="jsError"></h4>
    <h4 class="contact__success" id="jsSuccess">Thanks for the message!</h4>
  </div>
  <script>
    $('#jsSend').on('click', function(){
      $contactText = $('#jsTextarea').val();
      $contactName = $('#jsName').val();
      $contactEmail = $('#jsEmail').val();
      if($contactText.length > 0 && $contactEmail.length > 0 && $contactName.length > 0){
        $.ajax({
            type: 'post',
            url: 'submitForm.php',
            data: $('form').serialize(),
            success: function (data) {
              console.log(data);
              if(data == "1"){
                $('form').hide();
                $('#jsError').hide();
                $('#jsSuccess').show();
              } else {
                $('#jsError').text('There was a problem sending your message. Please try again.');
              }
            }
          });
      } else {
        $('#jsError').text("Please fill out all fields");
      }
    })
  </script>
</section>