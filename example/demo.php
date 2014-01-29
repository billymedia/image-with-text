<?php
require '../vendor/autoload.php';

// Create image
$image = new \NMC\ImageWithText\Image(dirname(__FILE__) . '/source.jpg');

// Add styled text to image
$text1 = new \NMC\ImageWithText\Text('Thanks for using our image text PHP library!', 3, 25);
$text1->align = 'center-out';
$text1->color = 'FFFFFF';
$text1->font = dirname(__FILE__) . '/Ubuntu-Medium.ttf';
$text1->lineHeight = 36;
$text1->size = 24;
$text1->startX = 40;
$text1->startY = 80;
$image->addText($text1);

// Render image
$image->render(dirname(__FILE__) . '/destination.jpg');
