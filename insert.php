<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
	<link href='https://fonts.googleapis.com/css?family=Gafata' rel='stylesheet'>  
</head>
  <style>
      body
        {
          background-color: #9a9aaa;
          font-family: 'Gafata';
          padding-top: 5%;
        }
      div
        {
          background-color: #3d3846; 
          width: 550px;
          border-radius: 10px;
          margin-top: 3%;
          padding: 30px;
          color: #fce6ea;
          text-align:center;
          margin: 20px auto 50px auto;
          box-shadow: 5px 5px 10px #00000079;
          font-size: 20px;
          border: 2px solid white;

        }  
      p
        {
          text-align:center;
        }  
      input[type=submit]
        {
          width:186px;
          padding: 7px;
          background-color: #f5d8ded0;
          border:none;
          cursor: pointer;
          font-family: 'Gafata';
          font-size: 18px;
          color: rgb(48, 38, 44);
          box-shadow: 2px 2px 5px #00000079;
          border-radius: 5px;

          

        }
      input[type=submit]:hover
        {
          background-color: #ada9aad0;
          color: #fce4e8; 
        }



  </style>

<body>
	<center>
		<?php
		echo "<div>";
		// servername => localhost
		// username => root
		// password => ""
		// database name => record
		$conn = mysqli_connect("localhost", "root", "", "record");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$studentId = $_REQUEST['studentId'];
		$fullName = $_REQUEST['fullName'];
		$birthday = $_REQUEST['birthday'];
		$course = $_REQUEST['course'];
		$email = $_REQUEST['email'];
		
		// Performing insert query execution
		// here our table name is student
		$sql = "INSERT INTO  student VALUES ('$studentId',
			'$fullName','$birthday','$course','$email')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$studentId \n $fullName \n "
				. "$birthday \n $course \n $email");
		} else{
			echo "<b>ERROR:</b><br> Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		echo "</div>";
		?>
	</center>
	<p>
	 <a href="http://localhost/index.php">
     <input type="submit" value= "Return"/>
   </a>
	</p>
</body>

</html>
