<?php include_once("MyTheme/header.php");
include_once("connection.php");
?>

<div class="card">
		<div class="card-header">
			<h1 align="center">Application Status</h1>
		</div>
    <div class="card-body">
    <form action="" method="POST">
        <table class="table table-hover">
            <thead>
                
            </thead>
            <tbody>
                <tr>
                    <th>Application Status</th>
                    <td>
                        <input type="text" name="txtappstatus" id="input" class="form-control" value="" required="required"  maxlength="50">
                    </td>                       
                </tr>
                <tr>
                    <th>Remarks</th>
                    <td>
                        <input type="text" name="txtremark" id="input" class="form-control" value="" required="required"  maxlength="1000">
                    </td>                       
                </tr>
                <tr>
                    <td align="center" colspan="2">
                        <button type="submit" name="btnSubmit" class="btn btn-primary">Submit</button>
                    </td>
                </tr>

            </tbody>
        </table>
    </form>
    <?php
        if(isset($_POST['btnSubmit'])){
            $parfield1 = $_POST['txtappstatus'];
            $parfield2 = $_POST['txtremark'];
            $tablename = "tbl_app_status";
            $id = "app_id";
            $col1 = "app_status";
            $col2 = "app_status_remarks";
            $API->insert($tablename,$id,$col1,$col2,$parfield1,$parfield2);

        }
    ?>
    </div>
</div>
<?php include_once("MyTheme/footer.php") ?>