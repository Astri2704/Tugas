<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h2>Tempat Destinasi Yogyakarta</h2></center>
    <ol>
        <li>Bukit Bintang Rp. 10.000</li>
        <li>Pantai Sadranan Rp. 15.000</li>
        <li>Candi Borobudur Rp. 50.000</li>
        <li>Candi Prambanan Rp. 50.000</li>
        <li>Keraton Yogyakarta Rp. 50.000</li>
        <li>Malioboro Rp. 5.000</li>
        <li>Pendowo Lawas -> Cafe</li>
        <li>Goa Pindul Rp. 100.000</li>
    </ol>
    <form method="POST">
        <center>
            <h3>Pemesanan Tiket</h3>
            <table>
                <tr>
                    <td>Pilih Tiket</td>
                    <td>:</td>
                    <td><input type= "text" name="pilih"></td>
                </tr>
                <tr>
                    <td>Jumlah Tiket</td>
                    <td>:</td>
                    <td><input type="number" name="jumlah"></td>
                </tr>
                <tr>
                    <td>Bayar</td>
                    <td>:</td>
                    <td><input type="number" name="bayar"></td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <input type="submit" name="submit" value="Simpan">
                        </center>
                    </td>
                </tr>
            </table>
        </center>
    </form>
</body>
</html>

<?php 

if(isset($_POST['submit'])){
    $pilih = $_POST['pilih'];
    $jumlah = $_POST['jumlah'];
    $bayar = $_POST['bayar'];

    if($pilih == 1){
        $hargatiket = 10000;
        echo "Tiket = Bukit Bintang <br>";
        echo "Harga Tiket = Rp. $hargatiket <br>";
        echo "Jumlah Tiket = $jumlah <br>";
    }else if($pilih == 2){
        $hargatiket = 15000;
        echo "Tiket = Pantai Sadranan <br>";
        echo "Harga Tiket = Rp. $hargatiket <br>";
        echo "Jumlah Tiket = $jumlah <br>";
    }else if($pilih == 3){
        $hargatiket = 50000;
        echo "Tiket = Candi Borobudur <br>";
        echo "Harga Tiket = Rp. $hargatiket <br>";
        echo "Jumlah Tiket = $jumlah <br>";
    }else if($pilih == 4){
        $hargatiket = 50000;
        echo "Tiket = Candi Prambanan <br>";
        echo "Harga Tiket = Rp. $hargatiket <br>";
        echo "Jumlah Tiket = $jumlah <br>";
    }else if($pilih == 5){
        $hargatiket = 5000;
        echo "Tiket = Keraton Yogyakarta <br>";
        echo "Harga Tiket = Rp. $hargatiket <br>";
        echo "Jumlah Tiket = $jumlah <br>";
    }else if($pilih == 6){
        $hargatiket = 5000;
        echo "Tiket = Malioboro <br>";
        echo "Harga Tiket = Rp. $hargatiket <br>";
        echo "Jumlah Tiket = $jumlah <br>";
    }else if($pilih == 7){
        echo "cafe";
        echo "Tiket = Pendopo Lawas <br>";
        echo "Harga Tiket = Rp. $hargatiket <br>";
        echo "Jumlah Tiket = $jumlah <br>";
    }else if($pilih == 8){
        $hargatiket = 100000;
        echo "Tiket = Goa Pindul <br>";
        echo "Harga Tiket = Rp. $hargatiket <br>";
        echo "Jumlah Tiket = $jumlah <br>";
    }else{
        echo "Tiket Yang Anda Pilih Tidak Ada";
    }

    if($jumlah >= 10){
        $totalharga = $hargatiket*$jumlah;
        echo "Total Harga = Rp. $totalharga <br>";
        $totalhargadiskon = $totalharga*0.35;
        echo "Total Harga(diskon 15%) = $totalhargadiskon <br>";

        echo"Bayar = Rp. $bayar <br>";
        $kembali = $bayar-$totalharga-$totalhargadiskon;
        echo "Kembalian = Rp. $kembali";
    }else if($jumlah >= 5 && $jumlah <10){
        $totalharga = $hargatiket*$jumlah;
        echo "Total Harga = Rp. $totalharga <br>";
        $totalhargadiskon = $totalharga*0.25;
        echo "Total Harga(diskon 15%) = $totalhargadiskon <br>";

        echo"Bayar = Rp. $bayar <br>";
        $kembali = $bayar-$totalharga-$totalhargadiskon;
        echo "Kembalian = Rp. $kembali";
    }else if($jumlah >= 3 && $jumlah < 5){
        $totalharga = $hargatiket*$jumlah;
        echo "Total Harga = Rp. $totalharga <br>";
        $totalhargadiskon = $totalharga*0.15;
        echo "Total Harga(diskon 15%) = $totalhargadiskon <br>";

        echo"Bayar = Rp. $bayar <br>";
        $kembali = $bayar-$totalharga-$totalhargadiskon;
        echo "Kembalian = Rp. $kembali";
    }else{
        $totalharga = $hargatiket*$jumlah;
        echo "Total Harga = Rp. $totalharga <br>";
        echo "Bayar = Rp. $bayar <br>";
        $kembali = $bayar-$totalharga;
        echo "Kembalian = Rp. $kembali";
    }

}

?>