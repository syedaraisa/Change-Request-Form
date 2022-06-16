<?php
include 'connect.php';
require_once 'helper.php';
require_once 'session_check.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>List Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/list/style.css">
</head>
<body>
 
<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center">
      <img loading="lazy" src="assets/img/BG.jpg" alt="..." width="83" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <h4 class="m-2">Bashundhara Group</h4>
        <p class="font-weight-normal text-muted mb-2">CR Form List</p>
      </div>
    </div>
  </div>

  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0 m-2"><b>Dashboard</b></p>

  <ul class="nav flex-column bg-white mb-0 m-2">
    <li class="nav-item">
      <a href="index.php" class="nav-link text-dark bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                CR Form
            </a>
    </li>
    <li class="nav-item">
      <a href="index.php" class="nav-link text-dark bg-light">
                <i class="fa fa-user-plus mr-3 text-primary fa-fw"></i>
                Add User
            </a>
    </li>
    <li class="nav-item">
      <a href="session_end.php" class="nav-link text-dark bg-light">
                <i class="fa fa-sign-out mr-3 text-primary fa-fw"></i>
                Log Out
            </a>
    </li>
  </ul>

</div>
<!-- End vertical navbar -->


<!-- Page content holder -->
<div class="page-content p-5" id="content">
  <!-- Toggle button -->
  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"><b>&nbspList Page</b></small></button>
  <div class="table">
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
      <td scope="row"><a title="view page" href="update.php?updateid=<?php echo $row['id'];?>"><?php echo $row['number']; ?></a></td>
      <td scope="row"><?php echo $row['projectName']; ?></td>
      <td scope="row"><?php echo $row['preparedBy']; ?></td>
      <td scope="row"><?php echo $row['cr_initiator']; ?></td>
      <td scope="row"><?php echo $row['impactedSBU']; ?></td>
      <td scope="row"><?php echo $row['deliveryDate']; ?></td>
      <td scope="row"><?php echo $row['stakeholderName']; ?></td>
      <td scope="row"><?php echo $row['signatureDate']; ?></td>
      <td>
        <div class="edit">
           <a href="update.php?updateid=<?php echo $row['id'];?>" title="Edit"><i class="fa fa-pencil-square-o mr-3 text-primary fa-lg my-2"></i></a>
        </div>
        <div class="delete">
           <a href="delete.php?deleteid=<?php echo $row['id'];?>" title="Delete"><i class="fa fa-trash mr-3 text-primary fa-lg my-2"></i></a>
         </div>
      </td>
    </tr>

    <?php
      endwhile;
    endif;
    ?>


      </tbody>
      </table>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>
</body>
</html>

