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

	 <form action="form_update.php" method="post">
     <div class="fullForm">
        <div class="formPage">
            <div id="row" class="rowOne">
                <p class="paraOne">A. Change Request (CR) Number: </p>
                <p class="paraTwo">ACC_CR_ </p>
                <input type="number" name="number" id="number">
                <p class="paraThree">CR Received Date: </p>
                <input type="date" name="date" id="date">
            </div>
            <div id="row" class="rowTwo">
                <p class="paraOne">Impacted Project Name & CR Title:</p>
                <input type="text" name="projectName" id="projectName">
            </div>
            
            <div id="row" class="rowThree">
                <p class="paraOne">Prepared/Lead by:</p>
                <input type="text" name="preparedBy" id="preparedBy">
            </div>
            <div id="row" class="rowFour">
                <p class="paraOne">CR Initiator:</p>
                <input type="text" name="cr_initiator" id="cr_initiator">
            </div>
            <div id="row" class="rowFive">
                 <div class="colOne" name="typeOfChange" >Type of Change:</div>
                <div class="colTwo">
                    <input type="checkbox" name="change[]" value="report">
                    <label for="report">Report</label><br>
                    <input type="checkbox" name="change[]" value="database">
                    <label for="database">Database</label><br>
                    <input type="checkbox" name="change[]" value="conversion">
                    <label for="conversion">Conversion/Migration</label><br>
                    <input type="checkbox" name="change[]" value="enhancement">
                    <label for="enhancement">Enhancement</label><br>
                    <input type="checkbox" name="change[]" value="workflow">
                    <label for="workflow">Workflow</label><br>
                    <input type="checkbox" name="change[]" value="form">
                    <label for="form">Form</label><br>
                </div>  
            </div>
            <div id="row" class="rowSix">
                <p class="paraOne">Impacted SBU(s) :</p>
                <input type="text" name="impactedSBU" id="impactedSBU">
            </div>
           <div id="row" class="rowSeven">
                <div class="colOne">Request Priority:</div>
                <div class="colTwo" name="requestPriority" >
                    <input type="checkbox" name="req[]" value="low">
                    <label for="low">Low</label><br>
                     <input type="checkbox" name="req[]" value="medium">
                    <label for="medium">Medium</label><br>
                     <input type="checkbox" name="req[]" value="high">
                    <label for="high">High/Bussiness Critical</label><br>
                </div>                             
            </div>
            <div id="row" class="rowEight">
                <p class="paraOne">Module (s) Impacted:</p>
                <input type="text" name="moduleImpacted" id="moduleImpacted">
            </div>
            <div id="row" class="rowNine">
                <p class="paraOne">Expected Delivery Date for the CR:</p>
                <input type="date" name="deliverydate" id="deliverydate">
            </div>
            <div id="row" class="rowTen">
                <p class="paraOne">Responsible:</p>
                <input type="text" name="responsible" id="responsible">
            </div>
            <div id="row" class="rowEleven">
                <p class="paraOne">Accountable:</p>
                <input type="text" name="accountable" id="accountable">
            </div>
            <div id="row" class="row12">
                <div>
                    <p>Change Details:</p>
                    <textarea name="changeDetails" id="changeDetails"></textarea>
                </div>
            </div>
            <div id="row" class="row13">
                <div>
                    <p><b>Justification in-case of CR with “High / Business Critical” Priority:</b></p>
                </div>
                
                <div class="paraTwo">
                    <p>How many processes will be impacted: </p> 
                    <input type="text" name="processImpact" id="processImpact" style="width: 10pc; height: 10px; border: 1px solid black; margin-left: 10px; margin-right: 20px;">
                    <p>How many Users will be impacted:</p>
                    <input type="text" name="userImpact" id="userImpact" style="width: 12pc; height: 10px;border: 1px solid black; margin-left: 10px;">
                </div> 

                <div class="paraThree">
                    <p>How much will be financial impact in-case of not carrying this change:</p>
                    <input type="text" name="financialImpact" id="financialImpact" style="width: 20pc; height: 10px;border: 1px solid black; margin-left: 10px;">
                </div>
                <div class="paraFour">
                    <p>Impact Details:</p>
                    <textarea name="impactDetails" id="impactDetails"></textarea>
                </div>

            </div>
            <div id="row" class="row14">
                <div class="firstPara">
                    <p><b> Change Request Approved by: </b></p> 
                </div>
                <div class="paraTwo">
                    <p >Stakeholder: Name:</p>
                    <input type="text" name="stakeholderName" id="stakeholderName" style="width: 30%; height: 10px; border-bottom: 2px dashed black; border-top: none; border-left: none; border-right: none; margin: 0px 10px 10px 10px; outline: none">
                    <p>Signature & Date:</p>
                    <input type="text" name="signatureDate" id="signatureDate" style="width: 30%; height: 10px; border-bottom: 2px dashed black; border-top: none; border-left: none; border-right: none; margin: 0px 10px 10px 10px; outline: none">
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
                <div class="colTwo"><input type="text" name="analysisHour" id="analysisHour"></div>
                <div class="colThree"><input type="text" name="analysisBDT" id="analysisBDT"></div>
            </div>
            <div id="row" class="rowFour">
                <div class="colOne"><p>Development</p></div>
                <div class="colTwo"><input type="text" name="developmentHour" id="developmentHour"></div>
                <div class="colThree"><input type="text" name="developmentBDT" id="developmentBDT"></div>
            </div>
            <div id="row" class="rowFive">
                <div class="colOne"><p>QC</p></div>
                <div class="colTwo"><input type="text" name="qcHour" id="qcHour"></div>
                <div class="colThree"><input type="text" name="qcBDT" id="qcBDT"></div>
            </div>
            <div id="row" class="rowSix">
                <div class="colOne"><p><b>Total Net Change in Cost</b></p></div>
                <div class="colTwo"><input type="text" name="totalHour" id="totalHour"></div>
                <div class="colThree"><input type="text" name="totalBDT" id="totalBDT"></div>
            </div>
        </div>
        <div id="container" class="containerThree">
            <div id="row" class="rowOne"><b>B. Approval Matrix </b></div>
            <div id="row" class="rowTwo">
                <div class="colOne">Change Request Recommended:</div>
                <div class="colTwo">
                    <input type="radio" id="rec[]" name="rec[]" value="Yes">
                    <label for="Yes">Yes</label><br>
                    <br>
                    <input type="radio" id="rec[]" name="rec[]" value="No">
                    <label for="No">No</label><br>
                </div>  
            </div>
            <div id="row" class="rowThree">* Reason: For ensuring protect information leakage</div>
            <div id="row" class="rowFour">
                <div class="insideTb">
                    <div class="colOne">
                        <input type="text" id="acc" name="acc">
                        <p>Head of ACC, BGIT</p>
                    </div>
                    <div class="colTwo">
                        <input type="text" id="pmo" name="pmo">
                        <p>Head of PMO, BGIT</p>
                    </div>
                    <div class="colThree">
                        <input type="text" id="cio" name="cio">
                        <p>CIO, BGIT</p>
                    </div>
                    <div class="colFour">
                        <input type="text" id="management" name="management">
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
                <div class="checkBox">
                    <input type="radio" id="cha[]" name="cha[]" value="implemented">
                    <label for="implemented">implemented, completed & archived</label><br>
                    <br>
                    <input type="radio" id="cha[]" name="cha[]" value="notImplemented">
                    <label for="notImplemented">not implemented</label><br>
                </div>                               
            </div>
            <div id="row" class="rowThree">
                <div>
                    <p>Remarks:</p>
                    <textarea name="remarks" id="remarks"></textarea>
                </div>
            </div>
            <!-- <div id="row" class="rowThree">
                <textarea>Remarks:</textarea>
            </div> -->
            <div id="row" class="rowFour">
                <p >Key Stakeholder:</p>
                <input type="text" name="keyStakeholder" id="keyStakeholder" style="width: 30%; height: 10px; border-bottom: 2px dashed black; border-top: none; border-left: none; border-right: none; margin: 0px 10px 10px 10px; outline: none">
                <p>’Signature & Date:</p>
                <input type="text" name="sigDate" id="sigDate" style="width: 30%; height: 10px; border-bottom: 2px dashed black; border-top: none; border-left: none; border-right: none; margin: 0px 10px 10px 10px;outline: none">
            </div>
        </div>
        <div class="button">
            <button type="reset" name="reset" id="reset">Reset</button>
            <button type="submit" name="submit" id="submit">Submit</button>
         </div>
    </div>
	</form>
</body>
</html>