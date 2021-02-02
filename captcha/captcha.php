<?php
session_start();
 
$string = '';
 
for ($i = 0; $i < 5; $i++) {
    $string .= chr(rand(97, 122));
}
 
$_SESSION['rand_code'] = $string;
 
$dir = 'fonts/';
 
$image = imagecreatetruecolor(170, 60);
$black = imagecolorallocate($image, 0, 0, 0);
$color = imagecolorallocate($image, 255, 255, 255); // oq rang berish captchani rangi
$white = imagecolorallocate($image, 157, 67, 245);

 
imagefilledrectangle($image,0,0,399,99,$white);
imagettftext ($image, 30, 0, 10, 40, $color, "fonts/arial.ttf", $_SESSION['rand_code']);
 
header("Content-type: image/png");
imagepng($image);
?>