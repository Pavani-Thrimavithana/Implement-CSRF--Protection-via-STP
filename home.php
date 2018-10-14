<!DOCTYPE html>
<html>
	<head>
		<title>Cross-Site Request Forgery Protection</title>
		<link rel="stylesheet" href="styles.css">
	</head>
<body>
<h2>Cross-Site Request Forgery Protection using Synchronizer Token Pattern</h2>
<div class="login-page" action="home.php" method="post">
        <div class="form">
            <h3>
				<?php
				require_once 'token.php';
				$val = $_POST["token"];
				if(isset($_POST['update'])){
					if(token::checkToken($val,$_COOKIE['stp'])){
						echo "Order Quantity: ".$_POST['update'];
					}
					else{
					echo "Error".$_COOKIE['stp'];
					}
				}
				?>
			</h3>
            </form>
        </div>
    </div>

</body>
