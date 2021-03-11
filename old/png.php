<?php
 function_exists("imagepng") or exit();
 header("Content-type: image/png");
 $im = ImageCreateTrueColor( 200, 100 );
 $text_color = ImageColorAllocate( $im, 233, 14, 91 );
 ImageString( $im, 1, 5, 5, "A Simple PNG Text String!", $text_color );
 ImagePng($im);
 ImageDestroy($im);
?>