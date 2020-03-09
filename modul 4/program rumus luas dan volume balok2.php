<?php
    if(isset($_POST['submit'])){
        $panjang    =$_POST['panjang'];
        $lebar        =$_POST['lebar'];
        $tinggi        =$_POST['tinggi'];
        $volume_balok    =$panjang*$lebar*$tinggi;

        echo "Hasil hitung volume balok adalah sebagai berikut:<br />";
        echo "Diketahui;<br />";
        echo "Panjang = $panjang<br />";
        echo "Lebar = $lebar<br />";
        echo "Tinggi = $tinggi<br />";
        echo "Maka volume balok sama dengan [ $panjang x $lebar x $tinggi ] = $volume_balok";
?>
