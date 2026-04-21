<!DOCTYPE html>
<html>
    <head>
        <title>Student Form</title>
    </head>
    <h2>Student Details Form</h2>
    <form method="post" action="">
        Name:<br>
        <input type="text" name="name" required><br><br>
        Address:<br>
        <textarea name="address" rows="4" cols="30" required></textarea><br><br>
        Gender:<br>
        <select name="gender" required>
            <option value="">--Select--</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br><br>
        <input type="radio" name="course" value="FY BCA" required>FY BCA<br>
        <input type="radio" name="course" value="SY BCA" required>SY BCA<br>
        <input type="radio" name="course" value="TY BCA" required>TY BCA<br> 
        Hobbies:<br>
        <input type="checkbox" name="hobbies[]" value="Travelling">Travelling<br>
        <input type="checkbox" name="hobbies[]" value="Dancing">Dancing<br><br>
        <input type="submit" name="submit" value="submit">
        </form>
        <?php
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $address=$_POST['address'];
            $gender=$_POST['gender'];
            $course=$_POST['course'];
            $hobbies=isset($_POST['hobbies'])? $_POST['hobbies']:[];
            echo "<h2> Submitted Details </h2>";
            echo "Name:".htmlspecialchars($name)."<br>";
            echo "Address:".nl2br(htmlspecialchars($address))."<br>";
            echo "gender:".htmlspecialchars($gender)."<br>";
            echo "course:".htmlspecialchars($course)."<br>";
            echo "Hobbies:";
            if(!empty($hobbies)){
                echo htmlspecialchars(implode(",",$hobbies));
            }
            else{             
                echo "None";
            }
        }
        ?>
        </body>
        </html>
