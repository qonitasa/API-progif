<?php include("../Template/header.php");
include ("../Template/navbar.php");

require("../config.php"); //menandakan menggunakan script di config.php

//Query
$sql = "SELECT * FROM user ";
$execute    = mysqli_query($link,$sql);

?>
<body>
<div class="jumbotron">
  <h1 class="display-4"> Simple Database App</h1>
  <h2 class="display-6"> Our member : </h2>
    <ul class="lead">
        <li>Muhammad Fata Nurrahman 18216014</li>
        <li>Cristable 18216...</li>
        <li>Qonita Salamah Aulia 18216...</li>
        <li>Muhammad Taufik Rahman</li>
        <li>Attari Rahmi 18216...</li>
        <li>Yocia Meiko Oke</li>
    </ul>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>

<h1 class = "display-5"> Login </h1>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="container">
  <div class="row">
    <div class="col-sm" background-color = >
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
  </div>
</div>

<table>
    <thead>
        <tr>
            <th> id </th>
            <th> Username </th>
            <th> Email </th>
            <th> Password </th>
        </tr>
    </thead>
    <tbody>
        <?php 
            while ($row = mysqli_fetch_array($execute)) {
        ?>
        <tr>
        <td> <?= $row['id'] ?> </td>
            <td> <?= $row['username'] ?> </td>
            <td> <?= $row['email'] ?> </td>
            <td> <?= $row['password'] ?> </td>
        </tr>
        <?php
        };
        ?>
    </tbody>
</table>
<?php include("../Template/footer.php");?>