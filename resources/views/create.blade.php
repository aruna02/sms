<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<h3>student detail</h3>


<form method="post" action="store">
<!-- <label>sid: </label><input type="varchar" name="sid"><br><br>
 -->name: <input type="text" name="student_name"><br><br>
<!-- lastname: <input type="text" name="lname"><br><br> -->
<label>DOB</label><input type="date" name="dob"><br><br>
<label>Gender: </label>
	<input type="radio" name="gender" value="male"> Male<input type="radio" name="gender" value="female"> Female<br>
<label>Address: </label>
	<input type="text" name="address"><br><br>
<label>phone</label> <input type="double" name="phone_no">
<label>Grade:</label> <input type="number" name="grade"><br><br>
<!-- <label>contact:</label> <input type="double" name="contact"><br><br> -->
<!-- <label>Roll : </label><input type="number" name="roll"><br><br> -->
<input type="submit" name="submit" value="save">
<!-- <button >save</button> -->
<button>reset</button>
</form>
</div>

</body>
</html>