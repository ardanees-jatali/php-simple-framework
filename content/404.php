<?php
if(!isset($BASE_PATH)) die("<b>Access Denied</b>");
?>

<div class="container">
    <div class="alert alert-danger">
        <h1>404 Page Not Found!</h1>
        <p>Sorry i cannot find the page you are trying to access.<br>
            <a href="<?php echo $BASE_URL ;?>"> GO TO HOME </a><br>
            <?php
            $helper->prettyArray($_SERVER);
            ?>
        </p>
    </div>
</div>