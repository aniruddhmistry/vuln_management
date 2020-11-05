<?php include_once("MyTheme/header.php");
include_once("connection.php");
?>

<div class="card">
		<div class="card-header">
			<h1 align="center">CWE</h1>
		</div>
    <div class="card-body">
    <form action="" method="POST">
        <table class="table table-hover">
            <thead>
                
            </thead>
            <tbody>
                <tr>
                    <th>CWE ID</th>
                    <td>
                        <input type="text" name="txtcweid" id="input" class="form-control" value="" required="required"  maxlength="50">
                    </td>                       
                </tr>
                <tr>
                    <th>Vulnerability Name</th>
                    <td>
                        <input type="text" name="txtvul" id="input" class="form-control" value="" required="required"  maxlength="500">
                    </td>                       
                </tr>
                <tr>
                    <th>Description</th>
                    <td>
                        <input type="text" name="txtdes" id="input" class="form-control" value="" required="required"  maxlength="500">
                    </td>                       
                </tr>
                <tr>
                    <th>Reference</th>
                    <td>
                        <input type="text" name="txtref" id="input" class="form-control" value="" required="required"  maxlength="5000">
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
            $parfield1 = $_POST['txtcweid'];
            $parfield2 = $_POST['txtvul'];
            $parfield3 = $_POST['txtdes'];
            $parfield4 = $_POST['txtref'];
            $tablename = "tbl_cwe";
            $id = "id";
            $col1 = "cwe_id";
            $col2 = "cwe_vul_name";
            $col3 = "cwe_desc";
            $col4 = "cwe_reference";
            $API->CWEinsert($tablename,$id,$col1,$col2,$col3,$col4,$parfield1,$parfield2,$parfield3,$parfield4);
        }
    ?>
    </div>
</div>
<?php include_once("MyTheme/footer.php") ?>