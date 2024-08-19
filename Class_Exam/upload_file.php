<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h1>Ans No-1</h1>
    <h1>File Uploaded</h1>


    <?php 
    if(isset($_POST['submit'])){
    
            $name = $_FILES['photo']['name'];
            $tmpName = $_FILES['photo']['tmp_name'];
            $filesize = $_FILES['photo']['size'];
            $allowedsize = 409600;
            $allowedtype = ['jpg','pdf','docx'];
            $errors = array();

            $data = pathinfo($name);
            $ext = strtolower($data['extension']);

            if($filesize > $allowedsize){
                $errors[] = "<h3 style= 'color:red'>File size must be within 400kb</h3>";
            }
            if(!in_array($ext, $allowedtype)){
                $errors[] = "<h3 style= 'color:red'>File Type must be jpg, pdf and docx</h3>";
            }
            if(count($errors)>0){
                foreach($errors as $err){
                    echo $err . "<br>";
                }
            }else{
                $status = move_uploaded_file($tmpName,"uploads/".$name);
                    if($status)echo "Uploaded Successfully";
                
            }
        }

    ?>
    <img src="uploads\<?php if(isset($_POST['submit'])){ echo $name;} ?>" height="120px" width="120px">
    <form action="" method="post" enctype="multipart/form-data">
        Image: <input type="file" name="photo"><br>
        <input type="submit" name="submit" value="Upload">

    </form>
</body>
</html>