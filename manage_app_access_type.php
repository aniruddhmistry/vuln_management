<!DOCTYPE html>
<html lang="en">

<?php
/*
include $_SERVER['DOCUMENT_ROOT']."/lib/header.php";
include $_SERVER['DOCUMENT_ROOT']."/lib/sidepanel.php";
include $_SERVER['DOCUMENT_ROOT']."/lib/login_header.php";
*/
include("./header.php");
include("./sidepanel.php");
include("./login_header.php");
?>


<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Mobile header ] start -->
    <div class="pc-mob-header pc-header">
        <div class="pcm-logo">
            <img src="assets/images/logo.svg" alt="" class="logo logo-lg">
        </div>
        <div class="pcm-toolbar">
            <a href="#!" class="pc-head-link" id="mobile-collapse">
                <div class="hamburger hamburger--arrowturn">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
                <!-- <i data-feather="menu"></i> -->
            </a>
            <a href="#!" class="pc-head-link" id="headerdrp-collapse">
                <i data-feather="align-right"></i>
            </a>
            <a href="#!" class="pc-head-link" id="header-collapse">
                <i data-feather="more-vertical"></i>
            </a>
        </div>
    </div>
    <!-- [ Mobile header ] End -->


    <!-- [ Main Content ] start -->
    <section class="pc-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Form Elements</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                                <li class="breadcrumb-item">Form Elements</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- **************************************** -->

            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ form-element ] start -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5>Manage Application Access</h5>
                            <hr>

                            <div class="form-group col-md-6">
                                <label for="inputAddress">Access Type</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Application Access Type">
                            </div>
                            
                            <div class="form-group col-md-12">
                                        <label for="exampleFormControlTextarea1">Remarks</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Reference"></textarea>
                            </div>
                       
                        <hr>
                        <button class="btn  btn-primary" type="submit">Submit form</button>
                        
                        </form>
                    </div>
                </div>
            </div>

            <!-- [ form-element ] end -->
            <!-- Table start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Assessment Access List</h5>
                       
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Access Type</th>
                                        <th>Remarks</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Internet</td>
                                        <td>Public Access</td>
                                        <td>
                                        <button class="btn  btn-success" type="submit">Edit</button>
                                        <button class="btn  btn-danger" type="submit">Delete</button> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Intranet</td>
                                        <td>Only For Corporate User (Using VPN Only)</td>
                                        <td>
                                        <button class="btn  btn-success" type="submit">Edit</button>
                                        <button class="btn  btn-danger" type="submit">Delete</button> 
                                        </td>
                                    </tr>
                                   
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table end -->
        </div>
        <!-- [ Main Content ] end -->
        </div>
    </section>
    <!-- [ Main Content ] end -->
    </div>

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/feather.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="assets/js/plugins/clipboard.min.js"></script>
    <script src="assets/js/uikit.min.js"></script>

</body>

</html>