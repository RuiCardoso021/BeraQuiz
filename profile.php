<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css"/>
    <link rel="stylesheet" href="css/profile.css">
    <title>QuizChoose</title>
</head>
<body>

<div class="img-logo">
    <img class="img-logo-1" src="img/logo.png" alt="Bera Quiz">
</div>
<div class="cont form-my">
  <div class="form sign-in">
    <h2>Welcome to BeraQuiz,</h2>
    <label>
      <span>Email</span>
      <input type="email" name="email" id="email"/>
    </label>
    <label>
      <span>Password</span>
      <input type="password" name="pass" id="pass"/>
    </label>
    <div class="forgot-pass">
        <p class="forgot">Forgot password?</p>
    </div>
    <button type="button" class="submit btn-first" id="btn_login" >Login</button>
    <button type="button" class="fb-btn btn-tres">connect width <strong>facebook</strong></button>

    <p class="menssage-error">Your email our password are incorrect!</p>
  </div>
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>New here?</h2>
        <p>Sign up and show us that you are the best in the rank!</p>
      </div>
      <div class="img__text m--in">
        <h2>One of us?</h2>
        <p>If you already has an account, just sign in. Start to play!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
    <div class="form sign-up">
      <h2>Create account,</h2>
      <label>
        <span>Name</span>
        <input type="text" name="r_name" id="r_name"/>
      </label>
      <label>
        <span>Email</span>
        <input type="email" name="r_email" id="r_email" />
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="r_pass" id="r_pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
      </label>
      <div id="message">
        <h3 style="font-size: 12px;">Password must contain the following:</h3>
        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
        <p id="number" class="invalid">A <b>number</b></p>
        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
      </div>
      <button type="button" class="submit btn-first" id="btn_register">Register</button>

      <p class="menssage-error-register">This email already exists!</p>      
    </div>
  </div>
</div>


    <!-- bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/profile.js" async defer></script>
</body>
</html>