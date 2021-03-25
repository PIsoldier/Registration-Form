<?php
	require "connection.php";
		echo $error = NULL;
	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$name = $_POST['fulltname'];
		$email = $_POST['email'];
		$fname = $_POST['fname'];
		$versity = $_POST['versity'];
		$dept = $_POST['department'];
		$p1 = $_POST['password'];
		$p2 = $_POST['cpassword'];

        $emailq = "select *from student_info where email = '$email' ";
		$query = mysqli_query($conn, $emailq);
		$emailcount =mysqli_num_rows($query);
		if($p1 != $p2){
			echo "Password is not matched.";
		}
		if($emailcount > 0)
		{
			echo "This email is already exist.";
		}
		else {
		     $sql = "INSERT INTO student_info (id, name, email,fname,versityname,dept, p1)VALUES
			('$id','$name','$email','$fname','$versity' ,'$dept', '$p1')";
		
		#mysql_select_db($dbname);
		$insertValues = mysqli_query($conn,$sql);
		if(!$insertValues)
		{
			die('Could not enter data: '.mysql_error());
		}
		else
			echo("Entered data successfully\n");
	}

	}
      ?>

<html>
<head>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<div class="container">
		<form action=" " method="post">
			<div class="row">
				<h1>Student Registration Form</h1>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="fname">Full Name</label>
				</div>
				<div class="col-75">
					<input type="text" name="fulltname" placeholder="Your name..">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="fname">ID</label>
				</div>
				<div class="col-75">
					<input type="number" name="id" placeholder="Your ID..">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="fname">Email</label>
				</div>
				<div class="col-75">
					<input type="email" name="email" placeholder="Your Email..">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="lname">Father Name</label>
				</div>
				<div class="col-75">
					<input type="text" name="fname" placeholder="Your father name..">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="country">University</label>
				</div>
				<div class="col-75">
					<select  name="versity">
						<option value="duet">DUET</option>
						<option value="buet">BUET</option>
						<option value="du">DU</option>
						<option value="ruet">RUET</option>
						<option value="cuet">CUET</option>
						<option value="kuet">KUET</option>
					</select>

				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="country">Department</label>
				</div>
				<div class="col-75">
					<select  name="department">
						<option value="cse">CSE</option>
						<option value="eee">EEE</option>
						<option value="ce">CE</option>
						<option value="me">ME</option>
						<option value="te">TE</option>
						<option value="food">FOOD</option>
					</select>

				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="lname">Password</label>
				</div>
				<div class="col-75">
					<input type="password" name="password" placeholder="Enter your passord.">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="lname">Confirm Password</label>
				</div>
				<div class="col-75">
					<input type="password" name="cpassword" placeholder="Enter your Confirm passord.">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="skills">Skills</label>
				</div>
				<div class="col-75">
					<textarea id="skills" name="skills" placeholder="Write your skills please.." style="height:200px"></textarea>
				</div>
			</div>
			<div class = "row">
				<div class ="col-25">
					<label for="photo">Photo</label>
				</div>
				<div class="col-75">
					<input type="file" name="photo1" require >
				</div>
			</div>
			<div class="row">
				<input type="submit" value="Submit" name="submit">
				<button class = "view"> <a href = "view.php"> View </a> </button>
			</div>
		</form>
	</div>
	<center>
		<?php
		echo $error;
		?>
	</center>
</body>
</html>
