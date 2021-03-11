<?php
 function_exists("imagegif") or exit();
 header("Content-type: image/gif");
 $im = ImageCreateTrueColor( 200, 100 );
 $text_color = ImageColorAllocate( $im, 233, 14, 91 );
 ImageString( $im, 1, 5, 5, "A Simple GIF Text String!", $text_color );
 ImageGif($im);
 ImageDestroy($im);
?>