<?php
include 'connect.php';
require_once 'helper.php';
if(isset($_GET['updateid'])){
    $id=$_GET['updateid'];
     $sql="SELECT * FROM `request_form` where id=$id";
    $result= mysqli_query($conn,$sql);
    
    if($result)
      $row=  mysqli_fetch_assoc($result);
      //print_r($row);
     //dump($row);
}
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta http-equiv="refresh" content="5" > -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>CHANGE REQUEST FORM</title>
</head>
<body>
    <header>
        <div class="headerMain">
            <div class="leftTab">
                <img src="assets/img/logo-1.png">                
            </div>
            <div class="middleTab">
                <p class="BGTitle">BASHUNDHARA GROUP</p>
                <hr>
                <h3 class="CRTitle">CHANGE REQUEST FORM</h3>
            </div>
            <div class="rightTab">
                <img src="assets/img/logo-2.png">
            </div>
        </div>
        
        <div class="headerFooter">
            <p>BGIT Internal Document: Version 1.1.0</p>
        </div>
    </header>

	 <form action="update_que.php" method="post">
        <input type="hidden" id="updateid" name="updateid" value="<?=$id?>">
     <div class="fullForm">
        <div class="formPage">
            <div id="row" class="rowOne">
                <p class="paraOne">A. Change Request (CR) Number: </p>
                <p class="paraTwo">ACC_CR_ </p>
                <input type="number" name="number" id="number" value="<?=$row['number']?>">
                <p class="paraThree">CR Received Date: </p>
                 <input type="date" name="date" id="date" placeholder="mm/dd/yyyy" value="<?php echo date("Y-m-d",strtotime($row['date'])); ?>">
            </div>
            <div id="row" class="rowTwo">
                <p class="paraOne">Impacted Project Name & CR Title:</p>
                <input type="text" name="projectName" id="projectName" value="<?=$row['projectName']?>">
            </div>
            
            <div id="row" class="rowThree">
                <p class="paraOne">Prepared/Lead by:</p>
                <input type="text" name="preparedBy" id="preparedBy" value="<?=$row['preparedBy']?>">
            </div>
            <div id="row" class="rowFour">
                <p class="paraOne">CR Initiator:</p>
                <input type="text" name="cr_initiator" id="cr_initiator" value="<?=$row['cr_initiator']?>">
            </div>
            <div id="row" class="rowFive">
                 <div class="colOne" name="typeOfChange">Type of Change:</div>
                <div class="colTwo">
				<?php
				//dump($row['typeOfChange']);
				$typeOfChange= unserialize(base64_decode($row['typeOfChange']));
				//dump($typeOfChange); 
				?>
                    <input type="checkbox" name="change[]" value="report"
					<?php
					if (!empty($typeOfChange)):
						if(in_array("report",$typeOfChange))
						{
							echo "checked";
						}
					endif;
					?>
					>
                    <label for="report">Report</label><br>
                    <input type="checkbox" name="change[]" value="database"
					<?php
					if (!empty($typeOfChange)):
						if(in_array("database",$typeOfChange))
						{
							echo "checked";
						}
					endif;
					?>
					>
                    <label for="database">Database</label><br>
                    <input type="checkbox" name="change[]" value="conversion"
					<?php
					if (!empty($typeOfChange)):
						if(in_array("conversion",$typeOfChange))
						{
							echo "checked";
						}
					endif;
					?>
					>
                    <label for="conversion">Conversion/Migration</label><br>
                    <input type="checkbox" name="change[]" value="enhancement"
					<?php
					if (!empty($typeOfChange)):
						if(in_array("enhancement",$typeOfChange))
						{
							echo "checked";
						}
					endif;
					?>
					>
                    <label for="enhancement">Enhancement</label><br>
                    <input type="checkbox" name="change[]" value="workflow"
					<?php
					if (!empty($typeOfChange)):
						if(in_array("workflow",$typeOfChange))
						{
							echo "checked";
						}
					endif;
					?>
					>
                    <label for="workflow">Workflow</label><br>
                    <input type="checkbox" name="change[]" value="form"
					<?php
					if (!empty($typeOfChange)):
						if(in_array("form",$typeOfChange))
						{
							echo "checked";
						}
					endif;
					?>
					>
                    <label for="form">Form</label><br>
                </div>  
            </div>
            <div id="row" class="rowSix">
                <p class="paraOne">Impacted SBU(s) :</p>
                <input type="text" name="impactedSBU" id="impactedSBU" value="<?=$row['impactedSBU']?>">
            </div>
           <div id="row" class="rowSeven">
                <div class="colOne">Request Priority:</div>
                <div class="colTwo" name="requestPriority" >
				<?php
				//dump($row['requestPriority']);
				$requestPriority= unserialize(base64_decode($row['requestPriority']));
				//dump($requestPriority); 
				?>
                    <input type="checkbox" name="req[]" value="low"
					<?php
					if (!empty($requestPriority)):
						if(in_array("low",$requestPriority))
						{
							echo "checked";
						}
					endif;
					?>
					>
                    <label for="low">Low</label><br>
                     <input type="checkbox" name="req[]" value="medium"
					 <?php
					if (!empty($requestPriority)):
						if(in_array("medium",$requestPriority))
						{
							echo "checked";
						}
					endif;
					?>
					>
                    <label for="medium">Medium</label><br>
                     <input type="checkbox" name="req[]" value="high"
					 <?php
					if (!empty($requestPriority)):
						if(in_array("high",$requestPriority))
						{
							echo "checked";
						}
					endif;
					?>
					>
                    <label for="high">High/Bussiness Critical</label><br>
                </div>                             
            </div>
            <div id="row" class="rowEight">
                <p class="paraOne">Module (s) Impacted:</p>
                <input type="text" name="moduleImpacted" id="moduleImpacted" value="<?=$row['moduleImpacted']?>">
            </div>
            <div id="row" class="rowNine">
                <p class="paraOne">Expected Delivery Date for the CR:</p>
                <input type="date" name="deliveryDate" id="deliveryDate" placeholder="mm/dd/yyyy" value="<?php echo date("Y-m-d",strtotime($row['deliveryDate'])); ?>">
            </div>
            <div id="row" class="rowTen">
                <p class="paraOne">Responsible:</p>
                <input type="text" name="responsible" id="responsible" value="<?=$row['responsible']?>">
            </div>
            <div id="row" class="rowEleven">
                <p class="paraOne">Accountable:</p>
                <input type="text" name="accountable" id="accountable" value="<?=$row['accountable']?>">
            </div>
            <div id="row" class="row12">
                <div>
                    <p>Change Details:</p>
                     <textarea name="changeDetails" id="changeDetails" value=""><?=$row['changeDetails']?></textarea>
                </div>
            </div>
            <div id="row" class="row13">
                <div>
                    <p><b>Justification in-case of CR with “High / Business Critical” Priority:</b></p>
                </div>
                
                <div class="paraTwo">
                    <p>How many processes will be impacted: </p> 
                    <input type="text" name="processImpact" id="processImpact" value="<?=$row['processImpact']?>" style="width: 10pc; height: 10px; border: 1px solid black; margin-left: 10px; margin-right: 20px;">
                    <p>How many Users will be impacted:</p>
                    <input type="text" name="userImpact" id="userImpact" value="<?=$row['userImpact']?>" style="width: 12pc; height: 10px;border: 1px solid black; margin-left: 10px;">
                </div> 

                <div class="paraThree">
                    <p>How much will be financial impact in-case of not carrying this change:</p>
                    <input type="text" name="financialImpact" id="financialImpact" value="<?=$row['financialImpact']?>" style="width: 20pc; height: 10px;border: 1px solid black; margin-left: 10px;">
                </div>
                <div class="paraFour">
                    <p>Impact Details:</p>
                    <textarea name="impactDetails" id="impactDetails" value=""><?=$row['impactDetails']?></textarea>
                </div>

            </div>
            <div id="row" class="row14">
                <div class="firstPara">
                    <p><b> Change Request Approved by: </b></p> 
                </div>
                <div class="paraTwo">
                    <p >Stakeholder: Name:</p>
                    <input type="text" name="stakeholderName" id="stakeholderName" value="<?=$row['stakeholderName']?>" style="width: 30%; height: 10px; border-bottom: 2px dashed black; border-top: none; border-left: none; border-right: none; margin: 0px 10px 10px 10px; outline: none">
                    <p>Signature & Date:</p>
                    <input type="text" name="signatureDate" id="signatureDate" value="<?=$row['signatureDate']?>" style="width: 30%; height: 10px; border-bottom: 2px dashed black; border-top: none; border-left: none; border-right: none; margin: 0px 10px 10px 10px; outline: none">
                </div>
                               
            </div>
        </div>
        <div id="container" class="containerTwo">
            <div id="row" class="rowOne">
                <b>Effect on CR Cost:</b>
            </div>
            <div id="row" class="rowTwo">
                <div class="colOne"><p><b>Resource</b></p></div>
                <div class="colTwo"><p><b>Hours</b></p> </div>
                <div class="colThree"><p><b>BDT (If applicable)</b></p></div>
            </div>
            <div id="row" class="rowThree">
                <div class="colOne"><p>Analysis</p></div>
                <div class="colTwo"><input type="text" name="analysisHour" id="analysisHour" value="<?=$row['analysisHour']?>"></div>
                <div class="colThree"><input type="text" name="analysisBDT" id="analysisBDT" value="<?=$row['analysisBDT']?>"></div>
            </div>
            <div id="row" class="rowFour">
                <div class="colOne"><p>Development</p></div>
                <div class="colTwo"><input type="text" name="developmentHour" id="developmentHour" value="<?=$row['developmentHour']?>"></div>
                <div class="colThree"><input type="text" name="developmentBDT" id="developmentBDT" value="<?=$row['developmentBDT']?>"></div>
            </div>
            <div id="row" class="rowFive">
                <div class="colOne"><p>QC</p></div>
                <div class="colTwo"><input type="text" name="qcHour" id="qcHour" value="<?=$row['qcHour']?>"></div>
                <div class="colThree"><input type="text" name="qcBDT" id="qcBDT" value="<?=$row['qcBDT']?>"></div>
            </div>
            <div id="row" class="rowSix">
                <div class="colOne"><p><b>Total Net Change in Cost</b></p></div>
                <div class="colTwo"><input type="text" name="totalHour" id="totalHour" value="<?=$row['totalHour']?>"></div>
                <div class="colThree"><input type="text" name="totalBDT" id="totalBDT" value="<?=$row['totalBDT']?>"></div>
            </div>
        </div>
        <div id="container" class="containerThree">
            <div id="row" class="rowOne"><b>B. Approval Matrix </b></div>
            <div id="row" class="rowTwo">
                <div class="colOne">Change Request Recommended:</div>
                <div class="colTwo" name="recommended">
                <?php
                //dump($row['recommended']);
                $recommended= unserialize(base64_decode($row['recommended']));
                //dump($recommended); 
                ?>
                    <input type="radio" id="rec[]" name="rec[]" value="Yes"
                    <?php
                    if (!empty($recommended)):
                        if(in_array("Yes",$recommended))
                        {
                            echo "checked";
                        }
                    endif;
                    ?>
                    >
                    <label for="Yes">Yes</label><br>
                    <br>
                    <input type="radio" id="rec[]" name="rec[]" value="No"
                    <?php
                    if (!empty($recommended)):
                        if(in_array("No",$recommended))
                        {
                            echo "checked";
                        }
                    endif;
                    ?>
                    >
                    <label for="No">No</label><br>
                </div>  
            </div>
            <div id="row" class="rowThree">* Reason: For ensuring protect information leakage</div>
            <div id="row" class="rowFour">
                <div class="insideTb">
                    <div class="colOne">
                        <input type="text" id="acc" name="acc" value="<?=$row['acc']?>">
                        <p>Head of ACC, BGIT</p>
                    </div>
                    <div class="colTwo">
                        <input type="text" id="pmo" name="pmo" value="<?=$row['pmo']?>">
                        <p>Head of PMO, BGIT</p>
                    </div>
                    <div class="colThree">
                        <input type="text" id="cio" name="cio" value="<?=$row['cio']?>">
                        <p>CIO, BGIT</p>
                    </div>
                    <div class="colFour">
                        <input type="text" id="management" name="management" value="<?=$row['management']?>">
                        <p>Management, BG</p>
                    </div>
                </div>
                <br>
                <div>
                    ** CIO & BG Management approval is mandatory for High request priority
                </div>
            </div>
        </div>
        <div id="container" class="containerFour">
            <div id="row" class="rowOne">
               <b> C. CR Closure Note</b>
            </div>
            <div class="rowTwo">
                <p>The Change is-</p>
                <div class="checkBox" name="theChange">
                <?php
                //dump($row['theChange']);
                $theChange= unserialize(base64_decode($row['theChange']));
                //dump($theChange); 
                ?>
                    <input type="radio" id="cha[]" name="cha[]" value="implemented"
                    <?php
                    if (!empty($theChange)):
                        if(in_array("implemented",$theChange))
                        {
                            echo "checked";
                        }
                    endif;
                    ?>
                    >
                    <label for="implemented">implemented, completed & archived</label><br>
                    <br>
                    <input type="radio" id="cha[]" name="cha[]" value="notImplemented"
                     <?php
                    if (!empty($theChange)):
                        if(in_array("notImplemented",$theChange))
                        {
                            echo "checked";
                        }
                    endif;
                    ?>
                    >
                    <label for="notImplemented">not implemented</label><br>
                </div>                               
            </div>
            <div id="row" class="rowThree">
                <div>
                    <p>Remarks:</p>
                    <textarea name="remarks" id="remarks" value=""><?=$row['remarks']?></textarea>
                </div>
            </div>
            <!-- <div id="row" class="rowThree">
                <textarea>Remarks:</textarea>
            </div> -->
            <div id="row" class="rowFour">
                <p >Key Stakeholder:</p>
                <input type="text" name="keyStakeholder" id="keyStakeholder" value="<?=$row['keyStakeholder']?>" style="width: 30%; height: 10px; border-bottom: 2px dashed black; border-top: none; border-left: none; border-right: none; margin: 0px 10px 10px 10px; outline: none">
                <p>’Signature & Date:</p>
                <input type="text" name="sigDate" id="sigDate" value="<?=$row['sigDate']?>" style="width: 30%; height: 10px; border-bottom: 2px dashed black; border-top: none; border-left: none; border-right: none; margin: 0px 10px 10px 10px;outline: none">
            </div>
        </div>
        <div class="button">
            <button type="reset" name="reset" id="reset">Reset</button>
            <button type="submit" name="submit" id="submit">Update</button>
            <button onclick="myfun()">Print</button>
            <script>
              function myfun() {
                window.print();
              }  
            </script>
        </div>
    </div>
	</form>
</body>
</html>