
<?php
	$host='localhost';
    $user='root';
    $pass='';
    $database='kuissisdis';
    
    $konek=mysqli_connect($host, $user, $pass);
    
    mysqli_select_db($konek, $database);
    if ($konek){
    echo "success";
    } else {
    echo "failure";
    }
?>