<!DOCTYPE html>
<html>
 <head>
  <title>Register</title>
  <!-- <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> -->
  <style>

  	body {
       background: #00ff7f;
       background-repeat: no-repeat;
  	}

  	#card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 500px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
    }

    #card-content {
      padding: 12px 44px;
    }

    #card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center;
    }

    .underline-title {
      background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: 200px;
    }

    a {
    text-decoration: none;
    }

    label {
    font-family: "Raleway", sans-serif;
    font-size: 11pt;
    }

    #forgot-pass {
    color: #2dbd6e;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 3px;
    text-align: right;
    }

    .form {
    align-items: left;
    display: flex;
    flex-direction: column;
    }

    .form-border {
    background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
    height: 1px;
    width: 100%;
    }

    .form-content {
    background: #fbfbfb;
    border: none;
    outline: none;
    padding-top: 14px;
    }

    #signup {
    color: #2dbd6e;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
    }

    #submit-btn {
    background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 153px;
    }

    #submit-btn:hover {
    box-shadow: 0px 1px 18px #24c64f;
    }

  </style>
</head>

<body>
  <?php include '03_koneksi.php';?>
 	<div id="card">
 		<div id="card-content">
      <div id="card-title">
        <h2>DAFTAR user</h2>
          <div class="underline-title"></div>
      </div>

<form action="06_registeraksi.php" method="post" class="form">
    <label for="user-username" style="padding-top:13px">&nbsp;Username</label>
      <input
        name="no1"
        id="user-username"
        placeholder="uniska"
        class="form-content"
        required />
  <div class="form-border"></div>
    <label for="user-email" style="padding-top:13px">&nbsp;Email</label>
      <input
         name="no2"
        id="user-email"
        placeholder="uniskabjm@gmail.com"
        class="form-content"
        required />
  <div class="form-border"></div>
    <label for="user-leve;" style="padding-top:13px">&nbsp;Level</label>
      <input
         name="no3"
        id="user-leve;"
        placeholder="satu"
        class="form-content"
        required />
  <div class="form-border"></div>
    <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
      <input
         name="no4"
        id="user-password"
        class="form-content"
        placeholder="uniskabjm"
        required />
    <div class="form-border"></div>
        <input id="submit-btn" type="submit" name="submit" value="DAFTAR" /><a href="01_login.php" id="signup">Kembali</a>
</form>
</div>
</div>

</body>
</html>