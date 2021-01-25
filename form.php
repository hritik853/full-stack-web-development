<!DOCTYPE html>
<html>
<head>
	<title>HTML FORM</title>
</head>
<body>
	<form method="post" action="form.html">
		name  :<input type="text" name="name" placeholder="type youe name" required ><br>
		e-mail:<input type="email" name="e-mail" placeholder="type your email" required  ><br>
		contact no :<input type="number" name="number" placeholder="type your no" maxlength="10" required ><br>
		city :<input type="text" name="city" placeholder="enter your city"required ><br>
		course :<input type="text" name="course" placeholder="enter course"required ><br>
		intrest <br>
		 programming :<input type="checkbox" name="int2" value="programming" required  ><br>
		sports :<input type="checkbox" name="int2" value="sports"><br>
		painting <input type="checkbox" name="int2" value="sports"><br>
		music <input type="checkbox" name="int2" value="sports"><br>
		dancing <input type="checkbox" name="int2" value="sports"><br>
		travelling <input type="checkbox" name="int2" value="sports"><br>
		playing footbal <input type="checkbox" name="int2" value="sports"><br>
		swimming <input type="checkbox" name="int2" value="sports"><br>
		singing  <input type="checkbox" name="int2" value="sports"><br>
		reading<input type="checkbox" name="int2" value="reading"><br>
		<input type="submit" value="click to submit">


	</form>
<?php
		$Name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$city=$_POST['city'];
	$Course=$_POST['Course'];
	$Interest=$_POST['interest'];
	 echo "Name=$name<br>";
  echo "Email=$email<br>";
  echo "Contact=$contact<br>";
  echo "city=$city<br>";
  echo "Course=$Course<br>";
  echo "Interest=$interest<br>";
 ?>

</body>
</html>