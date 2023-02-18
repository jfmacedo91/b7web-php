<?php
  $image = imagecreatetruecolor(300, 300);
  $color = imagecolorallocate($image, 0, 100, 55);
  imagefill($image, 0, 0, $color);

  header("Content-Type: image/jpg");
  imagejpeg($image, null)
?>