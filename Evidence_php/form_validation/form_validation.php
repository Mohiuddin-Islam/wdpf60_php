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
    
    if(isset($_POST['submit'])){
        extract($_POST);

        $msg = "";
        $msg1 = "";
        $msg2 = "";
        $msg3 = "";
        $msg4 = "";
        $msg5 = "";

        if(empty($name)){
            $msg = "Fill up this Filed";
        }
        if(empty($address)){
            $msg1 = "Fill up this Filed";
        }
        if(empty($date)){
            $msg2 = "Fill up this Filed";
        }
        if(empty($gender)){
            $msg3 = "Fill up this Filed";
        }
        if(empty($district)){
            $msg4 = "Fill up this Filed";
        }
        if(empty($hobbies)){
            $msg5 = "Fill up this Filed";
        }

        if(!empty($name) & !empty($address) & !empty($date) & !empty($gender) & !empty($district) & !empty($hobbies)){
            echo "<h3 style= 'color:green'>Validation Ok</h3>";
        }

    }
    
    ?>

    <fieldset style="width: fit-content;">
    <form action="" method="post">
        <b>Name:</b> <br>
        <input type="text" name="name" placeholder="Enter Name"><br>
        <?php 
        if(isset($_POST['submit'])){
            echo "<h4 style= 'color:red'>$msg</h4>";
        }
        ?>

        <b>Address:</b> <br>
        <textarea name="address" placeholder="Enter Address Here"></textarea><br>
        <?php 
        if(isset($_POST['submit'])){
            echo "<h4 style= 'color:red'>$msg1</h4>";
        }
        ?>

        <b>Date of Birth:</b> <br>
        <input type="date" name="date"><br>
        <?php 
        if(isset($_POST['submit'])){
            echo "<h4 style= 'color:red'>$msg2</h4>";
        }
        ?>

        <b>Gender:</b> <br>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female <br>
        <?php 
        if(isset($_POST['submit'])){
            echo "<h4 style= 'color:red'>$msg3</h4>";
        }
        ?>

        <b>District:</b>
        <select name="district">
            <option value="">Choose One</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Barisal">Barisal</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Cumilla">Cumilla</option>
        </select><br>
        <?php 
        if(isset($_POST['submit'])){
            echo "<h4 style= 'color:red'>$msg4</h4>";
        }
        ?>

        <b>Hobbies:</b> <br>
        <input type="checkbox" name="hobbies" value="cricket">Cricket
        <input type="checkbox" name="hobbies" value="football">Football
        <input type="checkbox" name="hobbies" value="tennis">Tennis
        <input type="checkbox" name="hobbies" value="badminton">Badminton <br><br>
        <?php 
        if(isset($_POST['submit'])){
            echo "<h4 style= 'color:red'>$msg5</h4>";
        }
        ?>
        <input type="submit" name="submit" value="Register">

    </form>
    </fieldset>
</body>
</html>