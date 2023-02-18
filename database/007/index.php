<?php
  $file = 'anya.jpg';
  $width = 300;
  $height = 300;

  list($originalWidth, $originalHeight) = getimagesize($file);

  $originalRatio = $originalWidth / $originalHeight;
  $maxRatio = $width / $height;

  $finalWidth = 0;
  $finalHeight = 0;
  $finalX = 0;
  $finalY = 0;

  if($originalRatio < $maxRatio) {
    $finalWidth = $height * $originalRatio;
    $finalHeight = $height;
  } else {
    $finalHeight = $width / $originalRatio;
    $finalWidth = $width;
  }

  if($finalWidth < $width) {
    $finalWidth = $width;
    $finalHeight = $width / $originalRatio;
    $finalY = ($height - $finalHeight) / 2;
  } else {
    $finalHeight = $height;
    $finalWidth = $height * $originalRatio;
    $finalX = ($width - $finalWidth) / 2;
  }

  $image = imagecreatetruecolor($width, $height);
  $originalImg = imagecreatefromjpeg($file);

  imagecopyresampled($image, $originalImg, $finalX, $finalY, 0, 0, $finalWidth, $finalHeight, $originalWidth, $originalHeight);

  header("Content-Type: image/jpeg");
  imagejpeg($image, null, 100);
?>