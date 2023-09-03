<?php
include('config.php');
session_start();

if(!isset($_SESSION["emel"])){
    header("Location: login.php");
}else{
    $emel=$_SESSION['emel'];
}

$query=mysqli_query($con,"SELECT * FROM pelajar WHERE emel='$emel'");
$fetch=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-TIKET KVKS</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<style>
	body{
		font-family: quicksand;
	}
</style>
<body class="bg-light">
	<div class="container-fluid fw-bold sticky-top p-3" style="background-color: #d2b48c;">
        <div class="row">
            <div class="col-sm-10 mb-3 mt-1">
                SELAMAT DATANG, <?php echo $fetch['nama'];?> 
            </div>
            <div class="col-sm-2">
                <button class="btn btn-danger float-lg-end" onclick="window.location='login.php'">Log Keluar</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-center">
            <img src="image/logo.png" class="w-25">
            <br>
            <p class="fs-5">
                Kolej Vokasional Kuala Selangor <br>
                Bstari Jaya, 45000 <br>
                Selangor Darul Ehsan
            </p>
        </div>
        <div class="row justify-content-md-center mt-4">
            <div class="text-center col-lg-5 border border-dark rounded-5 shadow mb-3 me-5">
                <img src="image/bus-alt.png" class="img w-25 m-4">
                <p class="fw-bold fs-3">Penempahan Tiket</p>
                <p>Membuat penempahan dan pembayaran tiket</p>
                <p>
                    <button class="btn btn-outline-dark rounded-pill" onclick="window.location='pembelian_tiket.php'" style="width: 100%;">Beli</button>
                </p>
            </div>
            <div class="text-center col-lg-5 border border-dark rounded-5 shadow mb-3">
                <img src="image/ballot-check.png" class="img w-25 m-4">
                <p class="fw-bold fs-3">Semak Pembelian</p>
                <p>Menyemak pembelian tiket yang telah dibuat</p>
                <p>
                    <button class="btn btn-outline-dark rounded-pill" onclick="window.location='semakan_pembelian.php'" style="width: 100%;">Semak</button>
                </p>
            </div>
        </div>
    </div>
    <footer class="footer text-center p-3" style="background-color: #d2b48c;">
        <hr>
        <p class="fw-bold">
            &copy Hak Terpelihara Camie & Zaff (xde laa terpelihara mne...)
        </p>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</html>