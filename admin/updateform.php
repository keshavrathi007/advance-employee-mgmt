<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type= "text/css" href=../css/style1.css?version=3.2>

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
       <h4><a href="admindash.php" style="float:left; margin-top:20px; padding-left:20px;">Back to Admin Board</a></h4>
       <h4><a href="logout.php" style="float:right; margin-top:20px; padding-right:20px;">Logout</a></h4>
        <div class="jumbotron text-center login-box">
      <h1 class="display-4">Welcome To My Admin DashBoard</h1>
      <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum necessitatibus perspiciatis cum vitae, modi hic?</p>
      <hr>
      
      <?php
            include "../dbcon.php"; 
            $sid=$_GET['sid'];
            $sql="SELECT * FROM `student` WHERE `id`='$sid'";
            $run=mysqli_query($con,$sql);
            
            $data=mysqli_fetch_assoc($run);
      ?>
      <form action="updatedata.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
       <table class="table table-striped table-dark">
  <tbody>
    <tr>
      <th scope="row">ID</th>
      <td><input class="form-control" type="text" name="id" value=<?php echo $data['id']; ?> required></td>
    </tr>
    <tr>
      <th scope="row">NAME</th>
      <td><input class="form-control" type="text" name="name" value=<?php echo $data['name']; ?> required></td>
    </tr>
    <tr>
      <th scope="row">CITY</th>
      <td><input class="form-control" type="text" name="city" value=<?php echo $data['city']; ?> required></td>
    </tr>
    <tr>
      <th scope="row">GENDER</th>
      <td><input class="form-control" type="text" name="gender" value=<?php echo $data['gender']; ?> required></td>
    </tr>
    <tr>
      <th scope="row">DOB</th>
      <td><input class="form-control" id="date" name="dob" value=<?php echo $data['dob']; ?> type="text"/></td>
    </tr>
    <tr>
      <th scope="row">AGE</th>
      <td><input class="form-control" type="text" name="age" value=<?php echo $data['age']; ?> required></td>
    </tr>
      <tr>
      <th scope="row">CONTACT NUMBER</th>
      <td><input class="form-control" type="text" name="pcont" value=<?php echo $data['pcont']; ?> required></td>
    </tr>
    <tr>
      <th scope="row">QUALIFICATION</th>
      <td><input class="form-control" type="text" name="qualification" value=<?php echo $data['qualification']; ?> required></td>
    </tr>
     <tr>
      <th scope="row">FIELD</th>
      <td><input class="form-control" type="text" name="field" value=<?php echo $data['field']; ?> required></td>
    </tr>
     <tr>
      <th scope="row">SALARY</th>
      <td><input class="form-control" type="text" name="salary" value=<?php echo $data['salary']; ?> ></td>
    </tr>
    <tr>
      <th scope="row">IMAGE</th>
      <td><input class="form-control-file" type="file" name="image" required></td>
    </tr>
     
      
  </tbody>
  
</table>
   <input type="hidden" value="<?php echo $data['id']; ?>" name="sid" />
    <button type="submit" class="btn btn-primary btn-block btn-lg" name="submit">Submit</button>
     </div>
      </form>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  
  
</html>