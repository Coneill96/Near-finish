<?php 
		//Allow the config
		define('__CONFIG__', true);
		//Require the config
		require_once "inc/config.php"; 

		Page::ForceDashboard();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>EC1 Form login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta name="robots" context="follow">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />

 </head>

 <body>
 	<div class="uk-section uk-container">
 		<div class="container2">
    	<img src="images/UUJlogo.jpg" alt="Jordanstown logo">
 		
    	<div class="row">
   		 <div class="col-sm-12">
      		<h1 class="goldline">Faculty of Computing and engineering online EC1 Form submission</h1>
    		</div>
  			</div>
 		<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-" uk-grid>
 			<form class="uk-form-stacked js-login">

 				<h2>Login</h2>
	    <div class="uk-margin">
	    	<span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="right" title="This username is the student B00 number that is assigned to you in your first year of attending Ulster University."></span>
	        <label class="uk-form-label login" for="form-stacked-text">Username </label>
	        <div class="uk-form-controls">
	            <input class="uk-input" id="form-stacked-text2"  required="required" type="text" placeholder="Please enter student number">
	        </div>
	    </div>

	    <div class="uk-margin">
	        <label class="uk-form-label login" for="form-stacked-text">Password</label>
	        <div class="uk-form-controls">
	            <input class="uk-input" id="form-stacked-text" required="required" type="password" placeholder="Password">
	        </div>
	    </div>

	    <div class="uk-margin uk-alert uk-alert-danger js-error" style='display: none;'></div>

	    <div class="uk-margin">
	    	<button class="uk-button uk-button-default" type="submit">Login</button>
	   	</div>
			</form>
 	</div>


<?php require_once "inc/footer.php"; ?>
 
 </body>