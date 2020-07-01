<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p><h1>Buat Account Baru!</h1></p>
<p><h4>Sign Up Form</h4></p>
<form action="{{ url('welcome') }}" method="get">
	<label for="firstname">First name:</label>
	<br>
	<input type="text" name="firstname" id="firstname">
	<br>
	<br>
	<label for="lastname">Last name:</label>
	<br>
	<input type="text" name="lastname" id="lastname">
	<br>
	<br>
	<label for="gender">Gender:</label>
	<br>
	<input type="radio" name="gender" id="male" value="Male">
	<label for="male">Male</label><br>
	<input type="radio" name="gender" id="female" value="Female">
	<label for="female">Female</label><br>
	<input type="radio" name="gender" id="other" value="Other">
	<label for="other">Other</label>
	<br>
	<br>
	<label>Nationality:</label><br>
	<br>
	<select>
		<option value="indonesia">Indonesia</option>
		<option value="malaysia">Malaysia</option>
		<option value="singapura">Singapura</option>
		<option value="brunei">Brunei Darusalam</option>
	</select>
<br>
<br>
	<label>Language Spoken:</label><br>
	<input type="checkbox" name="bahasa_indo" id="bahasa_indo">
	<label for="other">Bahasa Indonesia</label><br>
	<input type="checkbox" name="english" id="english">
	<label for="other">English</label><br>
	<input type="checkbox" name="other" id="other">
	<label for="other">Other</label><br>
	<br>
	<label>Bio:</label><br>
	<textarea name="bio" rows="10" cols="30"></textarea>
<br>
	<input type="submit" value="Sign Up" >

</form>
</body>
</html>