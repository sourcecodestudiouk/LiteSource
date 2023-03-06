<?php

/**
 *  Page Header
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'page-header' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'page-header-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title = get_field('title');
$desc = get_field('description');


$colours = get_field('site_colours', 'options');
$textCol = getContrastColor($colours['primary']);

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="background-color:<?= $colours['primary']; ?>">
    <div class="container" style="color:<?= $textCol; ?>">
        <div class="content" >
           
        </div>
        <h3><?= $title; ?></h3>
        <p class="description"><?= $desc; ?></p>
    </div>
</div>