<?php include_once("MyTheme/header.php");
include_once("connection.php");
?>

<div class="card">
		<div class="card-header">
			<h1 align="center">Vulnerability  Status</h1>
		</div>
    <div class="card-body">
    <form action="" method="POST">
        <table class="table table-hover">
            <thead>
                
            </thead>
            <tbody>
                <tr>
                    <th>Vulnerability  Status</th>
                    <td>
                        <input type="text" name="txtvulstatus" id="input" class="form-control" value="" required="required"  maxlength="50">
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
            $parfield1 = $_POST['txtvulstatus'];
            $parfield2 = $_POST['txtremark'];
            $tablename = "tbl_vul_status";
            $id = "vul_status_id";
            $col1 = "vul_status";
            $col2 = "vul_remarks";
            $API->insert($tablename,$id,$col1,$col2,$parfield1,$parfield2);
        }
    ?>
    </div>
</div>
<?php include_once("MyTheme/footer.php") ?>