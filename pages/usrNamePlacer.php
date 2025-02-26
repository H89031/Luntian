<?php
    include("connection.php");
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM tbl_registration WHERE RegID = $id";
        $res = $con->query($sql);

        if ($res->num_rows>0) {
            while ($row=$res->fetch_assoc()) {
                echo '<script>document.getElementById("usrName").innerHTML = "'.$row['Username'].'";</script>';
            }
        } else {
            echo "No data found!";
        }
    }
    
?>