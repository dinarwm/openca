<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Register</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">

  </head>
  <body>
    <div class="container">
      <div id="login-form">
        <h3>Register</h3>
        <fieldset>
          <form method="POST" action="<?php echo base_url(); ?>auth/doRegister">
            <input type="username" id="username" name="username" required value="Username" onBlur="if(this.value=='')this.value='Username'" onFocus="if(this.value=='Username')this.value='' "> <!-- JS because of IE support; better: placeholder="Email" -->
            <input type="password" id="password" name="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "> <!-- JS because of IE support; better: placeholder="Password" -->
            <input type="submit" value="Register">
          </form>
        </fieldset>
      </div> <!-- end login-form -->
    </div>
  </body>
</html>
