<?php


?>
<html>
<head>
</head>
<body>
<form action="form_code.php" method="Post">
Name :
<input type="text" name="n"/>
<br/>
Father Name :
<input type="text"name="fn"/>
<br/>
Gender:
<input type="radio" name="g" value="Male"/>Male
<input type="radio" name="g" value="Female"/>Female
<br/>
Date Of Birth :
<input type="text" name="dob">
<br>
Email :
<input type="email"name="e"/>
<br/>
Password :
<input type="password"name="pwd"/>
<br/>
Mobile :
<input type="number"name="mob"/>
<br/>
Select Course:
<select name="course">
<option value="" selected></option>
<option value="Btech">B.Tech</option>
<option value="MCA">MCA</option>
<option value="MBA">MBA</option>
<option value="Diploma">Diploma</option>
<option value="BCA">BCA</option>
</select>
<br>
Select State:
<select name="state">
<option value="" selected></option>
<option value="UP">UP</option>
<option value="Delhi">Delhi</option>
<option value="Mumbai">Mumbai</option>
<option value="Goa">Goa</option>
<option value="Bihar">Bihar</option>
</select>
<br>
Pincode :
<input type="text" name="pc">
<br>


<input type="Submit"/>

</form>
</body>
</html>