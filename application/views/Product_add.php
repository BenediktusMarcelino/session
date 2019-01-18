<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Tambah Barang</title> 
   </head> 
   <body> 

         <?php 
            echo form_open('Product/add');
            echo form_label('Kode'); 
            echo form_input(array('id'=>'kode','name'=>'kode')); 
            echo "<br/>"; 

            echo form_label('Nama'); 
            echo form_input(array('id'=>'nama','name'=>'nama')); 
            echo "<br/>"; 
			
            echo form_label('Harga'); 
            echo form_input(array('id'=>'harga','name'=>'harga')); 
            echo "<br/>"; 
			
            echo form_submit(array('id'=>'submit','value'=>'Add')); 
            echo form_close(); 
         ?> 
   </body>
</html>