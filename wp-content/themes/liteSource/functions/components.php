<?php

function my_body_classes( $classes ) {
    $selectedFont = get_field('system_fonts', 'options');
    $classes[] = $selectedFont . '-font-family';
    $borderStyle = get_field('universal_border_radius', 'options');
    $classes[] = $borderStyle . '-border-radius';
    return $classes;
  }
add_filter( 'body_class','my_body_classes' );


// Calculate Contrast Ratio

function getContrastColor($hexcolor) {               
    $r = hexdec(substr($hexcolor, 1, 2));
    $g = hexdec(substr($hexcolor, 3, 2));
    $b = hexdec(substr($hexcolor, 5, 2));
    $yiq = (($r * 299) + ($g * 587) + ($b * 114)) / 1000;
    return ($yiq >= 128) ? 'black' : 'white';
}
?>