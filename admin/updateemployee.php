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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

    <title>Hello, world!</title>
  </head>
  <body style="background-image: url('../image.png');
         background-position: center;
  background-repeat: no-repeat;
  background-size:">
    <div class="container">
       <h4><a href="admindash.php" style="float:left; margin-top:20px; padding-left:20px;"><button class="btn btn-primary btn-md">Back to Admin Dashboard</button></a></h4>
       <h4><a href="../login/index.php" style="float:right; margin-top:20px; padding-right:20px;"><button class="btn btn-primary btn-md">Logout</button></a></h4>
        <div class="jumbotron text-center login-box" style="margin-top: 100px;
        background-color: #fff;
background-image:
linear-gradient(90deg, transparent 79px, #abced4 79px, #abced4 81px, transparent 81px),
linear-gradient(#eee .1em, transparent .1em);
background-size: 100% 1.2em;
        
       
        ">
           <br>
           <br>
            <h1 class="display-4">Update Employee Details</h1>
      <hr>
      
      <form action="updateemployee.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
       <table class="table table-striped table-dark">
  <tbody>
    <tr>
      <th scope="row">EMPLOYEE ID</th>
      <td><input class="form-control" type="number" name="id" placeholder="Enter Employee ID" onKeyPress="if(this.value.length==3) return false;" required maxlength="3"></td>
    </tr>
    
     
      
  </tbody>
  
</table>
   <button type="submit" class="fluid blue ui button" name="submit"><a href="" class="blue ui animated button fluid">
   <div class="visible content">Search</div>
   <div class="hidden content">
            <i class="search icon"></i>
    </div>
    
    
    </a>
    </button>
    
     </div>
      </form>
    
    <form action="updateemployee.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
       <table class="table table-striped table-dark">
  <tbody>
    <tr>
      <th scope="row">COUNT</th>
      <th scope="row">IMAGE</th>
      <th scope="row">NAME</th>
      <th scope="row">CITY</th>
      <th scope="row">GENDER</th>
      <th scope="row">DOB</th>
       <th scope="row">CONTACT</th>
       <th scope="row">QUALIFICATION</th>
       <th scope="row">FIELD</th>
       <th scope="row">SALARY</th>
        
    </tr>
     <?php
            
    if(isset($_POST['submit']))
        {
        include "../dbcon.php";
         $id=$_POST['id'];
        
        $sql="SELECT * FROM `student` WHERE `id`='$id'";
        $run=mysqli_query($con,$sql);
        
        if(mysqli_num_rows($run)<1)
        {
            echo"<tr><td colspan='5'>no record found</td><tr>";
        }
        else
        {   $count=0;
            while($data=mysqli_fetch_assoc($run))
            {
                    $count++;
                ?>
                <tr>
                      <td scope="row"><?php echo $count; ?></td>
                      <td scope="row"><img src="../dataimg/<?php echo $data['image'];?>" alt="" style="max-width:100px;"></td>
                      <td scope="row"><?php echo $data['name'];?></td>
                      <td scope="row"><?php echo $data['city'];?></td>
                      <td scope="row"><?php echo $data['gender'];?></td>
                      <td scope="row"><?php echo $data['dob'];?></td>
                      <td scope="row"><?php echo $data['pcont'];?></td>
                      <td scope="row"><?php echo $data['qualification'];?></td>
                      <td scope="row"><?php echo $data['field'];?></td>
                      <td scope="row"><?php echo $data['salary'];?></td>
                      <td scope="row"><a href="updateform.php?sid=<?php echo $data['id']; ?>">
                      EDIT</a></td>
        
                </tr>
                <?php
            }
        }
    }
        ?>
     
      
  </tbody>
  
</table>
      
     

      
     </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
  </body>
  
  
</html>