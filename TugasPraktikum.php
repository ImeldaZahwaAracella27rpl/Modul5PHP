<html>
<head><title>Tugas Praktikum</title></head>
<body>
<form actiton="" method="post">
<table border=0>
<tr>
    <td>Panjang Persegi Panjang
    <td>:
    <td><input type="text" name="panjang"><br>
</tr>
<tr>
    <td>Lebar Persegi Panjang
    <td>:
    <td><input type="text" name="lebar"><br>
</tr>
<tr>
    <td><input type="submit" name="input-data" value=Input>
</tr>
</table>
</form>
</body>
</html>

<?php
    if (isset ($_POST["input-data"]))
    {
    $panjang= $_POST['panjang'];
    $lebar= $_POST['lebar'];
    $luas = $panjang * $lebar;
    $keliling = 2 * ($panjang + $lebar);
    function luas_persegipanjang($luas){
        echo "Luas Persegi Panjang = $luas <br>";
    }
    function keliling_persegipanjang($keliling){
        echo "Keliling Persegi Panjang = $keliling <br>";
    }

echo "Panjang Persegi Panjang Adalah = $panjang <br>";
echo "Lebar Persegi Panjang Adalah = $lebar <br>";
luas_persegipanjang($luas);
keliling_persegipanjang($keliling);
}
?>
