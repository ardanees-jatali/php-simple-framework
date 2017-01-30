<?php
if(!isset($BASE_PATH)) die("<b>Access Denied</b>");
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="alert alert-danger">
                <strong><?php
                    if(isset($_GET['message'])){
                echo $_GET['message'];
            }
            ?></strong>
            </div>
        </div>
    </div>
</div>