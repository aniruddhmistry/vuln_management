<?php include_once("MyTheme/header.php");
include_once("connection.php");
?>

<div class="card">
		<div class="card-header">
			<h1 align="center">Environment Type</h1>
		</div>
    <div class="card-body">
    <form action="" method="POST">
        <table class="table table-hover">
            <thead>
                
            </thead>
            <tbody>
                <tr>
                    <th>Environment</th>
                    <td>
                        <input type="text" name="txtenv" id="input" class="form-control" value="" required="required"  maxlength="50">
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
            $parfield1 = $_POST['txtenv'];
            $parfield2 = $_POST['txtremark'];
            $tablename = "tbl_env_type";
            $id = "env_id";
            $col1 = "env_enviroment";
            $col2 = "env_remark";
            $API->insert($tablename,$id,$col1,$col2,$parfield1,$parfield2);
        }
    ?>
    </div>
</div>
<?php include_once("MyTheme/footer.php") ?>