<?php include_once("MyTheme/header.php");
include("./connection.php");
?>
<div class="container">
<div class="card">
		<div class="card-header">
			<h1>Home Database</h1>
		</div>
    <div class="card-body">
    
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr style="text-align:center">
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th colspan=2 style="text-align:center">Action</th>
            </tr>
        </thead>
        <?php
        $Queryresult = $objCRUD->showuser();
        if ($Queryresult->num_rows > 0) {
            while ( $row = $Queryresult->fetch_assoc()){
                ?>
             
         
    
        <tbody>
            <tr style="text-align:center">
             
                <th><?php echo $row['fname'] ?></th>
                <th><?php echo $row['lname'] ?></th>
                <th><?php echo $row['emailid'] ?></th>
                <th style="text-align:center"><a href="http://localhost/program/0_UpdateDatabase.php/?UserID=<?php echo $row['userid']?>" class="btn btn-success">Update</th>
                <th style="text-align:center"><a href="http://" class="btn btn-danger">Delete</th>


            </tr>
        </tbody>
        <?php
            }
        }
            else{
                echo("<br>Record Not Found...");
            }
        ?>
    </div>
</div>
</div>
<?php include_once("MyTheme/footer.php") ?>