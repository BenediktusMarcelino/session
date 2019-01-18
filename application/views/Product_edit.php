<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Update Product</title> 
   </head> 

   <body> 
      <form method="post" action="">
	      Kode No. : <input type="text" name="kode" value="<?php echo $product['kode'] ?>"><br>
	      Nama : <textarea name="nama"><?php echo $product['nama'] ?></textarea><br>
         Harga : <textarea name="harga"><?php echo $product['harga'] ?></textarea><br>
	      <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
	      <input type="submit" name="editProduct" value="Edit">
   </form>      
   </body>
	
</html>