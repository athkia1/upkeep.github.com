<!DOCTYPE html>
<html>
  <head>
    <style>
      .button-container {
        display: flex;
        justify-content: right;
        align-items: center;
        height:90vh;
      }
      
      .button {
        display: block;
        width: 300px;
        height: 120px;
        margin: 20px;
        border: none;
        background: none;
        cursor: pointer;
      }
      
      .signup {
        background-image: url("images/signup.png");
        background-size: cover;
      }
      
      .login {
        background-image: url("images/login.png");
        background-size: cover;
      }
      .logo{
        float: left;
      }
      footer {
  background-color: #D3D3D3;
  padding: 140px;
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
}

    </style>
  </head>
  <body>
  <div class="logo">
        <img src="images/logo.png" alt="" width="500px" >
    </div>

    <div class="button-container" >
      <a href="signup.php" class="button signup"></a>
      <a href="login.php" class="button login"></a>
    </div>
    <footer>    </footer>

  </body>
</html>
