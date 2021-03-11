<?php
 function_exists("imagejpeg") or exit();
 header("Content-type: image/jpeg");
 $im = ImageCreateTrueColor( 200, 100 );
 $text_color = ImageColorAllocate( $im, 233, 14, 91 );
 ImageString( $im, 1, 5, 5, "A Simple JPEG Text String!", $text_color );
 ImageJpeg($im);
 ImageDestroy($im);
?>