
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color:;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
form{padding-top: 30px;
text-align: center;
font-size:20px;


	background-color: blue;
	max-width: 500px;
	length: 100px;
	margin: 0 auto;
	top: 50px;
	padding-bottom: 30px;
	margin-bottom: 30px;
	border-radius: 5px;
	box-shadow: 0 5px 100px rgba(0,0,0,0.4);
	text-align: center;
}
</style>
</head>
<body>

<form action="insertion.php" method = "post">
 <h1>Registration Form</h1>
    <p>Please fill in this form.</p>
    <hr>
  <div class="container">
  <label for="fname"><b>First  Name</b></label>
    <input type="text" placeholder="Enter First name" name="firstName" required>
	<label for="Mname"><b>Middle Name</b></label>
    <input type="text" placeholder="Enter Middle name" name="middleName" required>
	<label for="Lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last name" name="lastName" required>
	<label for="number"><b>School admission number</b></label> 
<input type="text" placeholder="Enter Permanent Resident" name="admissionNumber"> </br>

<label for="number"><b>Date of admission to school</b></label>
<input type="text" placeholder="Enter date of admission to school" name="admissionDate">
</br>
<label for="form"><b>Form to which admitted</b></label> 
<input type="text"  placeholder="Enter form to which admitted"name="form" required>
    <label for="year"><b>Year of Birth</b></label>
	<input type="text" placeholder="Enter year of birth" name="birthYear" required>

    <label for="number"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="number" required>
	<label for="president"><b>Pemanent Resident</b></label>
    <input type="text" placeholder="Enter Permanent Resident" name="resident" required>
<label for="gender"><b>Gender</b></label>
<div>
<label for="male" class="radio-inline"> <input type="radio" name="gender" value="M" id="male">Male</label>
<label for="female" class="radio-inline"> <input type="radio" name="gender" value="F" id="female">Female</label>
<label for="others" class="radio-inline"> <input type="radio" name="gender" value="O" id="others">Others</label>
</div> </br>

		<label for="Region"><b> Region </b></label><input type="text" placeholder="Enter your region" name="Region" required>
    
	
    
    <button type="submit" class="btn btn-primary" name="submit" value="Submit">Register</button>
  </div>
  
</form>

</body>
</html>
