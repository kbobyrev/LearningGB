<?
    Function createGallery($img_folder_path=null){
        if ($img_folder_path!=null){
            $img_dir= scandir($img_folder_path); 
            $temp_html="";
            for ($i=2;$i<count($img_dir);$i++){
               $temp_html.= "
                <div class =\"img-cover\">
                    <div class =\"img-cont\">
                        <a href=\"images/$img_dir[$i]\" target=\"_blank\"><img id=src=\"images/$img_dir[$i]\" width =\"100px\" heigth =\"100px\"><a>  
                    </div>
                </div>
               "; 
            }
            return $temp_html;
        }
    }
?>
<html>
<head>
    <title>Gallery</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Gallery</h1>
  <?
    echo createGallery("images");    
 ?>
</body>
</html>