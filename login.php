<?php

// validation for login form //
$regno = $password = '';
$errors = array('regno' => '', 'password' => '');

if (isset($_POST['submit'])) {
  //echo htmlspecialchars($POST['regno']);

  // check registration field
  $regno = $_POST['regno'];
  if (!preg_match('/^[a-z]{3}-\d{3}-\d{3}\/\d{4}$/i', $regno)) {
    $errors['regno'] = 'Enter a valid registration number!! <br />';
  }

  // check password field 
  $password = $_POST['password'];
  if (!preg_match('/^[\w@\-#!]{8,20}$/i', $password)) {
    $errors['password'] = 'Enter a valid password!! <br />';
  }
}

// end of login form validation //
$firstname = $surname = $telemail = $registration = $password01 = '';

$signuperrors = array('firstname'=>'', 'surname' => '', 'telemail' => '', 'registration' => '', 'password01' => '');

if(isset($_POST['signup'])) {
  // echo htmlspecialchars($_POST['firstname']);

  $firstname = $_POST['firstname'];
  if(!preg_match('/^\s?[(a-zA-Z)]{3,10}$/i', $firstname)){
    $signuperrors['firstname'] = 'Enter a valid First Name <br />';
  }

  // validation for surname 
  $surname = $_POST['surname'];
  if(!preg_match('/^\s?[(a-zA-Z)]{3,10}$/i', $surname)){
    $signuperrors['surname'] = 'Enter a valid Surname!! <br />';
  }

  // validation for mobile number and email
  $telemail = $_POST['telemail'];
  if(!Preg_match('/^\d{10,15}$/', $telemail)){
    $signuperrors['telemail'] = 'Enter a valid email / phone number <br />';
  }

  // validation for registration number 
  $registration = $_POST['registration'];
  if(!preg_match('/^[a-z]{3}-\d{3}-\d{3}\/\d{4}$/i', $registration)){
    $signuperrors['registration'] = 'Enter a valid Registration number!! <br />';
  }

  // validation for password 
  $password01 = $_POST['password01'];
  if(!preg_match('/^[\w@\-#!]{8,20}$/i', $password01)){
    $signuperrors['password01'] = 'Enter a valid password!! <br />';
  }
}

?>


<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap icons link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      background-color: rgb(240, 240, 240);
      background: url(images/wallpaper.jpg);
      background-size: cover;
      height: 100vh;
      min-height: 600px;
      background-position: center;
      overflow: hidden;
    }


    .form-row {
      height: 100vh;
    }

    .form-container {
      padding: 40px 50px;
      border: 0px solid black;
      -webkit-box-shadow: -2px 5px 12px 0px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: -2px 5px 12px 0px rgba(0, 0, 0, 0.75);
      box-shadow: -2px 5px 12px 0px rgba(0, 0, 0, 0.75);
      color: white;
      background: rgba(0, 0, 0, 0.4);
      /* background-color: rgb(220, 220, 220); */
    }

    .modal-style {
      width: 400px;
    }
  </style>

  <title>login page</title>

</head>

<body>
  <div class="container-fluid">
    <div class="row form-row justify-content-center align-items-center">
      <div class="col-10 col-sm-8 col-md-6 col-lg-4 col-xl-4">

        <!-- form 1 /login form-->
        <form method="POST" action="login.php" class="form-container">
          <h5 class="text-center mb-3">WELCOME BACK!!</h5>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Registration Number</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="regno" required value="<?php echo htmlspecialchars($regno); ?>">
            <small class="text-warning"><?php echo $errors['regno']; ?></small>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required value="<?php echo htmlspecialchars($password); ?>">
            <small class="text-warning small"><?php echo $errors['password']; ?></small>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
          </div>
          <button type="submit" class="btn btn-primary w-100 btn-sm" name="submit">Log in</button>


          <div class="my-2 text-center">
            <a href="#" class="text-decoration-none mt-5 ">Forgotten password?</a>
          </div>

          <hr>

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-success btn-sm w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Create new account
          </button>

        </form>



        <!-- Modal -->
        <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-style">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sign Up

                </h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- form 2 / sign up form-->
                <form class="" method="POST" action="login.php">
                  <div class="row mb-1 g-3">
                    <div class="col-md-6">
                      <label for="inputfname" class="form-label"></label>
                      <input type="text" class="form-control" id="inputfname" placeholder="First Name" name="firstname" value="<?php echo htmlspecialchars($firstname); ?>" required>
                      <small class="text-warning"><?php echo $signuperrors['firstname']; ?></small>
                    </div>
                    
                    <div class="col-md-6">
                      <label for="inputsname" class="form-label"></label>
                      <input type="text" class="form-control" id="sname" placeholder="Surname" name="surname" value="<?php echo htmlspecialchars($surname); ?>" required>
                      <small class="text-warning"><?php echo $signuperrors['surname']; ?></small>
                    </div>
                    
                  </div>
                  <div class="col-12">
                    <label for="inputtel" class="form-label"></label>
                    <input type="text" class="form-control" id="inputtel" placeholder="Mobile Number or Email Address" name="telemail" value="<?php echo htmlspecialchars($telemail); ?>" required>
                    <small class="text-danger"><?php echo $signuperrors['telemail']; ?></small>
                  </div>

                  <div class="col-12">
                    <label for="inputregno" class="form-label"></label>
                    <input type="text" class="form-control" id="inputregno" placeholder="Registration Number" name="registration" value="<?php echo htmlspecialchars($registration); ?>" required>
                    <small class="text-danger"><?php echo $signuperrors['registration']; ?></small>
                  </div>
                  <div class="col-12 mb-1">
                    <label for="inputpassword" class="form-label"></label>
                    <input type="password" class="form-control" id="inputpassword" placeholder="New Password" name="password01" value="<?php echo htmlspecialchars($password); ?>" required>
                    <small class="text-danger"><?php echo $signuperrors['password01']; ?></small>
                  </div>
                  <div class="row mb-1 gx-2">
                    <small class="text-secondary" style="margin-bottom: 0;">
                      Date of birth
                      <i class="bi bi-question-circle-fill"></i>
                    </small>
                    <div class="col-4">
                      <label for="inputday" class="form-label"></label>
                      <select id="inputday" class="form-select">
                        <option selected>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                      </select>
                    </div>
                    <div class="col-4" >
                      <label for="inputState" class="form-label"></label>
                      <select id="inputState" class="form-select">
                        <option selected>Jan</option>
                        <option>Feb</option>
                        <option>Mar</option>
                        <option>Apr</option>
                        <option>May</option>
                        <option>Jun</option>
                        <option>Jul</option>
                        <option>Aug</option>
                        <option>Sep</option>
                        <option>Oct</option>
                        <option>Nov</option>
                        <option>Dec</option>
                      </select>
                    </div>
                    <div class="col-4">
                      <label for="inputyear" class="form-label"></label>
                      <select id="inputyear" class="form-select">
                        <option selected>2023</option>
                        <option>2022</option>
                        <option>2021</option>
                        <option>2020</option>
                        <option>2019</option>
                        <option>2018</option>
                        <option>2017</option>
                        <option>2016</option>
                        <option>2015</option>
                        <option>2014</option>
                        <option>2013</option>
                        <option>2012</option>
                        <option>2011</option>
                        <option>2010</option>
                        <option>2009</option>
                        <option>2008</option>
                        <option>2007</option>
                        <option>2006</option>
                        <option>2005</option>
                        <option>2004</option>
                        <option>2003</option>
                        <option>2002</option>
                        <option>2001</option>
                        <option>2000</option>
                        <option>1999</option>
                        <option>1998</option>
                        <option>1997</option>
                        <option>1996</option>
                        <option>1995</option>
                      </select>
                    </div>
                  </div>

                  <div class="row gx-2">
                    <small class="text-secondary">
                      Gender
                      <i class="bi bi-question-circle-fill"></i>
                    </small>
                    <div class="col-4">
                      <div class="form-check form-check-inline border w-100 rounded py-1 px-1">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                        <input class="form-check-input float-end" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-check form-check-inline border w-100 rounded py-1 px-1">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                        <input class="form-check-input float-end" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-check form-check-inline border w-100 rounded py-1 px-1">
                        <input class="form-check-input float-end" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">Custom</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 mt-2">
                    <small class="text-secondary">By clicking Sign Up, you agree to our Terms, Privacy Policy and cookies Policy. You may receive SMS notification from us and can opt at any time. </small>
                  </div>
                  <div class="row mt-4">
                    <div class="col-4"></div>
                    <div class="col-4 ">
                      <button type="submit" class="btn btn-success w-100" name="signup">Sign Up</button>
                    </div>
                    <div class="col-4"></div>
                  </div>



                </form>

              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>