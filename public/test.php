<?php
/* Create some objects */
$draw = new ImagickDraw();
$pixel = new ImagickPixel( 'gray' );

/* New image */
$handle = fopen('E:\saving_cart_english.jpg', 'rb');
$img = new Imagick();
$img->readImageFile($handle);
//$img->resizeImage(1200,500,imagick::FILTER_LANCZOS, 0.9, true);
/* Black text */

/* Font properties */
$draw->setFont('Times-New-Roman-Bold');
$draw->setFontSize( 15 );

/* Create text */
$img->annotateImage($draw, 70, 226, 0, 
    'Ahihi');
	$img->annotateImage($draw, 180, 226, 0, 
    'Ahoho');

$img->annotateImage($draw, 265, 226, 0, 
    'Ahehe');
$overlay = new Imagick('E:\ahihi.png');
$overlay->resizeImage(124,200,imagick::FILTER_LANCZOS, 0.9, true);
$img->compositeImage($overlay, Imagick::COMPOSITE_DEFAULT, 8, 8);
$img->roundCorners(30,25);

/* Give image a format */
$img->setImageFormat('png');

/* Output the image with headers */
header('Content-type: image/png');
echo $img;
?>