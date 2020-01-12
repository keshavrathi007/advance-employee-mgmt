<?php
    include "../dbcon.php";
        
        
        $id=$_POST['id'];
        $name=$_POST['name'];
        $city=$_POST['city'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $age=$_POST['age'];
        $contact=$_POST['pcont'];
        $field=$_POST['field'];
        $sid=$_POST['sid'];
        $salary=$_POST['salary'];
        $qualification=$_POST['qualification'];
        $imagename=$_FILES['image']['name'];
        $tempname=$_FILES['image']['tmp_name'];
        
        move_uploaded_file($tempname,"../dataimg/$imagename");
        
        $qry="UPDATE `student` SET `id`='$id',`name`='$name',`city`='$city',`gender`='$gender',`dob`='$dob',`age`='$age',`pcont`='$contact',`qualification`='$qualification',`field`='$field',`salary`='$salary',`image`='$imagename' WHERE `id`=$sid;";
        
        $run=mysqli_query($con,$qry);
        
        if($run==true)
        {
            ?>
            <script>
                alert('Data Updated Successfully!');
                window.open('updateform.php?sid=<?php echo $sid; ?>','_self');
            </script>
            <?php
        }
    
    
?>