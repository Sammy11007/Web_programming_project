<html>
	<head>
		<title>Login</title>
		<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}


@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
	</head>
<body><h2>Sign Up Form</h2>
	<form action="process2.php" method="POST">
	 <div class="imgcontainer">
   <img src="BMSlogo.png" width="15%"/>
  </div>
  <div class="container">
		<b>ENTER USN:</b><input type="text" name="id" size="20" maxlength="18"/><br/>
		<b>ENTER USERNAME:</b><input type="text" name="username" size="20" maxlength="18"/><br/>
		<b>ENTER PASSWORD:</b><input type="password" name="password" size="20" maxlength="18"/><br/>
		
		<input type="submit" value="SUBMIT"/>
		<a href="login.php">Login</a>
		</div>
	</form>
</body>
</html>