<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-TIKET KVKS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<style>
  body{
    font-family: quicksand;
    background-color: #d2b48c;
  }
</style>
<body>
	<div class="container bg-light p-4 shadow rounded-5 mt-1 mb-1">
		<center>
			<p class="fs-3">E-TIKET KVKS</p>
          	<p class="fw-bold fs-4">Daftar Pengguna</p>
		</center>
		<br>

		<?php
		include('config.php');

		if(isset($_POST['hantar'])){
			$nama=$_POST['nama'];
			$nokp=$_POST['nokp'];
			$tahun=$_POST['tahun'];
			$program=$_POST['program'];
			$emel=$_POST['emel'];
			$no_tel=$_POST['no_tel'];

			$nama_bapa=$_POST['nama_bapa'];
			$notel_bapa=$_POST['notel_bapa'];
			$nama_ibu=$_POST['nama_ibu'];
			$notel_ibu=$_POST['notel_ibu'];


			//strpos = nk tau position substring dlm string
			if(strpos($nokp, "-") == true){
				echo"
				<p class='alert alert-danger p-2'>
				<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-triangle-fill' viewBox='0 0 16 16'>
				<path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
				</svg>
				Pastikan No. Kad Pengenalan tidak mengadungi tanda '-'
				</p>
				";

			}
			if((strpos($no_tel, "-") == true) || (strpos($notel_bapa, "-") == true) || (strpos($notel_ibu, "-") == true)){
				echo"
				<p class='alert alert-danger p-2'>
				<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-triangle-fill' viewBox='0 0 16 16'>
				<path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
				</svg>
				Pastikan No. Telefon tidak mengadungi tanda '-'
				</p>
				";
			}
			else{
				$query=mysqli_query($con,"INSERT INTO pelajar VALUES (UPPER('$nama'),'$nokp','$no_tel','$emel','$tahun $program',UPPER('$nama_bapa'),'$notel_bapa',UPPER('$nama_ibu'),'$notel_ibu')");

				echo"
				<script>
					alert('Pendaftaran Berjaya');
					window.location='login.php';
				</script>
				";
			}
		}
		?>
		<form method="POST">
			<div class="row mb-3 ">
				<label class="col-sm-2 col-form-label">Nama Penuh</label>
				<div class="col-sm-10">
					<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Penuh Anda" required>
				</div>
			</div>

			<div class="row mb-3 ">
				<label class="col-sm-2 col-form-label">No. Kad Pengenalan</label>
				<div class="col-sm-10">
					<input type="text" name="nokp" class="form-control" placeholder="Masukkan No. Kad Pengenalan (tanpa -)" required>
				</div>
			</div>

			<div class="row mb-3 ">
				<label class="col-sm-2 col-form-label">Tahun Pengajian</label>
				<div class="col-sm-10">
					<select name="tahun" class="form-select" required>
						<option selected disabled value="">Sila Pilih</option>
						<option value="1 SVM">Tahun 1 Sijil Vokasional Malaysia</option>
						<option value="2 SVM">Tahun 2 Sijil Vokasional Malaysia</option>
						<option value="1 DVM">Tahun 1 Diploma Vokasional Malaysia</option>
						<option value="2 DVM">Tahun 2 Diploma Vokasional Malaysia</option>
					</select>
				</div>
			</div>

			<div class="row mb-3 ">
				<label class="col-sm-2 col-form-label">Program</label>
				<div class="col-sm-10">
					<select name="program" class="form-select" required>
						<option selected disabled value="">Sila Pilih</option>
						<option value="KPD">Teknologi Sistem Pengurusan Pangkalan Data & Aplikasi Web</option>
						<option value="KMK">Multimedia Kreatif Animasi</option>
						<option value="HSK">Seni Kulinari</option>
						<option value="HBP">Bakeri & Pasteri</option>
						<option value="BAK">Perakaunan</option>
						<option value="BPM">Pemasaran</option>
						<option value="OPP">SLDN-Operasi Pembuatan Perabot</option>
					</select>
				</div>
			</div>

			<div class="row mb-3 ">
				<label class="col-sm-2 col-form-label">E-mel</label>
				<div class="col-sm-10">
					<input type="email" name="emel" class="form-control" placeholder="Masukkan E-mel Anda" required>
				</div>
			</div>

			<div class="row mb-3 ">
				<label class="col-sm-2 col-form-label">No. Telefon</label>
				<div class="col-sm-10">
					<input type="text" name="no_tel" class="form-control" placeholder="Masukkan No. Telefon (tanpa -)" required>
				</div>
			</div>
			
			<br>
			<hr>
			<br>

			<div class="row mb-3 ">
				<label class="col-sm-2 col-form-label">Nama Penuh Bapa</label>
				<div class="col-sm-4">
					<input type="text" name="nama_bapa" class="form-control" placeholder="Masukkan Nama Penuh Bapa Anda" required>
				</div>

				<label class="col-sm-2 col-form-label">No. Telefon Bapa</label>
				<div class="col-sm-4">
					<input type="text" name="notel_bapa" class="form-control" placeholder="Masukkan No. Telefon (tanpa -)" required>
				</div>
			</div>

			<div class="row mb-5 ">
				<label class="col-sm-2 col-form-label">Nama Penuh Ibu</label>
				<div class="col-sm-4">
					<input type="text" name="nama_ibu" class="form-control" placeholder="Masukkan Nama Penuh Ibu Anda" required>
				</div>

				<label class="col-sm-2 col-form-label">No. Telefon Ibu</label>
				<div class="col-sm-4">
					<input type="text" name="notel_ibu" class="form-control" placeholder="Masukkan No. Telefon (tanpa -)" required>
				</div>
			</div>

			<div class="row mb-3">
				<div class="col">
					<button name="hantar" class="btn btn-primary" style="width:100%;">Hantar</button>
				</div>
			</div>
		</form>
  		
	</div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>