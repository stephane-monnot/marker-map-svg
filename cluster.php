<?php
$backgroundColor = isset($_GET['backgroundColor']) ? '#' . $_GET['backgroundColor'] : '#CC0000';
$size            = isset($_GET['size']) ? $_GET['size'] : '40';
$radius          = $size / 2;
?>
<svg xmlns="http://www.w3.org/2000/svg" height="<?php echo $size; ?>" width="<?php echo $size; ?>">
    <circle cx="<?php echo $radius; ?>px" cy="<?php echo $radius; ?>px" r="<?php echo $radius * 0.6; ?>px"  fill="<?php echo $backgroundColor; ?>" />
    <circle cx="<?php echo $radius; ?>px" cy="<?php echo $radius; ?>px" r="<?php echo $radius * 0.7; ?>px" fill-opacity="0.8" fill="<?php echo $backgroundColor; ?>" />
    <circle cx="<?php echo $radius; ?>px" cy="<?php echo $radius; ?>px" r="<?php echo $radius * 0.8; ?>px" fill-opacity="0.5" fill="<?php echo $backgroundColor; ?>" />
    <circle cx="<?php echo $radius; ?>px" cy="<?php echo $radius; ?>px" r="<?php echo $radius * 0.9; ?>px" fill-opacity="0.20" fill="<?php echo $backgroundColor; ?>" />
    <circle cx="<?php echo $radius; ?>px" cy="<?php echo $radius; ?>px" r="<?php echo $radius; ?>px" fill-opacity="0.20" fill="<?php echo $backgroundColor; ?>" />
</svg>