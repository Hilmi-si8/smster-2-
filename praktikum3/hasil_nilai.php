<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="bg-danger text-white col-md-12 p-5" >
    <?php 

require_once 'model.php';

if(!isset($_POST['submit'])){
    header("Location: latihan.php");
    exit;}

    $proses = $_POST["submit"];
    $nama_siswa = $_POST ["nama"];
    $matkul = $_POST ["matakuliah"];
    $hasiluts = $_POST ["nilai_uts"]; 
    $hasiluas = $_POST ["nilai_uas"];
    $hasiltugas = $_POST["nilai_tugas"];
    $hasil_akhir = ($hasiluts + $hasiluas + $hasiltugas) / 3;


    echo 'Nama Siswa : '. $nama_siswa;
    echo '<br> Mata kuliah yang diambil : '. $matkul;
    echo '<br>Nilai Uts : '. $hasiluts;
    echo '<br>Nilai Uas : '. $hasiluas;
    echo '<br>Nilai Tugas : '. $hasiltugas;
    echo '<br>Nilai Rata-Rata :' . $hasil_akhir;
    echo '<br> Pengetahuan pada Matkul ini : '. pengetahuan($hasil_akhir);
    echo '<br>GRADE : '. nilai($hasil_akhir);
    echo '<br>DINYATAKAN :'. lulus($hasil_akhir);
   

?> 
    </div>

</body>
</html>
