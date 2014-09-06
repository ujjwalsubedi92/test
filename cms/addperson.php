<?php
	include("../includes/connect.php");
	$ab=1;
	$checkboxignoretext="xyzzywhatisthiseven2014";
	$page=$_POST['page'];
	$house=$_POST['house'];
	$tole=$_POST['tole'];
	$phone=$_POST['phone'];
	$collector=$_POST['collector'];
	$giver=$_POST['giver'];
	
	
	while($ab <=  25){
		$sn=$_POST['sn'.$ab];
		$id=$_POST['id'.$ab];
		$name=$_POST['name'.$ab];
		$dob=$_POST['dob'.$ab];
		$age=$_POST['age'.$ab];
		$mom=$_POST['mom'.$ab];
		$dad=$_POST['dad'.$ab];
		$relation=$_POST['relation'.$ab];
		$sex=$_POST['sex'.$ab];
		$religion=$_POST['religion'.$ab];
		$maritalstatus=$_POST['maritalstatus'.$ab];
		$marriedto=$_POST['marriedto'.$ab];
		$bm=$_POST['bm'.$ab];
		$bf=$_POST['bf'.$ab];
		$b3=$_POST['b3'.$ab];
		$am=$_POST['am'.$ab];
		$af=$_POST['af'.$ab];
		$a3=$_POST['a3'.$ab];
		$level=$_POST['level'.$ab];
		$subject=$_POST['subject'.$ab];
		$foreignstudy=$_POST['foreignstudy'.$ab];
		$foreignwork=$_POST['foreignwork'.$ab];
		$country=$_POST['country'.$ab];
		$reason=$_POST['reason'.$ab];
		$ancient=$_POST['ancient'.$ab];
		$modern=$_POST['modern'.$ab];
		$blood=$_POST['blood'.$ab];
		$land=$_POST['land'.$ab];
		$comment=$_POST['comment'.$ab];
		
		
		//checkbox stuff
		$skill=$_POST['skill'.$ab];
		$count=count($skill);
		
		for($i=0; $i < $count; $i++){
			$s=$skill[$i];
			if ($s != $checkboxignoretext){
			
				$sql_skill = "insert into skill (skill,personid) values('$s','$id');";
				mysql_query($sql_skill) or die("Error in SQL: ".mysql_error());
					//put query here???
			}
		}
		
		$disease=$_POST['disease'.$ab];
		for($i=0; $i < count($disease); $i++){
			$d=$disease[$i];
			if ($d != $checkboxignoretext){
			
				$sql_skill = "insert into disease (disease,personid) values('$d','$id');";
				mysql_query($sql_skill) or die("Error in SQL: ".mysql_error());
					//put query here???
			}
		}
		
		$sport=$_POST['sport'.$ab];
		for($i=0; $i < count($sport); $i++){
			$s=$sport[$i];
			if ($s != $checkboxignoretext){
			
				$sql_skill = "insert into sport (sport,personid) values('$s','$id');";
				mysql_query($sql_skill) or die("Error in SQL: ".mysql_error());
					//put query here???
			}
		}
		
		$tele=$_POST['tele'.$ab];
		for($i=0; $i < count($tele); $i++){
		$t=$tele[$i];
			if ($t != $checkboxignoretext){
			
				$sql_skill = "insert into telecom (telecom,personid) values('$t','$id');";
				mysql_query($sql_skill) or die("Error in SQL: ".mysql_error());
					//put query here???
			}
		}
		
		$trans=$_POST['trans'.$ab];
		for($i=0; $i < count($trans); $i++){
		$t=$trans[$i];
			if ($t != $checkboxignoretext){
			
				$sql_skill = "insert into transportation (transportation,personid) values('$t','$id');";
				mysql_query($sql_skill) or die("Error in SQL: ".mysql_error());
					//put query here???
			}
		}
		
		
		$cook=$_POST['cook'.$ab];
		for($i=0; $i < count($cook); $i++){
			$c=$cook[$i];
			if ($c != $checkboxignoretext){
			
				$sql_skill = "insert into cookingstuff (cookingstuff,personid) values('$c','$id');";
				mysql_query($sql_skill) or die("Error in SQL: ".mysql_error());
					//put query here???
			}
		}
		
		$addict=$_POST['addict'.$ab];
		for($i=0; $i < count($addict); $i++){
		$a=$addict[$i];
			if ($a != $checkboxignoretext){
			
				$sql_skill = "insert into addiction (addiction,personid) values('$a','$id');";
				mysql_query($sql_skill) or die("Error in SQL: ".mysql_error());
					//put query here???
			}
		}
		
		
		
		//end of check box stuff
	
	
	
		if($sn!=0){
		echo "yolo";
			$sql_person = "insert into person (personid,sn,name,dob,age,momname,dadname,relation,gender,religion,
			marital_status,marital_caste,
			child_born_male,child_born_female,child_born_intersex,child_alive_male,child_alive_female,child_alive_intersex,
			education_level,education_subject,abroad_study,abroad_work,abroad_country,inabilityreason,
			work_ancient,work_modern,land,bloodgroup,kaifiyat,pageno) 
			values('$id','$sn','$name','$dob','$age','$mom','$dad','$relation','$sex','$religion',
			'$maritalstatus','$marriedto',
			'$bm','$bf','$b3','$am','$af','$a3',
			'$level','$subject','$foreignstudy','$foreignwork','$country','$reason',
			'$ancient','$modern','$land','$blood','$comment',$page);";
			mysql_query($sql_person) or die("Error in SQL: ".mysql_error());
			
			echo "Row $ab has been successfully added.";
			echo "<br> ";
		}
			$ab=$ab+1;
	}
	
		$sql = "insert into page (pageno,houseno,toleid,phone,collector,giver) values('$page','$house','$tole','$phone','$collector','$giver');";
		mysql_query($sql) or die("Error in SQL: ".mysql_error());
	
?>
<a href="javascript:history.back();">Go back</a>