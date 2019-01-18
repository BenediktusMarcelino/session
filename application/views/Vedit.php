<!DOCTYPE html>
<html>
	<head>UPDATE AKUN</head>
<body>
<table border = "1"> 
         <?php 
            $i = 1; 
            echo "<tr>"; 
            echo "<td>Email</td>"; 
            echo "<td>Username</td>"; 
            echo "<td>Password</td>"; 
            echo "<td>Action</td>"; 
            echo "<tr>"; 
				
            foreach($admin as $r) { 
            echo "<tr>"; 
            //echo "<td>".$i++."</td>"; 
            //echo "<td>".$r->id."</td>"; 
            echo "<td>".$r->email."</td>"; 
			   echo "<td>".$r->username."</td>";
			   echo "<td>".$r->password."</td>";
			   echo "<td><a href='". site_url('user/editdata').'/'.$r->id. "'>Edit</a></td>";
			}
		?>
</table>
</body>
</html>