<?php
		class Connection
		{
			private $host="localhost";
			private $user="root";
			private $password="";
			private $dbName="test";
			private  $conn;
			function __construct()
			{
				$this->conn=new mysqli($this->host,$this->user,$this->password,$this->dbName);
			}
			public function getConn(){
				return $this->conn;
			}
		}
		$db=new Connection();
		$conn=$db->getConn();
	if (isset($_POST['submit'])) {
		$username=$_POST['username'];
		$password=SHA1($_POST['password']);
		/**/
		$query="insert into user(usernamem,password)";
		/**/
		echo "$username<br>$password";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test 123</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<br><br><br><br>
	<div class="container">
		<form method="POST">
			<div class="form-group">
				<label class="text-black font-weight-bold">Username</label>	
				<input required="" autofocus="" type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label class="text-black font-weight-bold">Password</label>	
				<input required="" type="password" name="password" class="form-control">
			</div>			
			<button name="submit" type="submit" class="btn btn-success btn-block">
				Submit
			</button>
		</form>		
	</div>
</body>
</html>