<html>
<head>
	
</head>
<body>
	<?php
		if(isset($_POST['save']))
		{
		
			$STime=date('h:i:s a m/d/Y', strtotime($SSTime));
			$STime=$_POST['STime'];
			
			alert($STime);
		}
	?>

	<form method="post">
	
	  <input type="time" name="SSTime"  id="SSTime"  class="form-control" placeholder="Type Time"  maxlength="50" />
	   <input type="submit" name="save" value="submit"/>
	</form>
	
</body>
</html>