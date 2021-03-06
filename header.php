
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {margin: 0;}

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px){
    ul.topnav li.right,
    ul.topnav li {float: none;}
}
</style>
</head>
<body>
<div id="wrapper">

<ul class="topnav">
  <li><a class="active" href="http://localhost/collegestroll/index.php">CollegeStroll</a></li>
  <li><a href="http://localhost/collegestroll/create_cat.php">Add Category</a></li>
  <li><a href="http://localhost/collegestroll/create_col.php">Add College</a></li>
  <li><a href="http://localhost/collegestroll/signout.php">Sign Out</a></li>
  <li class="right"><a href="http://localhost/collegestroll//about-us-19//portfolio.html">About</a></li>
</ul>

<div id="content">
