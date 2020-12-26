<link rel="stylesheet" href="style.css">
<div class="wrap">   
<img class="kai" src="img/kai.png" alt="開">
<img class="torii" src="img/torii.png" alt="鳥居">
<img class="un" src="img/un.png" alt="運">

<?php
$num = rand(1,100);
if( $num <= 10){
  $n=0;
}elseif( $num > 10 && $num <= 25){
  $n=6;
}elseif( $num > 25 && $num <= 42){
  $n=2;
}elseif( $num > 42 && $num <= 58){
  $n=3;
}elseif( $num > 58 && $num <= 74){
  $n=4;
}elseif( $num > 74 && $num <= 90){
  $n=1;
}elseif( $num > 90 && $num <= 100){
  $n=5;
}
?>

<p><img class="fuda" src='img/<?=$n?>.png' alt='' />
</div>";