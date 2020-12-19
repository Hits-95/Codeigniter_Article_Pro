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
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="javascript:void(0)">Article List</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navb">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="btn " href="<?= base_url()?>dynamic_dependent">Ajax</a>
      </li>
      <li class="nav-item active">
        <a class="btn btn-light text-dark" href="<?= base_url('export'); ?>">FeedBack!!!</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-dark btn-sm my-2 my-sm-0" type="button">Search</button>
    </form>
  </div>
</nav>
</body>




