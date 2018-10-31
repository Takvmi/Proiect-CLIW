<?php
   session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tama</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style-teodor.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style-index.css">
    <meta charset="UTF-8">
  </head>
<body id="sign-in-page">
  <img style=" width: 50%; height: auto;" alt="Tama Banner" src="assets/images/tama-banner.svg">
  <main>
    <img alt="Tama Bunny" src="assets/images/tama-bunny.svg">
	<form>
      <label for="name">Name</label><br>
      <input type="text" id="name" name="name"><br>
		 <div id="nameErrorDiv"><br><br></div>
		 <script src="assets/js/sign-in-error.js"></script>
	  <label for="pass">Password</label><br>
      <input type="password" id="pass" name="pass"><br>
		 <div id="passErrorDiv"><br><br></div>
		 <div id="extraErrorDiv"></div>
    </form>
  </main>
  <div id="box" style="width:220px;">
	<button class="cButton" style="width:180px; height: 70px;" onclick="errorJS()">Sign In</button>
	<button class="cButton" style="width:180px; height: 70px;" onclick="signUPJS()">Sign Up</button>
	</div>

</body>
</html>
