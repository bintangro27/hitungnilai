<?php
$a = [90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100];
$b = [70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80,81, 82, 83, 84, 85, 86, 87, 88, 89];
$c = [60,61, 62, 63, 64, 65, 66, 67, 68, 69];
$d = [50,51, 52, 53, 54, 55, 56, 57, 58, 59];


if(isset($_POST["submit"])) {
    if($_POST["nilai"] == $a[0] || $_POST["nilai"] == $a[1] || $_POST["nilai"] == $a[2] || $_POST["nilai"] == $a[3] || $_POST["nilai"] == $a[4] || $_POST["nilai"] == $a[5] ||
    $_POST["nilai"] == $a[6] || $_POST["nilai"] == $a[7] || $_POST["nilai"] == $a[8] || $_POST["nilai"] == $a[9] || $_POST["nilai"] == $a[10] ) {
        header("Location: nilai_a.php");
    } elseif($_POST["nilai"] == $b[0] || $_POST["nilai"] == $b[1] || $_POST["nilai"] == $b[2] || $_POST["nilai"] == $b[3] || $_POST["nilai"] == $b[4] || $_POST["nilai"] == $b[5]
    || $_POST["nilai"] == $b[6] || $_POST["nilai"] == $b[7] || $_POST["nilai"] == $b[8] || $_POST["nilai"] == $b[9] || $_POST["nilai"] == $b[10] || $_POST["nilai"] == $b[11] || $_POST["nilai"] == $b[12]
    || $_POST["nilai"] == $b[13] || $_POST["nilai"] == $b[14] || $_POST["nilai"] == $b[15] || $_POST["nilai"] == $b[16] || $_POST["nilai"] == $b[17] || $_POST["nilai"] == $b[18] || $_POST["nilai"] == $b[19]){
        header("Location: nilai_b.php");
    } elseif($_POST["nilai"] == $c[0] || $_POST["nilai"] == $c[1] || $_POST["nilai"] == $c[3] || $_POST["nilai"] == $c[4] || $_POST["nilai"] == $c[5] || $_POST["nilai"] == $c[6]
    || $_POST["nilai"] == $c[7] || $_POST["nilai"] == $c[8] || $_POST["nilai"] == $c[9]){
        header("Location: nilai_c.php");
    } elseif ($_POST["nilai"] == $d[0] || $_POST["nilai"] == $d[1] || $_POST["nilai"] == $d[2] || $_POST["nilai"] == $d[3] || $_POST["nilai"] == $d[4] || $_POST["nilai"] == $d[5] || $_POST["nilai"] == $d[6] || $_POST["nilai"] == $d[7]
    || $_POST["nilai"] == $d[8] || $_POST["nilai"] == $d[9] ) {
        header("Location: nilai_d.php");
    } else if ($_POST["nilai"] < 50) {
        $gagal = true;
    } else {
        $error = true;
        
    }
}    
?>


<!DOCTYPE html>
<html lang="en">
<head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung nilai</title>
    <style>
        body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	height: 100vh
}
@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}

.cool-box {
    width: 300px;
    padding: 20px;
    border-radius: 15px;
    background: linear-gradient(135deg, #ff6b6b, #f0e5d8);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
    color: #333;
    font-family: 'Arial', sans-serif;
}

.cool-box h1 {
    font-size: 24px;
    margin: 0;
}

.cool-box p {
    font-size: 16px;
    margin: 10px 0 0;
}



    </style>
</head>
<body>
    <div class="cool-box">
    <form action="" method="post">



<label for="nilai" style=" font-family: 'Courier New', monospace;font-size: 17px; color: white;">PROGRAM UNTUK MENGHITUNG NILAI</label>
<br>
<input type="text"  placeholder="input nilai" name="nilai" style="border-radius: 6px; width: 30%; background-color: whitesmoke; margin-bottom: 15px; margin-top: 15px;">
<br>
<?php if(isset($error)) : ?>
<p style="color: red;">Masukan nilai yang benar!!!</p>
<?php endif; ?>
<?php if(isset($gagal)) : ?>
<p style="color: red;">Anda tidak lulus! <br> &#128511; &#128511; &#128511; &#128511; &#128511; </p>
<?php endif; ?>
<button type="submit" name="submit" class="btn btn-primary">submit</button> 

</form>
    </div>
</body>
</html>
