<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
	<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
	
	

</head>
<body>
	<h1>Student Form</h1>
	<form name="register" autocomplete="off" method="POST" action="./process-form.php" align="center" enctype="multipart/form-data"><fieldset><legend>Student Information</legend>	</br>
		

		<label>Name:</label>
		<input type="text" id="name" name="name">
	    </br>
	    </br>
	    </br>
	    <label>Roll:</label>
	     <input type="text" id="pass" name="pass">
	 </br>  </br></br>
	     <label>Faculty</label>
	     <input type="text" name="faculty">
	 </br>  </br> </br>	
	 <input type="submit" value="save" > 
	 <input type="reset" value="cancel" >

	  </fieldset>  
	</form>
	

</body>
</html>