<!DOCTYPE html>
<html>
	<head>DELETE AKUN</head>
<body>
<table border = "1"> 
         <?php 
            $i = 1; 
            echo "<tr>"; 
            echo "<td>ID</td>"; 
            echo "<td>Email</td>"; 
            echo "<td>Username</td>"; 
            echo "<td>Password</td>"; 
            echo "<td>Action</td>"; 
            echo "<tr>"; 
				
            foreach($admin as $r) { 
               echo "<tr>"; 
               //echo "<td>".$i++."</td>"; 
               echo "<td>".$r->id."</td>"; 
               echo "<td>".$r->email."</td>"; 
			   echo "<td>".$r->username."</td>";
			   echo "<td>".$r->password."</td>";
			   echo "<td><a href='". site_url('user/deletedata').'/'.$r->id. "'>Delete</a></td>";
			}
		?>
</table>
</body>
</html>