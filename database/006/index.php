<?php
  $file = 'anya.jpg';
  $maxWidth = 500;
  $maxHeight = 250;

  list($originalWidth, $originalHeight) = getimagesize($file);

  $originalRatio = $originalWidth / $originalHeight;
  $maxRatio = $maxWidth / $maxHeight;

  $finalWidth = 0;
  $finalHeight = 0;

  if($originalRatio < $maxRatio) {
    $finalWidth = $maxHeight * $originalRatio;
    $finalHeight = $maxHeight;
  } else {
    $finalHeight = $maxWidth / $originalRatio;
    $finalWidth = $maxWidth;
  }

  $image = imagecreatetruecolor($finalWidth, $finalHeight);
  $originalImg = imagecreatefromjpeg($file);

  imagecopyresampled($image, $originalImg, 0, 0, 0, 0, $finalWidth, $finalHeight, $originalWidth, $originalHeight);

  header("Content-Type: image/jpeg");
  imagejpeg($image, null, 100);
?>