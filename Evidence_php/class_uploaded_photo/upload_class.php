<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded File</title>
</head>
<body>
    <h2>Uploaded File</h2>

    <?php 
    
    if(isset($_POST['submit'])){
        $picture = $_FILES['photo'];
        $obj = new File($picture);
        $obj->doUpload();
    }

    class File{
        public $image;
        public $name;
        public $tmp;
        public $size;
        public $ext;


        public function __construct($file){
            $this->image = $file;
            $this->name = $this->image['name'];
            $this->tmp = $this->image['tmp_name'];
            $this->size = $this->image['size'];
            $file_data = pathinfo($this->name);
            $this->ext = strtolower($file_data['extension']);

        }

        public function doUpload(){
            $upload = 'photo/'.$this->name;
            $allowed_size = 307200;
            $allowed_ext = ['jpg','jpeg','png'];
            $error = [];


            if($this->size > $allowed_size){
                $error[] = 'Within 300 kb allowed';
            }
            if(!in_array($this->ext,$allowed_ext)){
                $error[] = "jpg, jpeg, png are allowed";
            }
            if(count($error)>0){
                foreach($error as $err){
                    echo $err . "<br>";
                }
            }
            else{
                $status = move_uploaded_file($this->tmp,$upload);
                if($status)echo "Successfully Uploaded";
            }
        }
        
    }
    
    
    
    
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <b>Picture:</b> <input type="file" name="photo"><br>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>