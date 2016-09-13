<?php
$backgroundColor = isset($_GET['backgroundColor']) ? '#' . $_GET['backgroundColor'] : '#CC0000';
$fontColor       = isset($_GET['fontColor']) ? '#' . $_GET['fontColor'] : '#000';
$borderColor     = isset($_GET['borderColor']) ? '#' . $_GET['borderColor'] : '#000';
$text            = isset($_GET['text']) ? $_GET['text'] : '1';
$fontSize        = isset($_GET['fontSize']) ? $_GET['fontSize'] : '40';
?>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="61" height="33" x="0px"
     y="0px" viewBox="0 0 61 85" enable-background="new 0 0 61 85" xml:space="preserve">

    <defs>
        <style>
            @import url(https://fonts.googleapis.com/css?family=Roboto);
            text { font-family: 'Roboto', sans-serif; text-rendering: optimizeLegibility; }
        </style>
    </defs>

    <path fill="<?php echo $borderColor; ?>"
          d="M31.75,0C48.318,0,61,12.488,61,29.057V30c0,21.834-19.322,49-29.75,55H31C20.572,79,0,51.834,0,30v-0.943  C0,12.488,13.932,0,30.5,0C30.667,0,31.583,0,31.75,0z"></path>
    <path fill="<?php echo $backgroundColor; ?>"
          d="M31.688,2C47.428,2,59,13.989,59,29.729v0.896C59,51.367,41.119,77,31.212,83h-0.237  C21.069,77,2,51.367,2,30.625v-0.896C2,13.989,14.76,2,30.5,2C30.659,2,31.529,2,31.688,2z"></path>
    <text  x="50%" y="50%" dy=".13em" font-size="<?php echo $fontSize; ?>" font-weight="bold" text-anchor="middle"
           fill="<?php echo $fontColor; ?>"><?php echo $text; ?></text>
</svg>