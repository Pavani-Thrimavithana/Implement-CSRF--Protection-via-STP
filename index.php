<!DOCTYPE html>
<html>
	<head>
		<title>Cross-Site Request Forgery Protection</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
    <h2>Cross-Site Request Forgery Protection using Synchronizer Token Pattern</h2>
    <div class="login-page" action="result.php" method="post">
        <div class="form">
				<h3>Sign In</h3>
            <form class="login-form" action="result.php" method="post">
                <input type="text" placeholder="username" name="username"/>
                <input type="password" placeholder="password" name="password"/>
                <input type="Submit" value="Sign In" class="loginbtn">
            </form>
        </div>
    </div>
	</body> 
</html>

