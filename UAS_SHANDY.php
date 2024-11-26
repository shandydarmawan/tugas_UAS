<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <h2 align="center">SOAL UAS PRAKTIK RPL</h2>
  <img src="assalaam.png" class="rounded mx-auto d-block" alt="...">  
  <div class="container">
        <h1 class ="text-center">PENGGAJIHAN <br> GURU/KARYAWAN/YAYASAN ASSALAAM</h1>
        <form action="" method="post">
        <div class="card">
        <div class="card-header">
             Data Penggajihan
        </div>
        <div class="card-body">
            <p>No</p>
        <input type="text" name="no" id="" placeholder="No" class="form-control">
        <br>
        <p>Nama</p>
        <input type="text" name="nama" id="" placeholder="Nama" class="form-control">
        <br>
        <p>Unit Pendidikan</p>
        <select name="unit" id="" class="form-select">
            <option value="">Pilih Unit Pendidikan</option>
            <option value="TK">TK</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="SMK">SMK</option>
        </select>
        <br>
        <p>Tanggal Gaji</p>
        <input type="date" name="tgl_gaji" id="" class="form-control">
        <br>

        <div class="container">
  <div class="row">
    <div class="col">
      <h2 class="text-center">Gaji</h2>
      <p>Jabatan</p>
      <select name="jabatan" id="" class="form-select">
        <option value="">Pilih Jabatan</option>
        <option value="Kepala Sekolah">Kepala Sekolah</option>
        <option value="Wakasek">Wakasek</option>
        <option value="Guru">Guru</option>
        <option value="Karyawan">Karyawan</option>
      </select>
      <br>
      <p>Lama Kerja</p>
        <input type="text" name="lama_kerja" id="" placeholder="Lama Kerja" class="form-control">
        <br>
        <p>Status Kerja</p>
      <select name="status" id="" class="form-select">
        <option value="">Pilih Status Kerja</option>
        <option value="Tetap">Tetap</option>
        <option value="Kontak">Kontrak</option>
      </select>
      <br>
    </div>
    <div class="col">
      <h2 class="text-center">Potongan</h2>
      <p>BPJS</p>
      <input type="number" name="bpjs" id="" placeholder="BPJS" class="form-control">
      <br>
      <p>Pinjaman</p>
      <input type="number" name="pinjaman" id="" placeholder="Pinjaman" class="form-control">
      <br>
    <p>Cicilan</p>
    <input type="number" name="cicilan" id="" placeholder="Cicilan" class="form-control">
    <br>
    <p>Infaq</p>
    <input type="number" name="lainnya" id="" placeholder="Lainnya" class="form-control">
    <br>
    </div>
  </div>
        <button align="text-center" class="btn btn-primary " name="proses">Proses</button>
  </div>
</div>
    </form></div>

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
if(isset($_POST['proses'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tgl_gaji = $_POST['tgl_gaji'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lama_kerja'];
    $status_kerja = $_POST['status'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $cicilan = $_POST['cicilan'];
    $lainnya = $_POST['lainnya'];

 $gaji = [
        'Kepala Sekolah' => 10000000,
        'Wakasek' => 7000000,
        'Guru' => 5000000,
        'Karyawan' => 2500000
    ];

    if($status_kerja == "Tetap"){
      $bonus = 1000000;
    }else if($status_kerja == "Kontrak"){
      $bonus = 0;
    }else{
      echo "Eror!!";
    }
    $hasil_gaji = $gaji[$jabatan];
    $gaji_bersih = ($hasil_gaji + $bonus) - ($bpjs + $pinjaman + $cicilan + $lainnya);
    
    
    class Gaji{
      function StrukGaji($no3,$nama3,$unit3,$tgl_gaji3,$jabatan3,$gaji3,$lama_kerja3,$status_kerja3,$bonus3,$bpjs3,$pinjaman3,$cicilan3,$lainnya3,$gaji_bersih3){
      echo "<table align='center'> ";
      echo "<tr>
            <td>No</td>
            <td>:</td>
            <td>$no3</td>
            </tr>";
      echo "<tr>
            <td>Nama</td>
            <td>:</td>
            <td>$nama3</td>
            </tr>";
      echo "<tr>
            <td>Unit Pendidikan</td>
            <td>:</td>
            <td>$unit3</td>
            </tr>";
      echo "<tr>
            <td>Tanggal Gaji</td>
            <td>:</td>
            <td>$tgl_gaji3</td>
            </tr>";
      echo "<tr>
            <td>Jabatan</td>
            <td>:</td>
            <td>$jabatan3</td>
            </tr>";
      echo "<tr>
            <td>Gaji</td>
            <td>:</td>
            <td>$gaji3</td>
            </tr>";
      echo "<tr>
            <td>Lama Kerja</td>
            <td>:</td>
            <td>$lama_kerja3</td>
            </tr>";
      echo "<tr>
            <td>Status Kerja</td>
            <td>:</td>
            <td>$status_kerja3</td>
            </tr>";
      echo "<tr>
            <td>Bonus</td>
            <td>:</td>
            <td>$bonus3</td>
            </tr>";
      echo "<tr>
            <td>BPJS</td>
            <td>:</td>
            <td>$bpjs3</td>
            </tr>";
      echo "<tr>
            <td>Pinjaman</td>
            <td>:</td>
            <td>$pinjaman3</td>
            </tr>";
      echo "<tr>
            <td>Cicilan</td>
            <td>:</td>
            <td>$cicilan3</td>
            </tr>";
      echo "<tr>
            <td>Infaq</td>
            <td>:</td>
            <td>$lainnya3</td>
            </tr>";
      echo "<tr>
            <td>Gaji Bersih</td>
            <td>:</td>
            <td>$gaji_bersih3</td>
            </tr>";
      echo "</table>";
    }
    }
    $gaji = new Gaji();
     echo "<div class='card mt-5 ms-5 me-5 ps-5 pe-5'><div class='card-body fs-3'>";
     echo "<h2 class='text-center'>Struktur  Gaji</h2>";
     $gaji->StrukGaji($no,$nama,$unit,$tgl_gaji,$jabatan,$hasil_gaji,$lama_kerja,$status_kerja,$bonus,$bpjs,$pinjaman,$cicilan,$lainnya,$gaji_bersih);
     echo "</div></div>";
  }

  ?>