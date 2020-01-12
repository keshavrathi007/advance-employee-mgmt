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
    
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type= "text/css" href=../css/style1.css?version=3.2>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
       <h4><a href="admindash.php" style="float:left; margin-top:20px; padding-left:20px;"><button class="btn btn-primary btn-md">Back to Admin Dashboard</button></a></h4>
       <h4><a href="logout.php" style="float:right; margin-top:20px; padding-right:20px;"><button class="btn btn-primary btn-md">Logout</button></a></h4>
        <div class="jumbotron text-center login-box">
        <br>
        <br>
        <br>
      <h1 class="display-4">Insert Employee Data</h1>
      <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum necessitatibus perspiciatis cum vitae, modi hic?</p>
      <hr>
      <form action="projectdetails.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
       <table class="table table-striped table-dark">
  <tbody>
    <tr>
      <th scope="row">ID</th>
      <td><input class="form-control" type="number" onKeyPress="if(this.value.length==3) return false;" name="id" placeholder="Enter ID" required min="1" maxlength="3"></td>
    </tr>
    <tr>
      <th scope="row">PROJECT ID</th>
      <td><input class="form-control" type="number" name="project_id" placeholder="Enter Full Name" required min="1" maxlength="3"></td>
    </tr>
    
    <tr>
      <th scope="row">TYPE</th>
      <td>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="type" type="text">
        <option selected>type</option>
        <option value="1">A</option>
        <option value="2">B</option>
        <option value="3">C</option>
      </select>
      </td>
    </tr>
    
    <tr>
      <th scope="row">TYPE OF WORK</th>
      <td>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="type_of_work" type="text">
        <option selected>type of work</option>
        <option value="1">Maintainance</option>
        <option value="2">Developing</option>
        <option value="3">Full Stack Parking</option>
        <option value="3">Multilevel Parking</option>
      </select>
      </td>
    </tr>
    <tr>
      <th scope="row">PROJECT COMPLETION</th>
      <td><input class="form-control" id="date" name="completion_date" placeholder="MM/DD/YYYY" type="date"/></td>
    </tr>
    <tr>
      <th scope="row">REMARK</th>
      <td>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="remark" type="text">
        <option selected>Remark</option>
        <option value="1">Average</option>
        <option value="2">Good</option>
        <option value="3">Outstanding</option>
      </select>
      </td>
    </tr>
     
      
  </tbody>
  
</table>
    <button type="submit" class="btn btn-primary btn-block btn-lg" name="submit">Submit</button>
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
    
    
  </body>
  
  
</html>


<?php
    include "../dbcon.php";
    if(isset($_POST['submit']))
    {
        
        
        $id=$_POST['id'];
        $project_id=$_POST['project_id'];
        $type=$_POST['type'];
        $type_of_work=$_POST['type_of_work'];
        $completion_date=$_POST['completion_date'];
        $remark=$_POST['remark'];
        
        
        $qry="INSERT INTO `project`(`id`, `project_id`, `type`, `type_of_work`, `completion_date`, `remark`) VALUES ('$id','$project_id','$type','$type_of_work','$completion_date','$remark')";
        
        $run=mysqli_query($con,$qry);
        
        if($run==true)
        {
            ?>
            <script>
                alert('Data Inserted Successfully!');
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert('Data Cannot be Inserted');
            </script>
            <?php
        }
    }
    
?>