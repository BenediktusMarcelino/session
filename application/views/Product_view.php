<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Lihat barang</title> 
   </head>
	
   <body> 
      <a href = "<?php echo site_url(); ?>Product/add/">Add</a>
		
      <table border = "1"> 
         <?php 
            $i = 1; 
            echo "<tr>"; 
            //echo "<td>Sr#</td>"; 
            echo "<td>Kode No.</td>"; 
            echo "<td>Nama</td>"; 
            echo "<td>Harga</td>"; 
            echo "<td>Edit</td>"; 
            echo "<td>Delete</td>"; 
            echo "<tr>"; 
				
            foreach($product as $r) { 
               echo "<tr>"; 
               //echo "<td>".$i++."</td>"; 
               echo "<td>".$r->kode."</td>"; 
               echo "<td>".$r->nama."</td>"; 
               echo "<td>".$r->harga."</td>";
               echo "<td><a href='". site_url('product/edit').'/'.$r->id. "'>Edit</a></td>";
               echo "<td><a href = '".site_url('product/delete'). '/' .$r->id."'>Delete</a></td>"; 
               echo "<tr>"; 
            } 
         ?>
      </table> 
		
   </body>
	
</html>