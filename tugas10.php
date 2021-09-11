<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <form action="" method="POST" name="input">
        <h3>Masukan Bintang <input type="text" name="bintang" required>
        <input type="submit" name="submit" value="submit"><br><br>
        <p><h3>Program segitiga bintang siku- siku</h3></p>
<?php
if (isset($_POST['submit'])){
    $bintang = $_POST['bintang'];   

for ($b = 1; $b <= $bintang; $b++) {
	for ($c = 1; $c <= $b ; $c++) {
		echo '*';
	}
	echo '<br>';
}
}
?>   
</form> 
</table>
</body>
</html>