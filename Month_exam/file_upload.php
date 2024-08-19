<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>

    <?php 
    if(isset($_POST['submit'])){
        $info = $_FILES['photo'];
        $obj = new File($info);
        $obj->Upload();

    }
    
    class File{
        public $fileinfo;

        public function __construct($x){
            $this->fileinfo = $x;
        }

        public function Upload(){
            $info = $this->fileinfo;
            $name = $info['name'];
            $tmpName = $info['tmp_name'];
            $filesize = $info['size'];
            $allowedsize = 409600;
            $allowedtype = ['jpg','png','pdf'];
            $errors = array();

            $data = pathinfo($name);
            $ext = strtolower($data['extension']);

            if($filesize > $allowedsize){
                $errors[] = "File size must be within 400kb";
            }
            if(!in_array($ext,$allowedtype)){
                $errors[] = "File Type must be jpg,png and pdf";
            }
            if(count($errors)>0){
                foreach($errors as $err){
                    echo $err . "<br>";
                }
            }else{
                if(move_uploaded_file($tmpName, "uploads/. $name")){
                    echo "Uploaded Successfully";
                }
            }
        }
    }
    
    
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="photo"><br>
        <input type="submit" name="submit" value="Upload">

    </form>
</body>
</html>