<?php
$_SESSION['count'] = time();
$image;
create_image();
display();
?>

<?php
function display() {
    ?>

    <div >
        <h4>TYPE THE TEXT YOU SEE IN THE IMAGE</h4>
        <!--<b>This is just to check if you are a robot</b>-->

        <div style="width: 300px;height: 50px;padding-bottom: 60px;">
            <img src="image<?php echo $_SESSION['count'] ?>.png">
        </div>
        <!--<form action=" <?php // echo $_SERVER['PHP_SELF'];   ?>" method="POST" style="display: inline;">-->
        <input type="text" name="input" style="width: 300px;color: black"/>
        <input type="hidden" name="flag" value="1" style="display: inline;"/>
        <br>
        <br>
    </div>

    <?php
}

function create_image() {
    global $image;
    $image = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($image, 255, 255, 255);
    $text_color = imagecolorallocate($image, 0, 255, 255);
    $line_color = imagecolorallocate($image, 64, 64, 64);
    $pixel_color = imagecolorallocate($image, 0, 0, 255);
    imagefilledrectangle($image, 0, 0, 200, 50, $background_color);
    for ($i = 0; $i < 3; $i++) {
        imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);
    }
    for ($i = 0; $i < 1000; $i++) {
        imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);
    }
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $len = strlen($letters);
    $letter = $letters[rand(0, $len - 1)];
    $text_color = imagecolorallocate($image, 0, 0, 0);
    $word = "";
    for ($i = 0; $i < 6; $i++) {
        $letter = $letters[rand(0, $len - 1)];
        imagestring($image, rand(7,50), 5 + ($i * 30), 5+(rand(0, 20)), $letter, $text_color);
        $word .= $letter;
    }
    $_SESSION['captcha_string'] = $word;
    $images = glob("*.png");
    foreach ($images as $image_to_delete) {
        @unlink($image_to_delete);
    }
    imagepng($image, "image" . $_SESSION['count'] . ".png");
}


?>