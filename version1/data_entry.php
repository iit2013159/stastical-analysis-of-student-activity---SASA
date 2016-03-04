<?php
mysql_connect("localhost","root","acb132")or die("cannot connect");
mysql_query("use project");
//$roll_no=$_POST['roll_no'];
//$gate_type=$_POST['gate_type'];
//$gate_id=$_POST['gate_id'];
//$roll_no="iit2013200";
//$gate_type="regional_gate";
//$gate_id=3;





function getrandomroll() {
  	$result=mysql_fetch_array(mysql_query("select stu_roll_no from Student order by rand() limit 0,1"));
  	return $result[0];
    }


$random_roll = getrandomroll();
echo $random_roll."<br>";
//$sql1 = "select stu_roll_no from Student where stu_roll_no = '$random_roll'";

	
	$roll_no = $random_roll;

	$gate_type = rand(0,1);
	if($gate_type==0) {
		$gate_type="regional_gate";
		$gate_id = rand(2,6);
	}
	else {
		$gate_type="building_gate";
		$gate_id = rand(1,18);
	}//







    
$result=mysql_query("select * from Student where stu_roll_no='$roll_no'");
if(!$result){
		echo "there is no such student in database, entry denied ".mysql_error();
		exit();
}

//student exists,now proceed further
$row=mysql_fetch_array($result);
echo "student exists $row[stu_roll_no]<br>\n";
$log=mysql_query("insert into log (stu_roll_no,gate_id,gate_type) values ('$roll_no',$gate_id,'$gate_type')");
if(!$log) echo "log is not updated\n";
$current_status=mysql_query("select max(transaction_id) from log where stu_roll_no='$roll_no'");
if(!$current_status) echo "wrong query imposed\n";
$current_status=mysql_fetch_array($current_status);
echo $current_status[0]."\n";
$dat=mysql_fetch_array(mysql_query("select day(curdate())"));
$dat=$dat[0];
/*$in_out=mysql_fetch_arry(mysql_query("select building_id from current_status where stu_roll_no='$roll_no'"));
$in_out=$in_out[0];
if($in_out!=0){               //student is already inside building
	if($gate_type=='building_gate'){
		$gate_id1=mysql_fetch_array(mysql_array("select building_id from building where gate_id='$gate_id'"));
		$gate_id1=$gate_id1[0];
	}
	else{
		$gate_id1=mysql_fetch_array(mysql_array("select building_id from building where gate_id='$gate_id'"));
		$gate_id1=$gate_id1[0];
	}
	if($in_out!=$gate_id1){                 //both building_id are not equal so student is trnsacting on another gate  without exiting current building
		$old=mysql_fetch_array(mysql_query("select transaction_id from current_status where stu_roll_no='$roll_no'"));
		$new=mysql_fetch_array(mysql_query("select max(transaction_id) from log where stu_roll_no='$roll_no'"));
		$old=$old[0];
		$new=$new[0];
		mysql_query("insert into error values ($new,$old)");
		mysql_query("update Student set forgery_attempt=forgery_attempt=1 where stu_roll_no='$roll_no");
		header('index1.html');

	}
else if()

	}
	*/


	if($gate_type=="regional_gate"){
		echo "regional gate<br>\n";
		$location=mysql_query("select * from regional_gate where gate_id=$gate_id");
		$old_status=mysql_fetch_array(mysql_query("select * from current_status where stu_roll_no='$roll_no'"));
		$old_region=$old_status['region_id'];
		$old_building=$old_status['building_id'];
		if($old_building==0){
			$old_transaction_id=$old_status['transaction_id'];
		//error 1 if student is transacting on gate which is not in current region
			//$old_region=mysql_fetch_array(mysql_query("select * from regional_gate where gate_id=$gate_id "));
			$old_status=mysql_fetch_array($location);
			$old_region_1=$old_status['region_id1'];
			$old_region_2=$old_status['region_id2'];
			$new=mysql_fetch_array(mysql_query("select max(transaction_id) from log where stu_roll_no='$roll_no'"));
			if($old_region!=$old_region_1 && $old_region!=$old_region_2){
				mysql_query("insert into error values ($new[0],$old_transaction_id,$dat,\"$roll_no tried to access  regional gate $gate_id while he was in region $old_status\")");
				echo "$roll_no tried to access  regional gate $gate_id while he was in region $old_status<br>";
				exit();
			}
		}
		else if($old_building!=0){             
			//student is transacting on regional gate without exiting building
			$old_transaction_id=$old_status['transaction_id'];
			$location1=mysql_fetch_array($location);
			//$old_region=mysql_fetch_array(mysql_query("select * from regional_gate where gate_id=$gate_id "));
			//$old_region_1=$old_region['region_id1'];
			//$old_region_2=$old_region['region_id2'];
			$new=mysql_fetch_array(mysql_query("select max(transaction_id) from log where stu_roll_no='$roll_no'"));
			//if($old_region!=$old_region1 && $old_region!=$old_region2){
			mysql_query("insert into error values ($new[0],$old_transaction_id,$dat,\"$roll_no tried to access $location1[3] while being in building $old_building\")");
			echo "$roll_no tried to access $location1[3] while being in building $old_building<br>";
			exit();
			
		}
	//decrease number of students in old location
		$location=mysql_query("select * from regional_gate where gate_id=$gate_id");
		$location=mysql_fetch_array($location);
		echo $location[0];
		$current=mysql_fetch_array(mysql_query("select region_id from current_status where stu_roll_no='$roll_no'"));
		if($current[0]==$location[1])
			{
			if(!mysql_query("update region set r_number_of_students=r_number_of_students-1 where region_id=$location[1]")) echo "number of students not decremented\n";
			//increase number of students in new location
			if(!mysql_query("update region set r_number_of_students=r_number_of_students+1 where region_id=$location[2]")) echo "number of students not incremented\n";
	//set current status of student
			if(!mysql_query("update current_status set region_id=$location[2],building_id=0,transaction_id=$current_status[0] where stu_roll_no='$roll_no'")) echo "status not updated\n";
		}
		else{
			if(!mysql_query("update region set r_number_of_students=r_number_of_students+1 where region_id=$location[1]")) echo "number of students not decremented\n";
			//increase number of students in new location
			if(!mysql_query("update region set r_number_of_students=r_number_of_students-1 where region_id=$location[2]")) echo "number of students not incremented\n";
			//set current status of student
			if(!mysql_query("update current_status set region_id=$location[1],building_id=0,transaction_id=$current_status[0] where stu_roll_no='$roll_no'")) echo "status not updated\n";
		}
	echo "all queries executed in regional transaction<br>";
}

else
	{
	echo "building gate<br>";
	$old_location=mysql_fetch_array(mysql_query("select * from current_status where stu_roll_no='$roll_no'"));
	$old_region=$old_location['region_id'];
	$old_building=$old_location['building_id'];
	$new_location=mysql_fetch_array(mysql_query("select building_id from building_gate where gate_id=$gate_id"));
	if($old_building==0){
		//raise error if student is transacting on a building which does not exist in his current region
		$new_region=mysql_fetch_array(mysql_query("select region_id from building where building_id=$new_location[0]"));
		if($new_region[0]!=$old_region){
			$old_transaction_id=$old_location['transaction_id'];
			$new=mysql_fetch_array(mysql_query("select max(transaction_id) from log where stu_roll_no='$roll_no'"));
			mysql_query("insert into error values ($new[0],$old_transaction_id,$dat,\"$roll_no transacting on building $new_location[0] which does not exist in region $old_region\")");
			echo "$roll_no transacting on building $new_location[0] which does not exist in region $old_region<br>";
			exit();
		}
	}
	else if($old_building!=$new_location[0]){
		//raise error if student is transacting on another building without leaving current one
		$old_transaction_id=$old_location['transaction_id'];
		$new=mysql_fetch_array(mysql_query("select max(transaction_id) from log where stu_roll_no='$roll_no'"));
		mysql_query("insert into error values ($new[0],$old_transaction_id,$dat,\"$roll_no trying to access $new_location[0] without leaving $old_building\")");
		echo "$roll_no trying to access $new_location[0] without leaving $old_building<br>";
		exit();
	}
	//decrease number of students in old location
	$old_location=mysql_query("select building_id from current_status where stu_roll_no='$roll_no'");
	$old_location=mysql_fetch_array($old_location);
	echo $new_location[0];
	echo "<br>";
	echo $old_location['building_id'];
	//if student is exiting the gate
	if($new_location['building_id']==$old_location['building_id']){
		mysql_query("update building set b_number_of_students=b_number_of_students-1 where building_id=$old_location[building_id]");
		mysql_query("update current_status set building_id=0,transaction_id=$current_status[0] where stu_roll_no='$roll_no'");
		
	}
	else{
		mysql_query("update building set b_number_of_students=b_number_of_students+1 where building_id=$new_location[building_id]");
		mysql_query("update current_status set building_id=$new_location[0],transaction_id=$current_status[0] where stu_roll_no='$roll_no'");
	}
	
	echo "all queries updated succesfully\n";
}

?>