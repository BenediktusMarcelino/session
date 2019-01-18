<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Confirm Page</title> 
   </head>
	
   <body>
   <?php echo form_open('Product/browse');?>
   <form action="" method="post">
   <button type="submit" name="submit">PRODUCT</button>
	</form>

   <?php echo form_open('User/edit');?>
   <form action="" method="post">
   <button type="submit" name="submit">EDIT Akun</button>
	</form>

   <?php echo form_open('User/delete');?>
   <form action="" method="post">
   <button type="submit" name="submit">Hapus Akun</button>
	<br></form>

   <?php echo form_open('User/logout');?>
   <form action="" method="post">
   <button type="submit" name="submit">Logout</button>
	<br></form>
    </body>
    </html>