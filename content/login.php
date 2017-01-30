<?php
if(!isset($BASE_PATH)) die("<b>Access Denied</b>");
?>
<div class="container">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4" style="margin-top:25%;">
	<form method="POST" action="<?php echo $BASE_URL;
?>/login.php">
		<?php
			if(isset($_GET['message'])){
	echo "<b style='color:red;'>".str_replace("+","",$_GET['message'])."</b>";
}
?>
		<fieldset>
			<legend>Dashboard Login</legend>
			<label class="" for="username">Username </label><br>
			<input class="form-control"  type="text" name="username" required="" /><br>
			<label class=""  for="password">Password </label><br>
			<input class="form-control"  type="password" name="password" required="" /><br>
			<input class="form-control btn btn-success"  type="submit" value="Login"/>
		</fieldset>
	</form>
	</div>
	</div>
</div>