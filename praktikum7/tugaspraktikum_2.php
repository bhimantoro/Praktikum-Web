<?php
	$cell = $_GET["cell"];  //will get all this data from a dabase
	$kolom = $_GET["kolom"];
	$rows = ceil($cell/$kolom);
	$x=0;
	$start=0;
?>
	<table cellpadding="2" border="1">
<?php
	while($x<=$rows) {
	  echo "<tr>";
	  for ($y = 0; $y < 8; $y++, $start++) {
	    if ($start <= $end) echo "<td>$start</td>";
	  }
	  echo "</tr>";
	  $x++;
	}
?>