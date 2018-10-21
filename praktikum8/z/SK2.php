<!DOCTYPE html>
<html>
<head>
	<title>Preselected Checkbox</title>
</head>

<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	<p>
		Order Makanan?<br/>
		<input type="checkbox" name="food[]" value="Soto" 
		<?php if (isset($_POST['formSubmit'])){Select('food','Soto');} ?>  
		/> Soto<br />
		<input type="checkbox" name="food[]" value="Ayam Bakar" 
		<?php if (isset($_POST['formSubmit'])){Select('food','Ayam Bakar');} ?>
		/>Ayam Bakar<br />
		<input type="checkbox" name="food[]" value="Ayam Goreng" 
		<?php if (isset($_POST['formSubmit'])){Select('food','Ayam Goreng');} ?>
		/>Ayam Goreng<br />
		<input type="checkbox" name="food[]" value="Nasi Goreng" 
		<?php if (isset($_POST['formSubmit'])){Select('food','Nasi Goreng');} ?>
		/>Nasi Goreng<br />
		<input type="checkbox" name="food[]" value="Iga Bakar" 
		<?php if (isset($_POST['formSubmit'])){Select('food','Iga Bakar');} ?>
		/>Iga Bakar
	</p>
	<input type="submit" name="formSubmit" value="Submit" />
</form>


<?php

	if(isset($_POST['formSubmit'])) 
    {    	
    	
		if(empty($_POST['food']))
        {
			echo("<p>Anda tidak memesan makanan.</p>\n");
		} 
        else 
        {
        	$aDoor = $_POST['food'];
            $N = count($aDoor);

			echo("<p>Anda memesan $N Makanan: ");
			for($i=0; $i < $N; $i++)
			{
				echo($aDoor[$i] . ", ");
			}
			echo("</p>");
		}	
	}
    function Select($chkname,$value)
    {
        if(!empty($_POST[$chkname]))
        {
            foreach($_POST[$chkname] as $chk)
            {
                if($chk == $value)
                {
                    echo 'checked="checked"';
                }
            }
        }
    }
?>

</body>
</html>