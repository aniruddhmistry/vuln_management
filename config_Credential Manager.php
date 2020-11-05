<?php include_once("MyTheme/header.php"); 
include_once("connection.php");
?>

<div class="card">
		<div class="card-header">
			<h1 align="center">Credential Manager</h1>
		</div>
    <div class="card-body">
    <form action="" method="POST">
        <table class="table table-hover">
            <thead>
                
            </thead>
            <tbody>
                <tr>
                    <th>Application Name</th>
                    <td>
                        <input type="text" name="txtappname" id="input" class="form-control" value="" required="required"  maxlength="150">
                    </td>                       
                </tr>
                <tr>
                    <th>Username</th>
                    <td>
                        <input type="text" name="txtusername" id="input" class="form-control" value="" required="required"  maxlength="100">
                    </td>                       
                </tr>
                <tr>
                    <th>Password</th>
                    <td>
                        <input type="text" name="txtpass" id="input" class="form-control" value="" required="required"  maxlength="100">
                    </td>                       
                </tr>
                <tr>
                    <th>Role</th>
                    <td>
                        <input type="text" name="txtrole" id="input" class="form-control" value="" required="required"  maxlength="100">
                    </td>                       
                </tr>
                <tr>
                    <th>Authentication</th>
                    <td>
                        <input type="text" name="txtauth" id="input" class="form-control" value="" required="required"  maxlength="100">
                    </td>                       
                </tr>
                <tr>
                    <th>Http authentication</th>
                    <td>
                        <input type="text" name="txthttpauth" id="input" class="form-control" value="" required="required"  maxlength="100">
                    </td>                       
                </tr>
                <tr>
                    <th>Description</th>
                    <td>
                        <input type="text" name="txtdes" id="input" class="form-control" value="" required="required"  maxlength="500">
                    </td>                       
                </tr>
                <tr>
                    <th>URL</th>
                    <td>
                        <input type="text" name="txturl" id="input" class="form-control" value="" required="required"  maxlength="1000">
                    </td>                       
                </tr>
                <tr>
                    <th>Environment </th>
                    <td>
                        <input type="text" name="txtenv" id="input" class="form-control" value="" required="required">
                    </td>                       
                </tr>
                <tr>
                    <th>Login regex</th>
                    <td>
                        <input type="text" name="txtlogin" id="input" class="form-control" value="" required="required"  maxlength="1000">
                    </td>                       
                </tr>
                <tr>
                    <th>Logout regex</th>
                    <td>
                        <input type="text" name="txtlogout" id="input" class="form-control" value="" required="required"  maxlength="1000">
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
            $parfield1 = $_POST['txtappname'];
            $parfield2 = $_POST['txtusername'];
            $parfield3 = $_POST['txtpass'];
            $parfield4 = $_POST['txtrole'];
            $parfield5 = $_POST['txtauth'];
            $parfield6 = $_POST['txthttpauth'];
            $parfield7 = $_POST['txtdes'];
            $parfield8 = $_POST['txturl'];
            $parfield9 = $_POST['txtenv'];
            $parfield10 = $_POST['txtlogin'];
            $parfield11 = $_POST['txtlogout'];
            $parfield12 = $_POST['txtremark'];
            $tablename = "tbl_cred_manage";
            $id = "cred_app_id";
            $col1 = "cred_app_name";
            $col2 = "cred_app_uname";
            $col3 = "cres_app_pass";
            $col4 = "cred_app_role";
            $col5 = "cred_app_auth_type";
            $col6 = "cred_app_http_auth_type";
            $col7 = "cred_app_desc";
            $col8 = "cred_app_url";
            $col9 = "cred_app_env";
            $col10 = "cred_app_login_regex";
            $col11 = "cred_app_logout_regex";
            $col12 = "cred_app_remarks";
            $API->credinsert($tablename,$id,$col1,$col2,$col3,$col4,$col5,$col6,$col7,$col8,$col9,$col10,$col11,$col12,$parfield1,$parfield2,$parfield3,$parfield4,$parfield5,$parfield6,$parfield7,$parfield8,$parfield9,$parfield10,$parfield11,$parfield12);

        }
    ?>
    </div>
</div>
<?php include_once("MyTheme/footer.php") ?>