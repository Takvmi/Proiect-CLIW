<?php
   session_start();
?>
<html>
  <head>
    <title>Tama</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style-teodor.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style-index.css">
    <meta charset="UTF-8">
  </head>
<body id="sign-in-page">

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
	<div style="align: center;">
	<div class="cButton" style="width:220px; padding: 40px; padding-top: 0px; ">
	<button style="width:220px; position:relative;" onclick="errorJS()">Sign In</button>
	<button style="width:220px; position:relative;" onclick="signUPJS()">Sign Up</button>
	</div>
  </main>

</body>
</html>
