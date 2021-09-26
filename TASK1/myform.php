<?php include "control/results.php"; ?>

<!DOCTYPE html>
<html>
<body>
<h1>Registration form </h1>
<form action="" method="post">
Enter your First Name: <input type="text" name="fname"> <?php echo $validatename; ?>
<br>
Enter your Last Name: <input type="text" name="lname"> <?php echo $validatename; ?>
<br>
Enter your Age: <input type="text" name="age"> <?php echo $validateage; ?>




<p>Please select your Designation:
  <input type="radio"  value="Junior Programmer">
  <label for="Junior Programmer">Junior Programmer</label>
  <input type="radio" value="Senior Programmer">
  <label for="Senior Programmer">Senior Programmer</label>
  <input type="radio"  value="Project Lead">
  <label for="Project Lead">Project Lead</label>
  <br>
  <?php echo $validateradio; ?>

<p>Please select your Designation:
  <input type="checkbox"  value="JAVA">
  <label for="JAVA">JAVA</label>
  <input type="checkbox" value="PHP">
  <label for="PHP">PHP</label>
  <input type="checkbox"  value="C++">
  <label for="C++">C++</label>
  <br>
  <?php echo $validatecheckbox; ?>
  Enter your E-mail: <input type="text" name="email"> <?php echo $validateemail; ?>
  <br>
  Enter your Password: <input type="text" name="password"> <?php echo $validatepassword; ?>
  
  <p>Please choose a file:
  <input type="file"  value="file">
  <label for="file"></label>
  <br>




<input type="submit" value="Submit">
<input type="reset"  value="Reset"
</form>
</body>
</html>