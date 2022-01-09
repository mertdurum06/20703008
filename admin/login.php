<html>
<head>
<title>MEÜ | Yönetici Paneli Girişi</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="login.css">
<link rel="icon" href="/admin/logo.ico" type="image/x-icon" />
</head>
<body backgorund="black">

    <div class="login-box">
        <center><img src="logo.png" width="75px"></center>
        <br>
        <br>
        <form action="auth.php" method="POST">
          <div class="user-box">
            <input type="text" name="username" id="username" autocomplete="off" required="yes">
            <label>Kullanıcı Adı</label>
          </div>
          <br>
          <br>
          <div class="user-box">
            <input type="password" name="password" id="password" autocomplete="off" required="yes">
            <label>Şifre</label>
          </div>
          <br>
          <br>
          <div class="user-box">
          <a><input type="submit" style="border:none" value="Giriş Yap " /></a>
          <a onclick="document.location='../'"><input type="submit" style="border:none" value="    Anasayfaya Dön" /></a>
          </div>
        </form>
      </div>
     
</body>
</html>