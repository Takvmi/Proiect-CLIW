<!DOCTYPE html>
<html>
  <head>
    <title>Tama</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style-teodor.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style-index.css">
    <meta charset="UTF-8">
  </head>
<body id="sign-in-page">
  
  <div class="cBox" style="margin: 0 auto; padding-bottom: 4vh; background-color: rgba(28,28,28,0.4); padding: 20px;">
  <div style="width: 200px; color: white;">
   <form action="signUp.php">
         <h1 class="cText">Username:</h1>
            <input type="text" id="name" name="name">
			<script>
			
			var vUrl = window.location.href;
			if(vUrl.includes("name=error1"))
			{
				document.write("<p class='cError'> Username field is empty. </p>");
			}
			else if(vUrl.includes("name=error2"))
			{
				document.write("<p class='cError'> Username is already taken. </p>");
			}
			else if(vUrl.includes("name=error3"))
			{
				document.write("<p class='cError'> Username can not contain spaces. </p>");
			}
			else if(vUrl.includes("name=error4"))
			{
				document.write("<p class='cError'> Username is too long. </p>");
			}
			else if(vUrl.includes("name=error5"))
			{
				document.write("<p class='cError'> Username contains ' or \\ . </p>");
			}
				
			</script>
		 <h1 class="cText">Email:</h1>
            <input type="text" id="email" name="email">
			<script>
			
			var vUrl = window.location.href;
			if(vUrl.includes("email=error1"))
			{
				document.write("<p class='cError'> Email field is empty. </p>");
			}
			else if(vUrl.includes("email=error2"))
			{
				document.write("<p class='cError'> Email has already been used. </p>");
			}
			else if(vUrl.includes("email=error3"))
			{
				document.write("<p class='cError'> Email is invalid. </p>");
			}
				
			</script>
         <h1 class="cText">Password:</h1>
            <input type="password" id="pass" name="pass">
			<script>
			var vUrl = window.location.href;
			if(vUrl.includes("pass=error1"))
			{
				document.write("<p class='cError'> Password field is empty. </p>");
			}
			else if(vUrl.includes("pass=error2"))
			{
				document.write("<p class='cError'> Password needs to be at least 6 characters long. </p>");
			}
			else if(vUrl.includes("pass=error3"))
			{
				document.write("<p class='cError'> Password can not contain spaces. </p>");
			}
			else if(vUrl.includes("pass=error4"))
			{
				document.write("<p class='cError'> Password contains ' or \ . </p>");
			}
			</script>
		
         <h1 class="cText">Repeat password:</h1>
            <input type="password" id="rePass" name="rePass">
			<script>
			
			var vUrl = window.location.href;
			if(vUrl.includes("rep=error1"))
			{
				document.write("<p class='cError'> Repeat the password. </p>");
			}
			else if(vUrl.includes("rep=error2"))
			{
				document.write("<p class='cError'> Passwords do not match. </p>");
			}
				
			</script>
         <input type="submit" value="Sign Up" id="submitButton">
	</form>
    <form action="index.php" >
    <input type="submit" value="Sign In" id="submitButton">
    </form> 
   </div>
       
  </div>


</body>
</html>
