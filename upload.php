<?php
if($_POST['image'] != ""){
   $folderPath = 'upload/';
   $image_parts = explode(";base64,", $_POST['image']);
   $image_type_aux = explode("image/", $image_parts[0]);
   $image_type = $image_type_aux[1];
   $image_base64 = base64_decode($image_parts[1]);
   $file = uniqid() . '.png';
   file_put_contents($folderPath . $file, $image_base64);
   echo $file;

   // Excluí arquivos com mais de 24 horas de criação
   if ($handle = opendir($folderPath)) {
      while (false !== ($fileDelete = readdir($handle))) { 
         $filelastmodified = filemtime($folderPath . $fileDelete);
         
         if((time() - $filelastmodified) > 86400)
         {
            unlink($folderPath . $fileDelete);
         }
      }
      closedir($handle); 
   }
}
else {
   header('Location: /unipar/unipar-ar-fpi/index.php');
}
?>