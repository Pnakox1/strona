<?php 
$conn=mysqli_connect("localhost","root","","ratownictwo");
$numer_zespolu=$_POST["numer_zespolu"];
$numer_dyspozytora=$_POST["numer_dyspozytora"];
$adres=$_POST["adres"];
$czas=date("H:i:s");
$kwerenda= "INSERT INTO zgloszenia (`id`,`ratownicy_id`,`dyspozytorzy_id`,`adres`,`pilne`,`czas_zgloszenia`) VALUES('NULL','$numer_zespolu','$numer_dyspozytora','$adres','0','$czas');";
    mysqli_query($conn,$kwerenda);
    echo "jd";
    echo $adres;
    mysqli_close($conn);
