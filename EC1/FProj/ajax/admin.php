<?php 
		//Allow the config
		$connect = mysqli_connect("localhost", "root", "", "project");

		

		$query = "SELECT user_id, Username, email, first_name, surname FROM users";

		$result = mysqli_query($connect, $query);

		$json_array = array();

		while($row = mysqli_fetch_assoc($result))
		{
			$json_array[] = $row;
		}

		echo json_encode($json_array);
		 $mysqli->query("UPDATE requests SET Username='" . $input['Username'] . "', submission_date='" . $input['submission_date'] . "', d_o_c='" . $input['d_o_c'] . "', d_a_t='" . $input['d_a_t'] . "', d_a_f='" . $input['d_a_f'] . "', evidence='" . $input['evidence'] . "', statement='" . $input['statement'] . "', ass_name='" . $input['ass_name'] . "', due_date='" . $input['due_date'] . "', preferred_outcome='" . $input['preferred_outcome'] . "', status='" . $input['status'] . "', WHERE request_id=20");

		






		
	?>