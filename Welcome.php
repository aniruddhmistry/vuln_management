<?php
session_start();
include("header.php"); ?>
<div class="card">
    <div class="card-header">
        <h1>Wel.Come</h1>
    </div>
    <div class="card-body">
        <?php
            if (isset($_SESSION['userName'])) {
                # Get the Value of Session Varaible.
                $user = $_SESSION['userName'];
                echo ("<h4>Welcome to : $user</h4> ");
            }
        ?>
            <form action="" method="post">
                <input type="submit" value="Logout" name="btnLogout" class="btn btn-warning">
            </form>
        <?php
        if (isset($_POST['btnLogout'])) {
            session_unset();
            header("location:login.php");
        }  
        ?>
    </div>
</div>

<?php include("./myTheme/footer.php"); ?>