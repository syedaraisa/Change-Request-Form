<?php

require 'connect.php';
include_once 'helper.php';

//dump($_POST);

$number = $_POST['number'];
$date = $_POST['date'];
$projectName = $_POST['projectName'];
$preparedBy = $_POST['preparedBy'];
$cr_initiator = $_POST['cr_initiator'];
//$typeofchange = serialize (array("report","database","conversion","enhancement","workflow","form"));
$typeOfChange = serialize ($_POST['change']);
//echo $typeOfChange;
//$report = isset($_POST['report'])?$_POST['report']:'';
//$database = isset($_POST['database'])?$_POST['database']:'';
//$conversion = isset($_POST['conversion '])?$_POST['conversion ']:'';
//$enhancement = isset($_POST['enhancement'])?$_POST['enhancement']:'';
//$workflow = isset($_POST['workflow'])?$_POST['workflow']:'';
//$form = isset($_POST['form'])?$_POST['form']:'';
$impactedSBU = $_POST['impactedSBU'];

//$requestPriority = $_POST['requestPriority'];

$requestPriority = serialize ($_POST['req']);
//echo $requestPriority;
//$low = isset($_POST['low'])?$_POST['low']:'';
//$medium = isset($_POST['medium'])?$_POST['medium']:'';
//$high = isset($_POST['high'])?$_POST['high']:'';
$moduleImpacted = $_POST['moduleImpacted'];
$deliveryDate = (!empty($_POST['deliverydate']))? $_POST['deliverydate'].' 00:00:00':'';
$responsible = $_POST['responsible'];
$accountable = $_POST['accountable'];
$changeDetails = $_POST['changeDetails'];
$processImpact = $_POST['processImpact'];
$userImpact = $_POST['userImpact'];
$financialImpact = $_POST['financialImpact'];
$impactDetails = $_POST['impactDetails'];
$stakeholderName = $_POST['stakeholderName'];
$signatureDate = $_POST['signatureDate'];
$analysisHour = $_POST['analysisHour'];
$analysisBDT = $_POST['analysisBDT'];
$developmentHour = $_POST['developmentHour'];
$developmentBDT = $_POST['developmentBDT'];
$qcHour = $_POST['qcHour'];
$qcBDT = $_POST['qcBDT'];
$totalHour = $_POST['totalHour'];
$totalBDT = $_POST['totalBDT'];
$recommended = serialize ($_POST['rec']);
//echo $recommended;
$acc = $_POST['acc'];
$pmo = $_POST['pmo'];
$cio = $_POST['cio'];
$management = $_POST['management'];
$theChange = serialize ($_POST['cha']);
//echo $theChange;
$remarks = $_POST['remarks'];
$keyStakeholder = $_POST['keyStakeholder'];
$sigDate = $_POST['sigDate'];

//Database connection
// $conn = new mysqli('localhost', 'root', '', 'change_request_project');
// if($conn->connect_error){
	// die('connection Failed :'.$conn->connect_error);
// }else{
	// $stmt = $conn->prepare("insert into request_form(number,date,projectName,preparedBy,cr_initiator,typeofchange,impactedSBU,requestPriority,moduleImpacted,deliverydate,responsible,accountable,changeDetails) values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
	// $stmt->bind_param("issssssssssss",$number,$date,$projectName,$preparedBy,$cr_initiator,$typeofchange,$impactedSBU,$requestPriority,$moduleImpacted,$deliverydate,$responsible,$accountable,$changeDetails);
	
	//$stmt = $conn->prepare("insert into request_form(number,date,projectName,preparedBy,cr_initiator,typeofchange,impactedSBU,requestPriority,moduleImpacted,deliverydate) values(?,?,?,?,?,?,?,?,?,?)");
	//$stmt->bind_param("issssssss",$number,$date,$projectName,$preparedBy,$cr_initiator,$typeofchange,$impactedSBU,$requestPriority,$moduleImpacted,$deliverydate);
	//$stmt = $conn->prepare("insert into request_form(number,date,projectName,preparedBy,cr_initiator,typeofchange,impactedSBU,requestPriority,moduleImpacted,deliverydate,responsible,accountable) values(?,?,?,?,?,?,?,?,?,?,?,?)");
	//$stmt->bind_param("isssssssssss",$number,$date,$projectName,$preparedBy,$cr_initiator,$typeofchange,$impactedSBU,$requestPriority,$moduleImpacted,$deliverydate,$responsible,$accountable);
	
	// $stmt->execute();
	// echo "Change request Successfully...";
	// $stmt->close();
// }


  /*$sql = "INSERT 
		INTO `request_form` (
			`number`, 
			`date`, 
			`projectName`, 
			`preparedBy`, 
			`cr_initiator`, 
			`typeOfChange`, 
			`impactedSBU`, 
			`requestPriority`, 
			`moduleImpacted`, 
			`deliveryDate`, 
			`responsible`, 
			`accountable`, 
			`changeDetails`,
			`processImpact`,
			`userImpact`,
			`financialImpact`,
			`impactDetails`,
			`stakeholderName`,
			`signatureDate`,
			`analysisHour`,
			`analysisBDT`,
			`developmentHour`,
			`developmentBDT`,
			`qcHour`,
			`qcBDT`,
			`totalHour`,
			`totalBDT`,
			`recommended`,
			`acc`,
			`pmo`,
			`cio`,
			`management`,
			`theChange`,
			`remarks`,
			`keyStakeholder`,
			`sigDate`,
			) 
		VALUES (
			'$number',
			'$date',
			'$projectName',
			'$preparedBy',
			'$cr_initiator',
			'{$typeOfChange}',
			'$impactedSBU',
			'{$requestPriority}',
			'$moduleImpacted',
			'$deliveryDate',
			'$responsible',
			'$accountable',
			'$changeDetails',
			'$processImpact',
			'$userImpact',
			'$financialImpact',
			'$impactDetails',
			'$stakeholderName',
			'$signatureDate',
			'$analysisHour',
			'$analysisBDT',
			'$developmentHour',
			'$developmentBDT',
			'$qcHour',
			'$qcBDT',
			'$totalHour',
			'$totalBDT',
			'{$recommended}',
			'$acc',
			'$pmo',
			'$cio',
			'$management',
			'{$theChange}',
			'$remarks',
			'$keyStakeholder',
			'$sigDate',

		)";*/
		 $sql = '
		
		INSERT INTO `request_form` ( `number`, `date`, `projectName`, `preparedBy`, `cr_initiator`, `typeOfChange`, `impactedSBU`, `requestPriority`, `moduleImpacted`, `deliveryDate`, `responsible`, `accountable`, `changeDetails`, `processImpact`, `userImpact`, `financialImpact`, `impactDetails`, `stakeholderName`, `signatureDate`, `analysisHour`, `analysisBDT`, `developmentHour`, `developmentBDT`, `qcHour`, `qcBDT`, `totalHour`, `totalBDT`, `recommended`, `acc`, `pmo`, `cio`, `management`, `theChange`, `remarks`, `keyStakeholder`, `sigDate`)
		VALUES ( 
		"'.$number.'", 
		"'.$date.'", 
		"'.$projectName.'", 
		"'.$preparedBy.'", 
		"'.$cr_initiator.'", 
		"'.base64_encode($typeOfChange).'", 
		"'.$impactedSBU.'", 
		"'.base64_encode($requestPriority).'", 
		"'.$moduleImpacted.'", 
		"'.$deliveryDate.'", 
		"'.$responsible.'", 
		"'.$accountable.'", 
		"'.$changeDetails.'", 
		"'.$processImpact.'", 
		"'.$userImpact.'", 
		"'.$financialImpact.'",
		"'.$impactDetails.'", 
		"'.$stakeholderName.'", 
		"'.$signatureDate.'", 
		"'.$analysisHour.'", 
		"'.$analysisBDT.'", 
		"'.$developmentHour.'", 
		"'.$developmentBDT.'", 
		"'.$qcHour.'", 
		"'.$qcBDT.'", 
		"'.$totalHour.'", 
		"'.$totalBDT.'", 
		"'.base64_encode($recommended).'", 
		"'.$acc.'", 
		"'.$pmo.'", 
		"'.$cio.'", 
		"'.$management.'", 
		"'.base64_encode($theChange).'", 
		"'.$remarks.'", 
		"'.$keyStakeholder.'", 
		"'.$sigDate.'")'
		;

if ($conn->query($sql) === TRUE) {
	echo "New record created Successfully!!!";
} else {
	//echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();