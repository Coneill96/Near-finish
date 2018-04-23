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
			<img src="images/UUJlogo.jpg" alt="Jordanstown logo">
  		<h2 id="pm_header">UUJ Extenuating Circumstance Panel members</h2>
		</div>

		<?php require_once "inc/footer.php"; ?>
		<div class="row">
   		 <div class="col-sm-2"></div>
    	<div class="col-sm-8">
    		<div class="well">Extenuating Circumstances Submissions</div>
    		<div class="newContainer">
    			<div class="container">
          <h2></h2>
          <div class="uk-margin">
        <div class="uk-form-controls" placeholder="Details">
            <select class="uk-select d_o_c" id="details_of_claim">
                <option>Acute illness or injury</option>
                <option>Extended illnes or injury(more than 5 days)</option>
                <option>Acute illness of other person</option>
                <option>Bereavement</option>
                <option>Significant domestic and/or personal problems</option>
                <option>Court appearance</option>
                <option>Unforseen representation of country/university</option>
                <option>Active excercise of citizenship</option>
                <option>Transport Issues</option>
                <option>Victim of criminal activity</option>
                <option>Other(Specify below)</option>
            </select>
        </div>
    </div>
                      
          <table class="table">
            <thead>
              <tr>
                <th>Student Name</th>
                <th>Username</th>
                <th>Request</th>
                <th>Assessment</th>
                <th>Reason for request</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
                <td>john@example.com</td>
              </tr>
            </tbody>
          </table>
        </div>
    		</div>

    	</div>
    	<div class="col-sm-2"></div>

	

	</body>
</html>