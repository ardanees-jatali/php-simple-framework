<?php
if(!isset($BASE_PATH)) die("<b>Access Denied</b>");

require_once "common.php";
?>

<div class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://localhost/hunzashop/">
          	<img src="http://localhost/hunzashop/img/cart.png" class="pull-left">
            <span class="pull-right">HunzaShop</span>
            <span class="clearfix"></span>
		  		</a>
		  		
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          
          <ul class="nav navbar-nav navbar-right">
            <li class="">
              <a href="<?php echo $BASE_URL; ?>"><i class="fa fa-home"></i> Home</a>
            </li>
            <li>
              <a href="<?php echo $BASE_URL; ?>?page=store"><i class="fa fa-shopping-cart"></i> Store</a>
            </li>
            <li>
              <a href="<?php echo $BASE_URL; ?>?page=about"><i class="fa fa-info"></i> About</a>
            </li>
            <li>
              <a href="<?php echo $BASE_URL; ?>?page=contact"><i class="fa fa-phone"></i> Contact</a>
            </li>
             <li>
              <a href="<?php echo $BASE_URL; ?>?page=login"><i class="fa fa-phone"></i> Login</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
