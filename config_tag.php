<?php include_once("MyTheme/header.php");
include_once("connection.php");
?>

<div class="card">
		<div class="card-header">
			<h1 align="center">Config Tags</h1>
		</div>
    <div class="card-body">
    <form action="" method="POST">
        <table class="table table-hover">
            <thead>
                
            </thead>
            <tbody>
                <tr>
                    <th>Tag Keyword</th>
                    <td>
                        <input type="text" name="txttagname" id="input" class="form-control" value="" required="required"  maxlength="150">
                    </td>                       
                </tr>
                <tr>
                    <th>Tag Description</th>
                    <td>
                        <input type="text" name="txttagdes" id="input" class="form-control" value="" required="required"  maxlength="500">
                    </td>                       
                </tr>
                <tr>
                    <th>Tag Remarks</th>
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
            $parfield1 = $_POST['txttagname'];
            $parfield2 = $_POST['txttagdes'];
            $parfield3 = $_POST['txtremark'];
            $tablename = "tbl_tags";
            $id = "t_id";
            $col1 = "tag_keyword";
            $col2 = "tag_des";
            $col3 = "tag_remark";
            $API->TAGinsert($tablename,$id,$col1,$col2,$col3,$parfield1,$parfield2,$parfield3);
        }
    ?>
    </div>
</div>
<?php include_once("MyTheme/footer.php") ?>