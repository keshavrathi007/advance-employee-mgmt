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
      
      <form action="distinctfield.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
       <table class="table table-striped table-dark">
</table>
     </div>
      </form>
    
    <form action="updateemployee.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
       <table class="table table-striped table-dark">
  <tbody>
    <tr>
      <th scope="row">COUNT</th>
       <th scope="row">FIELD</th>
        
    </tr>
     <?php
            
   // if(isset($_POST['submit']))
        {
        include "../dbcon.php";
        // $salary=$_POST['field'];
        
        $sql="SELECT DISTINCT field FROM `student`";
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
                      <td scope="row"><?php echo $data['field'];?></td>
                      <td scope="row"><a href="viewdistinctfield.php?field=<?php echo $data['field']; ?>">VIEW</a></td>
        
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
  </body>
  
  
</html>