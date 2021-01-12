<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>"> -->
  <!-- <?= link_tag('assets/css/bootstrap.min.css')?> -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Article List</title>
</head>

<body>


<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">Admin Panel<i class='far fa-user' style='font-size:24px; margin-left: 5px'></i></a>
  
  <!-- Links -->
  <ul class="navbar-nav">
     <li class="nav-item active">
       <?php 
          if($this->session->userdata('id')){
        ?>
          <a class="nav-link" href="<?= base_url('admin/welcome'); ?>">Article List<i class='fas fa-list' style="margin-left:  "></i></a>
        <?php } ?>
    </li>
    
    <li class="nav-item active">
       <?php 
          if($this->session->userdata('id')){
        ?>
            <a class="nav-link" href="<?= base_url('admin/logout')?>"><span style="margin-right: 5px">Logout</span><i class="fas fa-sign-out-alt"></i></a>

        <?php }else{ ?>
            <a class="nav-link" href="<?= base_url('login/')?>">Login<i class="fas fa-sign-in-alt" style="margin-right: 5px"></i></a>
        <?php
        }
         ?>
    </li>
   <!--  <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>
     -->
  </ul>
</nav>

</body>




