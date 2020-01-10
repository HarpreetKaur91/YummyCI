<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yummy</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css">
</head>
<body>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="logo">
                <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/logo.png" alt=""></a>
            </div>
            <div class="nav-menu">
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
                        <li><a href="<?php echo base_url();?>">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url();?>about">About Me</a></li>
                                <li><a href="<?php echo base_url();?>categories">Categories</a></li>
                                <li><a href="<?php echo base_url();?>receipe">Recipe</a></li>
                                <li><a href="<?php echo base_url();?>blog">Blog</a></li>
                                <li><a href="<?php echo base_url();?>contact">Contact</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url();?>receipe">Recipes</a></li>
                        <li><a href="<?php echo base_url();?>categories">Best Of</a></li>
                        <li><a href="<?php echo base_url();?>contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="nav-right search-switch">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->