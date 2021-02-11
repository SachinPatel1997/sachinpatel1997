<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script>
    function formvalidation(){
       // alert("Check Validation");
       var firstname=$('#firstname').val();
        var lastname=$('#lastname').val();
        var gender = $('.gender').val();
        var email=$('#email').val();
        var passwsord=$('#password').val();
        var passlength=$("#password").val().length;
      // alert(name);
      if(firstname=='')
      {
          alert("Please Enter Your FirstName");
          return false;
      }
       if(lastname=='')
      {
          alert("Please Enter Your LastName");
          return false;
      }
       if(gender=='')
       {
           alert("Please Enter Male Or Female");
           return false;
       }
       if(email=='')
      {
          alert("Please Enter Your Email");
          return false;
      }
       if(password=='')
      {
          alert("Please Enter Your Password");
          return false;
      }
       if( passlength<=4)
      {
          alert("Please Enter minimum 5 digit Password");
          return false;
      }
    }
    </script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Sachin Patel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item">
        <a class="nav-link" href="registration.php">Registration</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
    </ul>
      
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
   
  </div>
</nav>


   <form action="registration_code.php" method="POST" onsubmit="return formvalidation();">
    <div class="form-group">
    <label for="">FirstName</label>
    <input type="firstname" class="form-control" id="firstname" name="firstname"  placeholder="Enter FirstName">
  </div>
  <div class="form-group">
    <label for="">LastName</label>
    <input type="lastname" class="form-control" id="lastname" name="lastname" placeholder="Enter LastName">
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Gender:</label>
    <div class="col-sm-6">
      <label class="radio-inline"><input type="radio" name="gender" class="gender" value="Male">Male</label>
	  <label class="radio-inline"><input type="radio" name="gender" class="gender" value="Female">Female</label>
    </div>
  </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control" id="email" name="email"  placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form> 
</body>
</html>
