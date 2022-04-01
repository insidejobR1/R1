<?php
session_start();
include'config.php';
?>
<html>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>
<style>
.gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
</style>
</head>

<!-- <body>
<form action="indexx.php" method="POST" style="background-color:gray";>

<tr>
  <td>User Name
  <br><input type="text" placeholder="first Name" name="uname" required></td>
</tr>
<tr>
  <td>Password
  <br><input type="text" placeholder="Password" name="psw" required></td>
</tr>

<tr><td><input type="submit" value="login" name="Submit"></td></tr>

</form>
</body> -->
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
           <form action="indexx.php" method="post">
            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <div class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" name="email" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" name="psw" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

              <button class="btn btn-outline-light btn-lg px-5" name="submit" type="submit">Login</button>


            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>
       </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php

  if(isset($_POST['submit']))
  {
      $msg ="Invalid username or password.!";
      $email =$_POST['email'];
      $psw =$_POST['psw'];
      $query="SELECT * FROM user WHERE email='$email' AND password='$psw'";
      $sql =mysqli_query($con,$query);
      $count =mysqli_fetch_assoc($sql);

      if($sql>0){
          $_SESSION["email"]= $email;
          location.assign('indexx.php');
          echo"<script>alert('login successfully')</script>";
      }else
      {
       echo"login failed";
      }
  }