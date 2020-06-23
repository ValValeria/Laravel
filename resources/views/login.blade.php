<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Вход</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">
  <style>
    body{
      height:100vh;
      display:flex;
      align-items: center;
      justify-content: center;
      width:100vw;
      overflow: hidden;
      background:linear-gradient(to left bottom, #e9e9e9, #ebebeb, #d6d6d6, #b1b1b1, #505050);
      font-family: 'Gotu', sans-serif;
    }
    .login-div {
  width:530px !important;
  min-height: 530px !important;
  padding: 60px 35px 35px 35px;
  border-radius: 40px;
  background: #ecf0f3;filter: blur(0.4px);
  box-shadow:
  /*bottom shadow*/
  0px 20px 20px rgba(0,0,0,0.2),
  0px 5px 10px rgba(0,0,0,0.2),
  /*long bottom shadow*/
  0px 70px 50px rgba(0,0,0,0.4),
  /*right shadow*/
  30px 50px 50px rgba(0,0,0,0.2),
  /*left shadow*/
  -30px 50px 50px rgba(0,0,0,0.2),
  /*right inset*/
  inset 20px 0px 60px rgba(0,0,0,0.1),
  /*left inset*/
  inset -20px 0px 60px rgba(0,0,0,0.1);

    }
    .title {
  text-align: center;
  font-size: 28px;
  padding-top: 24px;
  letter-spacing: 0.5px;
}
.sub-title {
  text-align: center;
  font-size: 15px;
  padding-top: 7px;
  letter-spacing: 3px;
}
.fields {
  width: 100%;
  padding: 75px 5px 5px 5px;
}
.fields input {
  border: none;
  outline:none;
  background: none;
  font-size: 18px;
  color: #555;
  padding:20px 10px 20px 5px;
  width:100%;
}
.username, .password {
  margin-bottom: 30px;
  border-radius: 25px;
  box-shadow: inset 8px 8px 8px #cbced1,
              inset -8px -8px 8px #ffffff;
}

.signin-button {
  outline: none;
  border:none;
  cursor: pointer;
  width:100%;
  height: 60px;
  border-radius: 30px;
  font-size: 20px;
  font-weight: 700;
  color:#fff;
  text-align: center;
  background: #24cfaa;
  box-shadow: 3px 3px 8px #b1b1b1,
              -3px -3px 8px #ffffff;
  transition: 0.5s;
}
.signin-button:hover {
  background:#2fdbb6;
}
.signin-button:active {
  background:#1da88a;
}
.link {
  padding-top: 20px;
  text-align: center;
}
.link a {
  text-decoration: none;
  color:#aaa;
  font-size: 15px;
}
     
  </style>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

<section class="popup popup--login">
  <form class="login-div" action ="/login" method='POST'>
    {{ csrf_field() }} 

    <div class="logo"></div>
    <div class="title">Your Login</div>
    <div class="sub-title">BETA</div>
    <div class="fields">
      <div class="username"><input type="email" class="user-input" placeholder=""  name="email"/></div>
      <div class="password"><input type="password" class="pass-input" placeholder="password" name="password"/></div>
    </div>
    <button class="signin-button">Login</button>
    @if($errors->any())
    <div class="alert alert-danger" style="margin-top:20px;">
       <ul>
         <br/>
           @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
    @endif
  </form>
</section>

</body>

</html>