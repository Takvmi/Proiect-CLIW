function errorJS(){
				
			var error = null;
			var success = null;
			
			name = document.getElementById('name').value;
			pass = document.getElementById('pass').value;
	
			xhr = new XMLHttpRequest();

			xhr.open('POST', 'signIn.php');
			xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			xhr.onload = function() {
			if (xhr.status !== 200) {
				alert(' Request failed.  Returned status of ' + xhr.status + '\n Stop spamming that button!');
			}
			else
			{
			returnData = JSON.parse(xhr.responseText);
			error = returnData.error;	
			success = returnData.success;
			
			var vUrl = window.location.href;
			if(error == 11){
			document.getElementById("nameErrorDiv").innerHTML="<p class='cError'>Name field is empty.</p>";
			document.getElementById("passErrorDiv").innerHTML="<br><br>";
			} else if (error == 12){
				document.getElementById("nameErrorDiv").innerHTML="<p class='cError'>User does not exist.</p>";
				document.getElementById("passErrorDiv").innerHTML="<br><br>";
			} else if (error == 21){
				document.getElementById("passErrorDiv").innerHTML="<p class='cError'>Password field is empty.</p>";
				document.getElementById("nameErrorDiv").innerHTML="<br><br>";
			} else if (error == 22){
				document.getElementById("passErrorDiv").innerHTML="<p class='cError'>Password is wrong.</p>";
				document.getElementById("nameErrorDiv").innerHTML="<br><br>";
			}
			else if (error > 30)
			{
				document.getElementById("passErrorDiv").innerHTML="<p class='cError'>Unknown error.</p>";
				document.getElementById("nameErrorDiv").innerHTML="<p class='cError'>Unknown error.</p>";
			}
			else if (error == 0 && success == 1)
			{
				window.location.replace("http://localhost/Project_TAMA/pet-home.html");
			}
				
			}
			}
			xhr.send(encodeURI('name=' + name + '&pass=' + pass));
};

function signUPJS(){
	window.location.replace("http://localhost/Project_TAMA/sign-up.html");
};