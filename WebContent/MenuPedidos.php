<!DOCTYPE html>
<?php
$pageName = 'indexVs2.php';
include "connection.php";


?>


<html lang="en"">
<head>

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <style type="text/css"></style>

</head>
<body>


<form class="bs-example bs-example-form" role="form" name="FormPedido">
    <div class="row">
        <div class="col-lg-6">
            <div class="input-group">
                <div class="input-group-btn">
                    <p id="CyQ"></p>

                    <p id="JyQ"></p>

                    <p id="CyP"></p>

                    <input type="checkbox" id="CyQ" onclick="showSelection('CebollayQueso')"/> <h6>Cebolla y
                        Queso</h6> </br>
                    <input type="checkbox" id="JyQ" onclick="showSelection('JamonyQueso')"/> <h6>Jamon y
                        Queso</h6> </br>
                    <input type="checkbox" id="CyP" onclick="showSelection('CalabazayParmesano')"/><h6> Calabaza y
                        Parmesano</h6> </br>

                </div>
                <!-- /btn-group -->
            </div>
            <!-- /input-group -->
        </div>
        <!-- /.col-lg-6 -->

</form>

<script type="text/javascript" language="javascript">
    vis = true;
    visible1 = true;
    visible2 = true;
    function showSelection(selectOp) {

        if (vis) {
            if (selectOp == 'CebollayQueso') {
                document.getElementById("CyQ").style.visibility = 'visible';
                document.getElementById("CyQ").innerHTML = "<label for='KGCYQ'> <input type='text' name='KGCyQ'/><h6> Cebolla y Queso </h6></label>";
                vis = false;
                return;
            }
        }
        else {
            document.getElementById("CyQ").style.visibility = 'hidden';
            vis = true;
            return;
        }
        if (visible1) {
            if (selectOp == 'JamonyQueso') {
                document.getElementById("JyQ").style.visibility = 'visible';
                document.getElementById("JyQ").innerHTML = "<h6> Jamon y Queso </h6><input type='text' name='KGJyQ'/>";
                visible1 = false;
                return;
            }
        }
        else {
            document.getElementById("JyQ").style.visibility = 'hidden';
            visible1 = true;
            return;
        }

        if (visible2) {
            if (selectOp == 'CalabazayParmesano') {
                document.getElementById("CyP").style.visibility = 'visible';
                document.getElementById("CyP").innerHTML = "<h6> Calabaza y Parmesano </h6> <input type='text' name='KGCyP'/>";
                visible2 = true;
                return;
            }
        }
        else {
            document.getElementById("CyP").style.visibility = 'hidden';
            visible2 = true;
            return;
        }

    }
</script>
</body>