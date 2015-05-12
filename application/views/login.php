<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">

  </head>
  <body>
    <div class="container">
      <div id="login-form">
        <h3>Login</h3>
        <fieldset>
          <form method="POST" action="<?php echo base_url(); ?>auth/doLogin">
            <input type="username" id="username" name="username" required value="Username" onBlur="if(this.value=='')this.value='Username'" onFocus="if(this.value=='Username')this.value='' "> <!-- JS because of IE support; better: placeholder="Email" -->
            <input type="password" id="password" name="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "> <!-- JS because of IE support; better: placeholder="Password" -->
            <input type="submit" value="Login">
            <footer class="clearfix">
              <p><span class="info">?</span><a href="<?php echo base_url(); ?>auth/register">Register</a></p>
            </footer>
          </form>
        </fieldset>
      </div> <!-- end login-form -->
    </div>
  </body>
</html>
