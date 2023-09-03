<?php
include('config.php');
session_start();
$msg="";

if(isset($_POST['login'])){
  $emel=$_POST['emel'];
  $katalaluan=$_POST['nokp'];

  $query=mysqli_query($con,"SELECT * FROM pelajar WHERE emel='$emel'");

  if(mysqli_num_rows($query)>0){
    while($row=mysqli_fetch_assoc($query)){
      $last_digit=substr($row['no_kp'], -4);
  
      if($katalaluan == $last_digit){
          $_SESSION['emel']=$emel;
          
          echo"
          <script>
            window.location='dashboard_user.php';
          </script>
          ";
      }else{
        $msg ="
        <p class='alert alert-danger p-2'>
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-triangle-fill' viewBox='0 0 16 16'>
          <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
        </svg>
        Kata Laluan Salah
        </p>
        ";
      }
    }
  }else{
    $msg="
    <p class='alert alert-danger p-2'>
    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-triangle-fill' viewBox='0 0 16 16'>
      <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
    </svg>
    E-mel @ Kata Laluan Salah
    </p>
    ";
  }
}
?>
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
  <div class="container bg-light p-3 shadow rounded-5 position-absolute top-50 start-50 translate-middle">
    <div class="row">
      <div class="col-md m-1 text-center">
        <img class="img w-100 rounded-4" src="image/bas.png" onclick="window.location='loginadmin.php'">
      </div>
      <div class="col-md m-1">
        <center>
          <p class="fs-3">E-TIKET KVKS</p>
          <p class="fw-bold fs-4">Log Masuk Pengguna</p>
        </center>
        <br>
        <form method="POST">
          <?php echo $msg; ?>
          <label class="form-label">E-mel</label>
          <input type="email" class="form-control rounded-3" name="emel" placeholder="Masukkan e-mel anda" required>
          <br>
          <label class="form-label">Kata Laluan</label>
          <input type="password" class="form-control rounded-3" name="nokp" placeholder="4 angka terakhir no.kp" required>
          <br>
          <button type="submit" class="btn btn-primary rounded-3 mb-2" style="width:100%;" name="login">Log Masuk</button>
          <button class="btn btn-outline-primary rounded-3 mb-2" style="width:100%;" onclick="window.location='daftarpengguna.php'">Daftar Pengguna</button>
        </form>
      </div>
    </div>
  </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>