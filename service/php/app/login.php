<?php
if(isset($_COOKIE["user"])){
    http_response_code(301);
    header("Location: /index.php");
    echo("oi");
    print_r($_COOKIE);
    return;
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP Memo Service</title>
  <link rel="stylesheet" href="/static/styles/bulma.min.css">
  <link rel="stylesheet" href="/static/styles/space.css">
  <link rel="stylesheet" href="/static/styles/main.css">
  <script src="/static/scripts/main.js"></script>
</head>

<body>
  

<nav class="navbar is-info" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <h1 class="navbar-item is-size-5-touch is-size-4-desktop has-text-weight-semibold">PHP Memo Service</h1>
    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
      data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
  <div id="navbarBasicExample" class="navbar-menu">
    
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary" href='/login'>ログイン</a>
        </div>
      </div>
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary" href='/register'>アカウント作成</a>
        </div>
      </div>
    </div>
    
  </div>
</nav>

<section class="hero is-fullheight">
  <div class="hero-body">
    <div class="container has-text-centered">
      <div class="column is-4 is-offset-4">
        <div class="box">
          <form action="/login" method="POST">
            <div class="field">
              <div class="control">
                <input class="input is-large" type="username" name="username" placeholder="ユーザー名">
              </div>
            </div>
            <div class="field">
              <div class="control">
                <input class="input is-large" type="password" name="password" placeholder="パスワード">
              </div>
            </div>
            <button class="button is-block is-success is-large is-fullwidth" type="submit" value="ログイン">ログイン</button>
          </form>
          
        </div>
      </div>
      <a href="/register" class="mt-5">アカウント作成</a>
    </div>
  </div>
</section>


</body>

</html>
