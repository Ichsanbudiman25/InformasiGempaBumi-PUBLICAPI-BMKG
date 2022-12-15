<?php
    $data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml") or die("Gagal");
    $i = 1;
    $gempabumiterkahir = $data->gempa->Jam;
    $temp_gempa_terakhir = $gempabumiterkahir;
    // var_dump($gempabumiterkahir); die();
    if($temp_gempa_terakhir != $gempabumiterkahir){
        alert("TELAH TERJADI GEMPA BUMI BARU!!!");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Poopers -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <style>
        .btn{
            background: #f09433; 
            background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); 
            background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
            background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );
            color:#fff;
        }

        .btn:hover{
            filter: brightness(.8);
            transition: .5s;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand text-light" href="#">Gempa Early Warning System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="index.php" >Daftar 15 Gempa Bumi Terbaru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="autogempa.php" >Auto Gempa</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link disabled text-light">Disabled</a>
        </li> -->
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<center>
    <div class="data" style="width: 80%; margin:50px; margin-top:100px">
        <table class="table table-dark table-striped text-center">
          <tr>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Magnitudo</th>
            <th>Kedalaman</th>
            <th>Wilayah</th>
            <th>Potensi</th>
          </tr>
          
          <?php
                echo "
                    <tr>
                        <td>".$data->gempa->Tanggal."</td>
                        <td>".$data->gempa->Jam."</td>
                        <td>".$data->gempa->Magnitude."</td>
                        <td>".$data->gempa->Kedalaman."</td>
                        <td>".$data->gempa->Wilayah."</td>
                        <td>".$data->gempa->Potensi."</td>
                    
                ";
          ?>
        </table>
        <img src="https://data.bmkg.go.id/DataMKG/TEWS/<?= $data->gempa->Shakemap ?>" alt="">

    </div>

</center>

<div class="card text-center">
  <div class="card-body bg-dark text-light">
    <h5 class="card-title">Designed by Gempa Early Warning System</h5>
    <p class="card-text">Menyelamatkan nyawa oranglain adalah pekerjaan paling mulia.</p>
    <a href="https://instagram.com/kilatinformatika" target="_Blank" class="btn">Kunjungi Instagram Kami</a>
  </div>
  <div class="card-footer text-muted bg-dark">
    Gempa Early Warning System
  </div>
</div>  


</body>
</html>