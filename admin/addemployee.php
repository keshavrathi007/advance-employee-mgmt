<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap Date-Picker Plugin -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type= "text/css" href=../css/style1.css?version=3.2>
    <title>Hello, world!</title>
  </head>
  <body style="background-image: url('../image.png');
         background-position: center;
  background-repeat: no-repeat;
  background-size:;">
   
    <div class="container">
       <h4><a href="admindash.php" style="float:left; margin-top:20px; padding-left:20px;"><button class="btn btn-primary btn-md">Back to Admin Dashboard</button></a></h4>
       <h4><a href="../login/index.php" style="float:right; margin-top:20px; padding-right:20px;"><button class="btn btn-primary btn-md">Logout</button></a></h4>
        <div class="jumbotron text-center login-box" style="background-color: #fff;
background-image:
linear-gradient(90deg, transparent 79px, #abced4 79px, #abced4 81px, transparent 81px),
linear-gradient(#eee .1em, transparent .1em);
background-size: 100% 1.2em;">
        <br>
        <br>
        <br>
      <h1 class="display-4">Insert Employee Data</h1>
      <hr>
      <form action="addemployee.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
       <table class="table table-striped table-dark">
  <tbody>
    <tr>
      <th scope="row">ID</th>
      <td><input class="form-control" type="number" onKeyPress="if(this.value.length==3) return false;" name="id" placeholder="Enter ID" required min="1" maxlength="3" required></td>
    </tr>
    <tr>
      <th scope="row">NAME</th>
      <td><input class="form-control" type="text" name="name" placeholder="Enter Full Name" required max="10" min="2" maxlength="12" onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"></td>
    </tr>
    <tr>
      <th scope="row">CITY</th>
      <td><input class="form-control" type="text" name="city" placeholder="Enter City" required max="10" min="2" maxlength="12" onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" ></td>
    </tr>
    <tr>
      <th scope="row">GENDER</th>
      <td>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="gender">
        <option selected>Gender</option>
        <option value="1">Male</option>
        <option value="2">Female</option>
        <option value="3">Others</option>
      </select>
      </td>
    </tr>
    <tr>
      <th scope="row">DOB</th>
      <td><input class="form-control" id="date" name="dob" placeholder="MM/DD/YYYY" type="date"/></td>
    </tr>
    <tr>
      <th scope="row">AGE</th>
      <td><input class="form-control" type="number" name="age" placeholder="Enter Age" onKeyPress="if(this.value.length==3|| this.value=='e') return false;" maxlength="3"></td>
    </tr>
      <tr>
      <th scope="row">CONTACT NUMBER</th>
      <td>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">+91</div>
        </div>
      <input class="form-control" type="number" name="pcont" placeholder="Enter Personal Contact" onKeyPress="if(this.value.length>=10) return false;" maxlength="10"></div></td>
    </tr>
    <tr>
      <th scope="row">QUALIFICATION</th>
      <td><input class="form-control" type="text" name="qualification" placeholder="Enter Qualification" required maxlength="12" onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" ></td>
    </tr>
     <tr>
      <th scope="row">FIELD</th>
      <td><input class="form-control" type="text" name="field" placeholder="Enter your Field" required maxlength="20" onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" ></td>
    </tr>
     <tr>
      <th scope="row">SALARY</th>
      <td><input class="form-control" type="number" name="salary" placeholder="Enter Salary"></td>
    </tr>
    <tr>
      <th scope="row">IMAGE</th>
      <td><input class="form-control-file" type="file" name="image" required></td>
    </tr>
     
      
  </tbody>
  
</table>
    <div class="ui buttons">
  <a href="admindash.php"><button class=" ui red  button">Cancel</button></a>
  <div class="or"></div>
  <button class=" ui positive button" name="submit">Submit</button>
</div>
     </div>
      </form>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    
    
  </body>
  
  
</html>


<?php
    include "../dbcon.php";
    if(isset($_POST['submit']))
    {
        
        
        $id=$_POST['id'];
        $name=ucfirst($_POST['name']);
        $city=$_POST['city'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $age=$_POST['age'];
        $contact=$_POST['pcont'];
        $field=$_POST['field'];
        $salary=$_POST['salary'];
        $qualification=$_POST['qualification'];
        $imagename=$_FILES['image']['name'];
        $tempname=$_FILES['image']['tmp_name'];
        
        move_uploaded_file($tempname,"../dataimg/$imagename");
        
        $qry="INSERT INTO `student`(`id`,`name`, `city`, `gender`, `dob`, `age`, `pcont`, `qualification`, `field`, `salary`,`image`) VALUES ('$id','$name','$city','$gender','$dob','$age','$contact','$qualification','$field','$salary','$imagename')";
        
        $run=mysqli_query($con,$qry);
        
        if($run==true)
        {
            ?>
            <script>
                alert('Data Inserted Successfully!');
            </script>
            <?php
        }
    }
    
?>