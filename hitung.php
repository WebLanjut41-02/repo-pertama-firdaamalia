<form method="get" action="">
  
  Tinggi  (cm) <br>
  <input type="text" name="tb"><br>
  Berat Badan (kg)<br>
 <input type="text" name="bb"><br>
 Jenis Kelamin<br>
    <input type="radio" name="kelamin" value="perempuan">perempuan<br>
    <input type="radio" name="kelamin" value="laki-laki">laki-laki<br> <br> 
 <input type="submit" name="submit" value="Hitung BMI">
 </form>




<?php
if (isset($_GET['submit'])) {

  $kelamin =$_GET['kelamin'];
  $tb   =$_GET['tb']/100;
  $bb   =$_GET['bb'];

  $bmi =$bb / ($tb * $tb);

  echo "==Hasil Perhitungan BMI==<br>";
  echo "jenis kelamin : $kelamin<br>";
  echo "tinggi badan : $tb cm<br>";
  echo "berat badan : $bb kilogram<br>";
  echo "BMI anda : ".number_format($bmi)."<br>";
  echo "kesimpulan : ";

  if ($bmi < 17) {
    echo "kurus";
  }elseif ($bmi <23) {
    echo "normal";
  }elseif ($bmi < 27) {
    echo "kegemukan";
  }elseif ($bmi > 27) {
    echo "obesitas";
  }

}
?>




 




















