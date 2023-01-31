<?php
include '../../model/db_connect.php';
	extract($_POST);
	$data= array();
	$qry = $conn->query("SELECT * from attendance where employeeemail ='$employeeemail' ");
	if($qry->num_rows > 0){
		$emp = $qry->fetch_array();
		$save_log= $conn->query("INSERT INTO attendance (logtype,employeeemail) values('$type','".$emp['id']."')");
		$employee = ucwords($emp['employeename']);
		if($type == 1){
			$log = ' Time in this morning';
		}elseif($type == 2){
			$log = ' Time out this evening';
		}
		if($save_log){
				$data['status'] = 1;
				$data['msg'] = $employee .', your '.$log.' has been recorded. <br/>' ;
			}
	}else{
		$data['status'] = 2;
		$data['msg'] = 'Unknown Employee Email';
	}
	echo json_encode($data);
	$conn->close();
