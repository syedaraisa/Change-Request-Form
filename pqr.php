<?php
include 'connect.php';
require_once 'helper.php';
require_once 'session_check.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/listpage/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Font Awesome 5-->
    <script src="https://kit.fontawesome.com/05a6136071.js" crossorigin="anonymous"></script>

    <title>List Page</title>
  </head>
  <body>
    <header class="listpage">
      <h1>List Page</h1>
    </header>
    <nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->
  <div class="container">
    <div class="adduser">
      <button type="button" class="btn btn-primary btn-sm my-1" title="Add user"><i class="fa-solid fa-user-plus"></i>&nbsp<a href="index.php" class="text-light"></a></button>
    </div>
    <div class="logout">
      <button type="button" class="btn btn-primary btn-sm my-1" title="Log out"><i class="fa-solid fa-right-from-bracket"></i>&nbsp<a href="session_end.php" class="text-light"></a></button>
    </div> 
  </nav>
      <table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">Sl&nbspNo</th>
      <th scope="col">CR&nbspNumber</th>
      <!--<th scope="col">date</th>-->
      <th scope="col">Project&nbspName</th>
      <th scope="col">Prepared&nbspBy</th>
      <th scope="col">CR&nbspInitiator</th>
      <!--<th scope="col">typeOfChange</th>-->
      <th scope="col">Impacted&nbspSBU</th>
      <!--<th scope="col">requestPriority</th>
      <th scope="col">moduleImpacted</th>-->
      <th scope="col">Delivery&nbspDate</th>
      <!--<th scope="col">responsible</th>
      <th scope="col">accountable</th>
      <th scope="col">changeDetails</th>
      <th scope="col">processImpact</th>
      <th scope="col">userImpact</th>
      <th scope="col">financialImpact</th>
      <th scope="col">impactDetails</th>-->
      <th scope="col">Stakeholder&nbspName</th>
      <th scope="col">Signature&nbspDate</th>
      <!--<th scope="col">analysisHour</th>
      <th scope="col">analysisBDT</th>
      <th scope="col">developmentHour</th>
      <th scope="col">developmentBDT</th>
      <th scope="col">qcHour</th>
      <th scope="col">qcBDT</th>
      <th scope="col">totalHour</th>
      <th scope="col">totalBDT</th>
      <th scope="col">recommended</th>
      <th scope="col">acc</th>
      <th scope="col">pmo</th>
      <th scope="col">cio</th>
      <th scope="col">management</th>
      <th scope="col">theChange</th>
      <th scope="col">remarks</th>
      <th scope="col">keyStakeholder</th>
      <th scope="col">sigDate</th>-->
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php

    $sql="SELECT * FROM `request_form`";
    $result= mysqli_query($conn,$sql);
	
    if($result):
      while ($row=  mysqli_fetch_assoc($result)) :
	?>
	
       
      <td scope="row"><?php echo $row['id']; ?></td>
      <td scope="row"><a href="update.php?updateid=<?php echo $row['id'];?>"><?php echo $row['number']; ?></a></td>
      <!--<td scope="row"><?php echo $row['date']; ?>'</td>-->
      <td scope="row"><?php echo $row['projectName']; ?></td>
      <td scope="row"><?php echo $row['preparedBy']; ?></td>
      <td scope="row"><?php echo $row['cr_initiator']; ?></td>
      <!--<td scope="row"><?php echo implode(", ", unserialize(base64_decode($row['typeOfChange'])));  ?></td>-->
      <td scope="row"><?php echo $row['impactedSBU']; ?></td>
      <!--<td scope="row"><?php echo implode(", ", unserialize(base64_decode($row['requestPriority'])));  ?></td>
      <td scope="row"><?php echo $row['moduleImpacted']; ?></td>-->
      <td scope="row"><?php echo $row['deliveryDate']; ?></td>
      <!--<td scope="row"><?php echo $row['responsible']; ?>'</td>
      <td scope="row"><?php echo $row['accountable']; ?>'</td>
      <td scope="row"><?php echo $row['changeDetails']; ?>'</td>
      <td scope="row"><?php echo $row['processImpact']; ?>'</td>
      <td scope="row"><?php echo $row['userImpact']; ?>'</td>
      <td scope="row"><?php echo $row['financialImpact']; ?>'</td>
      <td scope="row"><?php echo $row['impactDetails']; ?>'</td>-->
      <td scope="row"><?php echo $row['stakeholderName']; ?></td>
      <td scope="row"><?php echo $row['signatureDate']; ?></td>
      <!--<td scope="row"><?php echo $row['analysisHour']; ?>'</td>
      <td scope="row"><?php echo $row['analysisBDT']; ?>'</td>
      <td scope="row"><?php echo $row['developmentHour']; ?>'</td>
      <td scope="row"><?php echo $row['developmentBDT']; ?>'</td>
      <td scope="row"><?php echo $row['qcHour']; ?>'</td>
      <td scope="row"><?php echo $row['qcBDT']; ?>'</td>
      <td scope="row"><?php echo $row['totalHour']; ?>'</td>
      <td scope="row"><?php echo $row['totalBDT']; ?>'</td>
      <td scope="row"><?php echo implode(", ", unserialize(base64_decode($row['recommended'])));  ?></td>
      <td scope="row"><?php echo $row['acc']; ?>'</td>
      <td scope="row"><?php echo $row['pmo']; ?>'</td>
      <td scope="row"><?php echo $row['cio']; ?>'</td>
      <td scope="row"><?php echo $row['management']; ?>'</td>
      <td scope="row"><?php echo implode(", ", unserialize(base64_decode($row['theChange'])));  ?></td>
      <td scope="row"><?php echo $row['remarks']; ?></td>
      <td scope="row"><?php echo $row['keyStakeholder']; ?></td>
      <td scope="row"><?php echo $row['sigDate']; ?></td>-->
      <td>
        <div class="edit">
           <button class="btn btn-primary btn-sm my-1" title="Edit"><i class="fa-solid fa-pen-to-square"></i><a href="update.php?updateid=<?php echo $row['id'];?>" class="text-dark"></a></button><br>
        </div>
        <div class="delete">
           <button class="btn btn-danger btn-sm my-1" title="Delete"><i class="fa-solid fa-trash-can"></i><a href="delete.php?deleteid=<?php echo $row['id'];?>" class="text-dark"></a></button>
         </div>
         <div class="print">
           <button class="btn btn-success btn-sm my-1" title="Print" onclick="window.print()"><i class="fa-solid fa-print"></i><a href="update.php?updateid=<?php echo $row['id'];?>" class="text-dark"></a></button>
        </div>
      </td>
    </tr>

    <?php
      endwhile;
    endif;
    ?>


      </tbody>
      </table>
    </div>
    
  </body>
</html>