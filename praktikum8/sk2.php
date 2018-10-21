<!DOCTYPE html>
<html>
	<head>
		<title>Studi Kasus 2</title>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			<p>
				Pilih Hobby anda (boleh lebih dari satu)<br/>
				<input type="checkbox" name="hobby[]" value="Basket" 
					<?php
						if (isset($_POST['formSubmit']))
						{
							Select('hobby','Basket');
						} 
					?>  
				/>Basket<br/>
				<input type="checkbox" name="hobby[]" value="Fotografi" 
					<?php
						if (isset($_POST['formSubmit']))
							{
								Select('hobby','Fotografi');
							} 
						?>
				/>Fotografi<br/>
				<input type="checkbox" name="hobby[]" value="Renang" 
					<?php 
						if (isset($_POST['formSubmit']))
							{
								Select('hobby','Renang');
							} 
					?>
				/>Renang<br/>
				<input type="checkbox" name="hobby[]" value="Badminton" 
					<?php 
						if (isset($_POST['formSubmit']))
						{
							Select('hobby','Badminton');
						} 
					?>
				/>Badminton<br/>
				<input type="checkbox" name="hobby[]" value="Futsal" 
					<?php 
						if (isset($_POST['formSubmit']))
						{
							Select('hobby','Futsal');
						} 
					?>
				/>Futsal<br/>
				<input type="checkbox" name="hobby[]" value="Terjun Payung" 
					<?php 
						if (isset($_POST['formSubmit']))
						{
							Select('hobby','Terjun Payung');
						} 
					?>
				/>Terjun Payung<br/>
				<input type="checkbox" name="hobby[]" value="Travelling" 
					<?php 
						if (isset($_POST['formSubmit']))
						{
							Select('hobby','Travelling');
						} 
					?>
				/>Travelling<br/>
			</p>
			<input type="submit" name="formSubmit" value="Submit" />
		</form>
		<?php
			if(isset($_POST['formSubmit'])) 
			{
				if(empty($_POST['hobby']))
				{
					echo("<p>Tidak ada yang anda pilih.</p>\n");
				} 
				else 
				{
					$aDoor = $_POST['hobby'];
					$N = count($aDoor);
					echo("<p>Anda menyukai $N Hobby: ");
					for($i=0; $i < $N; $i++)
					{
						echo($aDoor[$i]. ", ");
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