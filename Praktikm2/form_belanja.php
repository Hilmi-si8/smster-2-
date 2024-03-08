<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<?php
        if(isset($_POST['submit'])){

         $cst = $_POST['custname'];
         $prd = $_POST['produk'];
         $jml = $_POST['jumlah'];
         $btn = $_POST['submit'];

         switch ($prd){
            case "Tv";
            $total = $jml * 4200000;
            break;
            case "Kulkas";
            $total = $jml * 3100000;
            break;
            case "Mesin cuci";
            $total = $jml * 2800000;
            break;
         }
         $total_format = number_format($total, 0, ',', '.');
        }  
    ?>
<body>
    <form method="post" action="form_belanja.php" class="w-75 mt-5 mx-auto p-4 border shadow-sm">
        <h2>Belanja Online</h2>
        <hr />
        <div style="display:flex;">
            <div class="container px-3">
                <div class="form-group row">
                    <label for="custname" class="col-4 col-form-label">Customer</label>
                    <div class="col-8">
                        <input name="custname" id="custname" placeholder="Masukan nama" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih produk</label>
                    <div class="col-8">
                        <div class="custo''m-control custom-radio custom-control-inline">
                            <input value="Tv" name="produk" id="Tv" type="radio" class="custom-control-input" required>
                            <label for="Tv" class="custom-control-label">Tv</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input value="Kulkas" name="produk" id="Kulkas" type="radio" class="custom-control-input" required>
                            <label for="Kulkas" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input value="Mesin Cuci" name="produk" id="Mesin Cuci" type="radio" class="custom-control-input" required>
                            <label for="Mesin Cuci" class="custom-control-label">Mesin cuci</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                    <div class="col-8">
                        <input name="jumlah" id="jumlah" placeholder="Jumlah beli" type="number" min=0 class="form-control" required>
                    </div>
                </div>
                <div class="form-group row m-3">
                    <div class="offset-4 col-8">
                        <input name="submit" type="submit" name="submit" value="Submit" class="btn btn-primary">
                    </div>
                </div>
            </div>
            <div class="form-group">
                    <p class="my-1">List Harga</p>
                    <ol>
                        <li>tv: 4.200.000</li>
                        <li>Kulkas: 3.100.000</li>
                        <li>Mesin Cuci: 3.800.000</li>
                    </ol>
            </div>
        </div>
        <?php 
        if(isset($_POST['submit'])){
            
            echo 'Nama Pembeli ' . $cst;
            echo '<br> Barang yang dibeli ' . $prd;
            echo '<br> Jumlah Produk ' . $jml;
            echo '<br> Harga barang ' . $total_format;
        }
        ?>
    </form>
</body>

</html>
