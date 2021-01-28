<?php
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$course=$_POST['course'];
$intrest=$_POST['intrest'];
  //echo "name = $name<br>";
  //echo "email = $email<br>";
  //echo "contact = $contact<br>";
  //echo "city = $city<br>";
  //echo "course = $course<br>";
  //echo "intrest = $intrest<br>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>HTML FORM</title>
</head>
<body>
	<form method="post" action="form1.html">
		name  :<input type="text" name="name" placeholder="type youe name" required ><br>
		e-mail:<input type="email" name="e-mail" placeholder="type your email" required  ><br>
		contact no :<input type="number" name="number" placeholder="type your no" maxlength="10" required ><br>
		city :<input type="text" name="city" placeholder="enter your city"required ><br>
		course :<input type="text" name="course" placeholder="enter course"required ><br>
		intrest <br>
		 programming :<input type="checkbox" name="int2" value="programming" >
		sports :<input type="checkbox" name="int2" value="sports">
		painting <input type="checkbox" name="int2" value="sports">
		music <input type="checkbox" name="int2" value="sports">
		dancing <input type="checkbox" name="int2" value="sports">
		travelling <input type="checkbox" name="int2" value="sports">
		playing footbal <input type="checkbox" name="int2" value="sports">
		swimming <input type="checkbox" name="int2" value="sports">
		singing  <input type="checkbox" name="int2" value="sports">
		reading<input type="checkbox" name="int2" value="reading">
		<input type="submit" value="click to submit">
		 <table border=1px; style=" border-collapse: collapse">
              <tr>
                  <th>Name</th>
                  <th>Eamil</th>
                  <th>Contact</th>
                  <th>city</th>
                  <th>course</th>
                  <th>intrest</th>
              </tr>
              <tr>
                  <th><?php echo "$name" ?></th>
                  <th><?php echo "$email" ?></th>
                  <th><?php echo "$contact" ?></th>
                  <th><?php echo "$city" ?></th>
                  <th><?php echo "$course" ?></th>
                  <th><?php echo "$intrest" ?></th>
              </tr>
          </table>


	</form>

</body>
</html>