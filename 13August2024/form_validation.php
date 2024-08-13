<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <h1>Registration Form</h1>

    <?php 

    if(isset($_REQUEST['submit'])){
        $msg = form_validation();
        if($msg){
            echo "<ul>";
            foreach($msg as $m){
                echo "<li>$m</li>";
            }
            echo "</ul>";
        }else{
            echo "<h4 style= 'color:green'>Validation Ok</h4>";
        }

    
    }
    function form_validation(){
        $errors = [];
        
        $fullname = $_REQUEST['fullname'];
        if($fullname == ""){
            $errors[] = "<h4 style= 'color:red'>You must enter Fullname</h4>";
            }

        $district = $_REQUEST['district'];
        if($district == ""){
            $errors[] = "<h4 style= 'color:red'>You must select District</h4>";
            }

        $address = $_REQUEST['address'];
        if($address == ""){
            $errors[] = "<h4 style= 'color:red'>You must enter Address</h4>";
            }

        $hobbies = $_REQUEST['hobbies'];
        if($hobbies == ""){
            $errors[] = "<h4 style= 'color:red'>You must select Hobbies</h4>";
            }


        return $errors;
    }
    
    
    
    
    ?>
    <fieldset style="width: fit-content;">

    <form action="" method="post">
        <b>Name:</b> <br>
    <input type="text" name="fullname" placeholder="Enter Your Fullname"><br>
    <b>Gender:</b> <br>
    <input type="radio" name="gender" value="male" checked>Male
    <input type="radio" name="gender" value="female">Female <br>

    <b>District:</b> <br>
    <select name="district">
        <option value="">Choose One</option>
        <option value="Dhaka">Dhaka</option>
        <option value="Cumilla">Cumilla</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Pabna">Pabna</option>
    </select><br>

    <b>Hobbies:</b> <br>
    <input type="checkbox" name="hobbies[]" value="cricket" checked>Cricket
    <input type="checkbox" name="hobbies[]" value="football">Football
    <input type="checkbox" name="hobbies[]" value="hockey">Hockey
    <input type="checkbox" name="hobbies[]" value="tennis">Tennis <br>

    <b>Address:</b> <br>
    <textarea name="address" placeholder="Enter Address Here"></textarea><br>
    <input type="submit" name="submit" value="REGISTER">

    </form>
    </fieldset>
</body>
</html>