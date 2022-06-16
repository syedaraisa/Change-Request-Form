<?php
require 'connect.php';
include_once 'helper.php';

if(isset($_POST['updateid'])){
//dump($_POST);
//die;

$id = $_POST['updateid'];
$number = $_POST['number'];
$date = $_POST['date'];
$projectName = $_POST['projectName'];
$preparedBy = $_POST['preparedBy'];
$cr_initiator = $_POST['cr_initiator'];
$typeofchange = (!empty($_POST['change']))? base64_encode(serialize($_POST['change'])):"";
$impactedSBU = $_POST['impactedSBU'];
$requestPriority = (!empty($_POST['req']))? base64_encode(serialize($_POST['req'])):"";
$moduleImpacted = $_POST['moduleImpacted'];
$deliveryDate = (!empty($_POST['deliveryDate']))? $_POST['deliveryDate'].' 00:00:00':'';
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
$recommended = (!empty($_POST['rec']))? base64_encode(serialize($_POST['rec'])):"";
$acc = $_POST['acc'];
$pmo = $_POST['pmo'];
$cio = $_POST['cio'];
$management = $_POST['management'];
$theChange = (!empty($_POST['cha']))? base64_encode(serialize($_POST['cha'])):"";
$remarks = $_POST['remarks'];
$keyStakeholder = $_POST['keyStakeholder'];
$sigDate = $_POST['sigDate'];

//dump($_POST);
//die;


//Database connection

echo $sql = "UPDATE `request_form` SET 
	`number` = ".$number.",
	`date`	= '".$date."',
	`projectName` = '".$projectName."',
	`preparedBy` = '".$preparedBy."',
	`cr_initiator` = '".$cr_initiator."',
	`typeOfChange` = '".$typeofchange."',
	`impactedSBU` = '".$impactedSBU."',
	`requestPriority` = '".$requestPriority."',
	`moduleImpacted` = '".$moduleImpacted."',
	`deliveryDate` = '".$deliveryDate."',
	`responsible` = '".$responsible."',
	`accountable` = '".$accountable."',
	`changeDetails` = '".$changeDetails."',
	`processImpact` = '".$processImpact."',
	`userImpact` = '".$userImpact."',
	`financialImpact` = '".$financialImpact."',
	`impactDetails` = '".$impactDetails."',
	`stakeholderName` = '".$stakeholderName."',
	`signatureDate` = '".$signatureDate."',
	`analysisHour` = '".$analysisHour."',
	`analysisBDT` = '".$analysisBDT."',
	`developmentHour` = '".$developmentHour."',
	`developmentBDT` = '".$developmentBDT."',
	`qcHour` = '".$qcHour."',
	`qcBDT` = '".$qcBDT."',
	`totalHour` = '".$totalHour."',
	`totalBDT` = '".$totalBDT."',
	`recommended` = '".$recommended."',
	`acc` = '".$acc."',
	`pmo` = '".$pmo."',
	`cio` = '".$cio."',
	`management` = '".$management."',
	`theChange` = '".$theChange."',
	`remarks` = '".$remarks."',
	`keyStakeholder` = '".$keyStakeholder."',
	`sigDate` = '".$sigDate."'

 WHERE `id` = $id";
 
	
 
 if ($conn->query($sql) === TRUE) {
	echo "New record updated successfully";
	header('location:list.php');
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}else{
	echo "No update";
}
