<!DOCTYPE html>
<html>
<head>
  <title>UAS Mersya</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <br/>
  <br/>
  <center><h2>UAS Mersya Efendi (Kelompok 6)</h2></center>  
  <br/>
  <div class="login">
  <br/>
    <form action="login.php" method="post" onSubmit="return validasi()">
      <div>
        <label>Username:</label>
        <input type="text" name="username" id="username" placeholder="mersya" />
      </div>
      <div>
        <label>Password:</label>
        <input type="password" name="password" id="password" placeholder="mersya" />
      </div>      
      <div>
        <input type="submit" value="Login" class="tombol">
      </div>
    </form>
  </div>
</body>


<script type="text/javascript">
  function validasi() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;   
    if (username != "" && password!="") {
      return true;
    }else{
      alert('Username dan Password harus di isi !');
      return false;
    }
  }



</script>
</html>