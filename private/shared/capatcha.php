<!--<div class="g-recaptcha" data-sitekey="6LcJjDgUAAAAAKF5QQbpz2E-nIuWa98tTv0i92mC"></div>
                <noscript>
  <div>
    <div style="width: 302px; height: 422px; position: relative;">
      <div style="width: 302px; height: 422px; position: absolute;">
        <iframe src="https://www.google.com/recaptcha/api/fallback?k=6LcJjDgUAAAAAKF5QQbpz2E-nIuWa98tTv0i92mC"
                frameborder="0" scrolling="no"
                style="width: 302px; height:422px; border-style: none;">
        </iframe>
      </div>
    </div>
    <div style="width: 300px; height: 60px; border-style: none;
                   bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px;
                   background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
      <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                   class="g-recaptcha-response"
                   style="width: 250px; height: 40px; border: 1px solid #c1c1c1;
                          margin: 10px 25px; padding: 0px; resize: none;" >
      </textarea>
    </div>
  </div>
</noscript>-->


<?php

$_SESSION['count'] = time();
$image;
?>

<?php
$flag = 5;
if (isset($_POST["flag"])) {
    $input = $_POST["input"];
    $flag = $_POST["flag"];
}
if ($flag == 1) {
    if ($input == $_SESSION['captcha_string']) {
        ?>

        <div >
            <h1>Your answer is correct!</h1>

            <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="submit" value="refresh the page">
            </form>
        </div>

    <?php
    } else {
        ?>

        <div >
            <h1>Your answer is incorrect!<br>please try again </h1>
        </div>

        <?php
        create_image();
        display();
    }
} else {
    create_image();
    display();
}
function display()
{
    ?>

    <div >
        <h3>TYPE THE TEXT YOU SEE IN THE IMAGE</h3>
        <b>This is just to check if you are a robot</b>

        <div style="width: 300px;height: 50px;">
            <img src="image<?php echo $_SESSION['count'] ?>.png">
        </div>
        <!--<form action=" <?php // echo $_SERVER['PHP_SELF']; ?>" method="POST" style="display: inline;">-->
            <input type="text" name="input" style="width: 300px;"/>
            <input type="hidden" name="flag" value="1"/>
            <!--<input type="submit" value="" name="submit"/>-->
          <!--<button type="submit" value="" name="submit" style="width: 50px;padding: 10px;"><i class="fa fa-save"></i></button>-->
            
        <!--</form>-->

        <!--<form action=" <?php // echo $_SERVER['PHP_SELF']; ?>" method="POST" style="display: inline;border: none;">-->
            <!--<input type="submit"  value="">-->
            <!--<button type="submit" value="Submit" style="width: 50px;padding: 10px;"><i class="fa fa-refresh"></i></button>-->
        <!--</form>-->
    </div>

<?php
}
function  create_image()
{
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
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $len = strlen($letters);
    $letter = $letters[rand(0, $len - 1)];
    $text_color = imagecolorallocate($image, 0, 0, 0);
    $word = "";
    for ($i = 0; $i < 6; $i++) {
        $letter = $letters[rand(0, $len - 1)];
        imagestring($image, 7, 5 + ($i * 30), 20, $letter, $text_color);
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