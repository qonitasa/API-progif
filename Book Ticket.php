<?php include("../Template/header.php");
include ("../Template/navbar.php"); ?>
<body background="../User/Bg_img.jpg">
<!-- <div img src="../User/Picture 1.png" alt="Landing Page Picture"> -->
    <div class="row " style="margin-top:100px">
        <div class="col-4">
        </div>
        <div class="col-4">
            <div class="card text-center">
                <div class=" card-header bg-info" >
                    <h5 style="margin-bottom:-0px" class="text-white" > Pemesanan Tiket </h5>
                </div>
                <div class="card-body text-left">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Route</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Jakarta-Bandung</option>
                            <option>Bandung-Jakarta</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Quantity</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <div class="text-right">
                        <a class="btn btn-primary" href="Jadwal Tiket.php" role="button"> Submit </a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
        <div class="col-4">
        </div>
    </div>
<!-- </div> -->
