<?php
   session_start();
   
?>

<html>
 <head>
  <title> Tama Home </title>
  <link rel="stylesheet" type="text/css" href="siteCSS.css">
  <style>
  
	.buttonBlue{
		background-color: rgba(140, 140, 200, 1);
		width: 120px;	
		display:block;
		padding:20px;
		border: none;
		color: white;
		transition: 0.2s ease-out;
		}
   .buttonBlue:hover{
		transform: scale(1.1);
		background-color: rgba(255, 70, 140, 1);
		} 
		
	.bunnyIdle{
		margin: 100px auto;
		width: 50px;
		height: 40px;
		text-align: center;
		font-size: 10px;
   
	}
   .bunnyIdle > img{
		animation: bunnyIdle 0.6s infinite ease-in-out;
   }
   
   .bunnyIdle img:nth-child(1)
   { animation-play-state: paused;}
   
   .bunnyIdle img:nth-child(2)
   { animation-delay: -1.1s;}
   
   .bunnyIdle img:nth-child(3)
   { animation-delay: -1.0s;}
     
   
   @keyframes bunnyIdle{
   0%{
		transform: translate(0%,0%);
		
   }
   20% {
		transform: translate(0%,1%);
   }
   }
  
  </style>
 </head>
  <body>
	<?php
  if(!isset($_SESSION['u_id']))
  {
	  header("Location: siteHTML_Home.php");  
  }
  ?>
   <div class="cTopBar">
 
	<form action="signOut.php" method="signOut">
	<a style="background-color: rgba(100,28,28,0); float:right; padding: 0px 0px;  text-align: justify;">
	<input style="float:right" type="submit" value="Sign Out" id="topBar">
	</a>
	</form>
	</div>
	<div style="position: relative; top:40%; z-index:0">
	<div style="position: absolute; left: 30%; z-index: 0;">
		
	   <button class="buttonBlue"> Food </button>
	   <button class="buttonBlue"> Sleep </button>
	   <button class="buttonBlue"> Play </button>
	 
	</div>
	<div style="position: absolute; left: 190%; z-index: 0;">
		
	   <button class="buttonBlue"> Health: </button>
	   <button class="buttonBlue"> Hunger: </button>
	   <button class="buttonBlue"> Happiness: </button>
	 
	</div>
	</div>
	
	<div style="list-style-type: none; width:220px; position: relative; z-index:0; margin: 0 auto; top:20%;">

       <div class="bunnyIdle" style=" position: relative; top: -6vh; left:-200px;"> 
	    <img style="position: relative; z-index: 0;" src="TamaBunnyBody.png" height="400px" width="400px" style="position: relative; z-index:1; ">
		<img style="position: relative; z-index: 1; top: -400px;" src="TamaBunnyArms.png" height="400px" width="400px" style="position: relative; z-index:1; ">
		<img style="position: relative; z-index: 1; top: -800px;" src="TamaBunnyFace.png" height="400px" width="400px" style="position: relative; z-index:1; ">
	   </div>
	   </div>



 </body>
</html>
