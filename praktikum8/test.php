<html>
<head>
<title>Validasi Form</title>
</head>
<body>
<script>
function cekFile() {
   var cek = document.forms['cekForm']['test'].value;
     if(cek==null || cek=="")
     {
       alert("Form harus di isi !!!");
       return false;
     }
}
</script>
<form action="proses.php" method="post" name="cekForm" onSubmit="return cekFile()">
   <input name="test" type="text" />
   <input type="submit" value="Proses"/>
</form>
</body>
</html>