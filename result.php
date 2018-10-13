<?php
if(isset($_POST['username'],$_POST['password'])){
	$uname = $_POST['username'];
	$pwd = $_POST['password'];
	if($uname == 'admin' && $pwd == 'admin'){
		echo "<script>alert('Successfully logged in');</script>";
	}
	else{
		echo "<script>alert('Invalid Credentials');
					  window.location.href='index.php';
			</script>";
		exit();
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Cross-Site Request Forgery Protection</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="styles.css">
	<script>
	    $(document).ready(function(){
	    var xhttp;
	    xhttp = new XMLHttpRequest();
	    xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
			    document.getElementById("token_to_be_added").setAttribute('value', this.responseText) ;
		    }
	    };
	    xhttp.open("GET", "csrf_token_generator.php", true);
	    xhttp.send();
	    });
    </script>
	</head>
	<body>
	<h2>Cross-Site Request Forgery Protection using Synchronizer Token Pattern</h2>
	<div class="login-page" action="home.php" method="post">
        <div class="form">
			<h3>Update Your Post</h3>
            <form class="login-form" action="home.php" method="post">
                <div class="credentials">
					<input type="text" name="updatepost" required="true">
				</div>
				<input type="Submit" value="Update">
				<div id="div1">
					<input type="hidden" name="token" value="" id="token_to_be_added"/>
				</div>
            </form>
        </div>
    </div>
	</body> 
</html>
