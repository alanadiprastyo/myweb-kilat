<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>CloudKilat</title>

  <!-- CSS  -->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/fonts/material-icons/material-icons.css'); ?>" />
  <link href="<?php echo base_url('assets/css/materialize.css') ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url('assets/css/style.css') ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>

<!-- menu -->
  <nav class="blue-grey " role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="<?php echo base_url() ?>" class="brand-logo">CloudKilat</a>
     <ul class="right hide-on-med-and-down">
      <li><a href="<?php echo base_url('user') ?>">Home</a></li>
      <li><a href="<?php echo base_url('login/logout') ?>">Logout</a></li>
      
    </ul>
    <!-- end menu normal -->
  
   
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
  </nav>
<!-- end menu -->