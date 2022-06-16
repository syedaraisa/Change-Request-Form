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
    <!-- Iconscout Link For Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/list/style.css">
    <link rel="stylesheet" href="style.css">
 
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
      <a href="listview.php" class="nav-link text-dark bg-light">
                <i class="fa fa-list-alt mr-3 text-primary fa-fw"></i>
                List View
            </a>
    </li>
    <li class="nav-item">
      <a href="task.php" class="nav-link text-dark bg-light">
                <i class="fa fa-tasks mr-3 text-primary fa-fw"></i>
                Add Tasks
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
<div class="page-content p-0" id="content">
      <div class="navba">
      <nav class="navbar navbar-dark bg-dark">
      <div class="d-flex flex-row">
      <div class="p-2 text-light">Home</div>
      <div class="p-2 text-light">About</div>
      <div class="p-2 text-light">Contact</div>
      <div class="p-2 text-light">Services</div>
      </div>
      </nav>
</div>

 

<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>
<footer class="container-fluid">
  <div class="footer">
  <p>BASHUNDHARA GROUP IT © 2022 / ALL RIGHTS RESERVED.</p>
</div>
</footer>
</div>
</body>
</html>

