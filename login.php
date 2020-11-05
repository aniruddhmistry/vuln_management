<!DOCTYPE html>
<html lang="en">

<?php
include("./header.php");
include_once("connection.php");
?>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="card-body">
                        <span class="pc-mtext">Vulnerablity Management System</span></br>
                        <h4 class="mb-3 f-w-400">Signin</h4>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i data-feather="mail"></i></span>
                            </div>
                            <input type="email" name="uname" class="form-control" placeholder="User / Email ">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i data-feather="lock"></i></span>
                            </div>
                            <input type="password" name="upass" id="inputupass" class="form-control" placeholder="Password" equired="required">
                        </div>
                        <div class="form-group text-left mt-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input input-primary" id="customCheckdefh2" checked="">
                                <label class="custom-control-label" for="customCheckdefh2">Save credentials</label>
                            </div>
                        </div>
                        <button type="submit" name="btnSubmit" class="btn btn-block btn-primary mb-4">Signin</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signin ] end -->

<?php
if (isset($_POST["btnSubmit"])) {
    $username = $_POST['uname'];
    $pass = $_POST['upass'];
    $email = $_POST['uname'];

    $API->Select($username, $email, $pass);
}
?>

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/feather.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
</body>
<?php include_once("MyTheme/footer.php") ?>