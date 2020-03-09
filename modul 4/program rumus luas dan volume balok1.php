<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>luas balok + volume kubus</title>
  </head>
  <body>
    <h4>form volume balok</h4>
    <h3>Isi Data:</h3>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Panjang</td>
                <td>:</td>
                <td><input type="text" name="panjang" required ></td>
            </tr>
            <tr>
                <td>Lebar</td>
                <td>:</td>
                <td><input type="text" name="lebar" required ></td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td>:</td>
                <td><input type="text" name="tinggi" required ></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
        <?php
            if(isset($_POST['submit'])){
                $panjang = $_POST['panjang'];
                $lebar = $_POST['lebar'];
                $tinggi = $_POST['tinggi'];
                $volume_balok    =$panjang*$lebar*$tinggi;

                echo "Hasil hitung volume balok adalah sebagai berikut:<br />";
                echo "Diketahui;<br />";
                echo "Panjang = $panjang<br />";
                echo "Lebar = $lebar<br />";
                echo "Tinggi = $tinggi<br />";
                echo "Maka volume balok sama dengan [ $panjang x $lebar x $tinggi ] = $volume_balok";
            }
        ?>

  </body>
</html>
