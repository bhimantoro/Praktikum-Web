<!DOCTYPE html>
<html>
    <head>
        <title>Praktikum 1</title>
</head>
<body>
    <p>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <label>Masukan Jenis Kelamin</label><br><br>
        <select name="coba">
            <option <?php if(isset($_POST['coba']) && $_POST['coba'] == "Laki-Laki"){ echo "selected='selected'";}?> value="Laki-Laki">Laki-Laki</option>
            <option <?php if(isset($_POST['coba']) && $_POST['coba']  == "Perempuan"){ echo "selected='selected'";}?> value="Perempuan">Perempuan</option>
            <option <?php if(isset($_POST['coba']) && $_POST['coba']  == "Lainnya"){ echo "selected='selected'";}?> value="Lainnya">Lainnya</option>
        </select>
        <input type="submit" name="ok" value="Submit">
    </form>
    </p>
    <?php
    if (isset($_POST['coba'])) {
        $nilai = $_POST['coba'];
        if($nilai == "Lainnya"){
            echo "<p>Jenis Kelamin Anda Masih Belum Diketahui</p>";
        }else{
            echo "<p>Jenis Kelamin Anda Adalah " . $nilai . "</p>";
        }
        
    }
    ?>
</body>
</html>