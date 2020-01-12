<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type= "text/css" href=../css/style1.css?version=3.2>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

    <title>Hello, world!</title>
  </head>
  <body style="background-image: url('../image.png');
         background-position: center;
  background-repeat: no-repeat;
  background-size:;
    ">
    <div class="container">
       <h4><a href="logout.php" style="float:right; margin-top:20px; padding-right:20px;"><button class="btn btn-primary btn-lg">Logout</button></a></h4>
        <div class="jumbotron text-center login-box" style="margin-top: 100px;
        
       
        ">
      <h1 class="display-4">Welcome to Admin DashBoard</h1>
      <i class="lead">This dashboard is for CRUD(Create, Read, Update, and Delete) operations</i>
      <hr>
    
      <a class="massive ui vertical animated button fluid" href="addemployee.php" role="button" tabindex="0" style="padding:20px; margin-bottom:30px; border-radius:50px;
  text-align: center;
  transition: 0.5s;
  background-size: 200% auto;
  color: white;
  box-shadow: 0 0 20px #eee;
    background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);
  ">
      <div class="visible content">INSERT EMPLOYEE DETAILS</div>
      <div class="hidden content">
      <i><small>Insert the details</small></i>
  </div>
          </a>
          
    <a class="massive ui animated button fluid" href="updateemployee.php" role="button" tabindex="0" style="padding:20px; margin-bottom:30px; border-radius:50px;
                  text-align: center;
                  transition: 0.5s;
                  background-size: 200% auto;
                  color: white;
                  box-shadow: 0 0 20px #eee;
                    background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);">
    <div class="visible content">UPDATE EMPLOYEE DETAILS</div>
        <div class="hidden content">
        <i><small>Update the Employee details</small></i>
    </div>
    </a>
     
     <a class="massive ui diagonal animated button fluid" href="deleteemployee.php" role="button" tabindex="0" style="padding:20px; margin-bottom:30px; border-radius:50px;
                  text-align: center;
                  transition: 0.5s;
                  background-size: 200% auto;
                  color: white;
                  box-shadow: 0 0 20px #eee;
                    background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);">
    <div class="visible content">DELETE EMPLOYEE DETAILS</div>
        <div class="hidden content">
        <i class="trash icon"></i>
    </div>
    </a>
     
     <a class="massive ui diagonal animated button fluid" href="projectdetails.php" role="button" tabindex="0" style="padding:20px; margin-bottom:30px; border-radius:50px;
                  text-align: center;
                  transition: 0.5s;
                  background-size: 200% auto;
                  color: white;
                  box-shadow: 0 0 20px #eee;
                    background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);">
    <div class="visible content">INSERT PROJECT DETAILS</div>
        <div class="hidden content">
            <i><small>Enter Project Details</small></i>
    </div>
    </a>
     
     <a class="massive ui vertical animated button fluid" href="salarydetails.php" role="button" tabindex="0" style="padding:20px; margin-bottom:30px; border-radius:50px;
                  text-align: center;
                  transition: 0.5s;
                  background-size: 200% auto;
                  color: white;
                  box-shadow: 0 0 20px #eee;
                    background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);">
    <div class="visible content">INSERT SALARY DETAILS</div>
        <div class="hidden content">
            <i><small>Enter Salary Details</small></i>
    </div>
    </a>
     
     <a class="massive ui vertical animated button fluid" href="searchbyname.php" role="button" tabindex="0" style="padding:20px; margin-bottom:30px; border-radius:50px;
                  text-align: center;
                  transition: 0.5s;
                  background-size: 200% auto;
                  color: white;
                  box-shadow: 0 0 20px #eee;
                    background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);">
    <div class="visible content">SEARCH BY NAME</div>
        <div class="hidden content">
            <i class="search icon"></i>
    </div>
    </a>
    
    <a class="massive ui vertical animated button fluid" href="searchbysalary.php" role="button" tabindex="0" style="padding:20px; margin-bottom:30px; border-radius:50px;
                  text-align: center;
                  transition: 0.5s;
                  background-size: 200% auto;
                  color: white;
                  box-shadow: 0 0 20px #eee;
                    background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);">
    <div class="visible content">SEARCH BY SALARY</div>
        <div class="hidden content">
            <i class="search icon"></i>
    </div>
    </a>
     
     <a class="massive ui vertical animated button fluid" href="distinctfield.php" role="button" tabindex="0" style="padding:20px; margin-bottom:30px; border-radius:50px;
                  text-align: center;
                  transition: 0.5s;
                  background-size: 200% auto;
                  color: white;
                  box-shadow: 0 0 20px #eee;
                    background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);">
    <div class="visible content">SEARCH BY DISTINCT FIELDS</div>
        <div class="hidden content">
            <i class="upload icon"></i>
    </div>
    </a>
     
     <a class="massive ui vertical animated button fluid" href="avgsalary.php" role="button" tabindex="0" style="padding:20px; margin-bottom:10px; border-radius:50px;
                  text-align: center;
                  transition: 0.5s;
                  background-size: 200% auto;
                  color: white;
                  box-shadow: 0 0 20px #eee;
                    background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);">
    <div class="visible content">AVERAGE SALARY OF AN EMP</div>
        <div class="hidden content">
            <i class="money bill alternate outline icon"></i>
    </div>
    </a>
      
      
    </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
<style>
      
.massive:hover {
  background-position: right center; /* change the direction of the change here */
}
      
      </style>
      
          <script>
              $('')
  .transition('bounce')
;
      </script>   
       
    
  </body>
</html>