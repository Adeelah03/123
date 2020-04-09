<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- <title>Untitled Document</title> -->
</head>

<body>
<?php
		
		include 'connect.php';
			
		$id = $_POST['id'];
		$status = $_POST['status'];
		$level = $_POST['level'];
		$problem = $_POST['problem'];
		$Suggestions = $_POST['Suggestions'];
	

	    $check = "SELECT id FROM form WHERE id = '$id' ";
        $db_query = mysqli_query($conn, $check);
        $num=mysqli_num_rows($db_query);

        if($num > 0)
        {
        echo "<script>";
        echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
        echo "window.history.back();";
        echo "</script>";
        }else
        {	
    
		$sql = "INSERT INTO form (id,status,level,problem,Suggestions) VALUES('$id','$status','$level','$problem','$Suggestions')";
    
		$db_query = mysqli_query($conn,$sql);
	    
    //echo $sql;
    //echo $db_query;
            
        if($db_query) 
        {
            echo "<script>";
            echo "alert(\" บันทึกเรียบร้อย\");"; 
            echo "</script>";
            echo "<meta http-equiv='refresh'content='0;url=http://localhost/project/admin-B_staff.php'>";
        }
        }
	?>
</body>
</html>
