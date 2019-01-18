<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Update Akun</title> 
   </head> 

   <body> 
      <form action="" method="post">
	     Email : <textarea name="email"><?php echo $admin['email'] ?></textarea><br>
        Username : <textarea name="username"><?php echo $admin['username'] ?></textarea><br>
        Password : <textarea name="password"><?php echo $admin['password'] ?></textarea><br>
        <input type="hidden" name="id" value="<?php echo $admin['id'] ?>">
	     <input type="submit" name="editAkun" value="Update">
   </form>      
   </body>
	
</html>