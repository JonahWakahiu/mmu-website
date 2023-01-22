<?php

// connect to the database 
$conn = mysqli_connect('localhost', 'jonah01', 'pass1234', 'mmu_records');

// check the connection 
if(!$conn){
    echo 'Connection error:' . mysqli_connect_error();
}




$fname = $lname = $email = $tel = $DOB = $age = $nationality = $gender = $exampleradios = $applicationfor = $levels = $courses = '';
$errors = array(
    'fname' => '', 'lname' => '', 'email' => '', 'tel' => '', 'DOB' => '', 'age' => '', 'gender' => '', 'nationality' => '',
    'exampleradios' => '', 'applicationfor' => '', 'levels' => '', 'courses' => ''
);

if (isset($_POST['submit'])) {

    // check fname field
    if (empty($_POST['fname'])) {
        $errors['fname'] = 'This field is required!! <br />';
    } else {
        $fname = $_POST['fname'];
        if (!preg_match('/^\s?[(a-zA-Z)]{3,10}$/i', $fname)) {
            $errors['fname'] = 'enter a valid first name';
        }
    }

    // check lname field
    if (empty($_POST['lname'])) {
        $errors['lname'] = 'This field is required!! <br />';
    } else {
        $lname = $_POST['lname'];
        if (!preg_match('/^\s?[(a-zA-Z)]{3,10}$/i', $lname)) {
            $errors['lname'] = 'enter a valid last name';
        }
    }

    // check email field
    if (empty($_POST['email'])) {
        $errors['email'] = 'This field is required!! <br />';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'enter a valid email address <br />';
        }
    }

    // check phone number field
    if (empty($_POST['tel'])) {
        $errors['tel'] = 'This field is required!! <br />';
    } else {
        $tel = $_POST['tel'];
        if (!preg_match('/^[0-9]{10}$/', $tel)) {
            $errors['tel'] = 'enter a valid Phone number';
        }
    }

    // check date of birth field
    if (empty($_POST['DOB'])) {
        $errors['DOB'] = 'This field is required!! <br />';
    } else {
        $DOB = $_POST['DOB'];
    }

    // check age field
    if (empty($_POST['age'])) {
        $errors['age'] = 'Age is required!! <br />';
    } else {
        $age = $_POST['age'];
        if (!filter_var($age, FILTER_VALIDATE_INT)) {
            $errors['age'] =  'enter a valid age in number form!! <br />';
        }
    }

    // check gender field
    if (empty($_POST['gender'])) {
        $errors['gender'] =  'This field is required!! <br />';
    } else {
        $gender = $_POST['gender'];
    }

    // check nationality field
    if (empty($_POST['nationality'])) {
        $errors['nationality'] =  'This field is required!! <br />';
    } else {
        $nationality = $_POST['nationality'];
        if (!preg_match('/^\s?[(a-zA-Z)]{3,10}$/i', $nationality)) {
            $errors['nationality'] = 'enter a valid nationality';
        }
    }

    // check application-type field
    if (empty($_POST['exampleradios'])) {
        $errors['exampleradios'] =  'This field is required!! <br />';
    } else {
        $exampleradios = $_POST['exampleradios'];
    }

    // check application-for field
    if (empty($_POST['applicationfor'])) {
        $errors['applicationfor'] =  'This field is required!! <br />';
    } else {
        $applicationfor = $_POST['applicationfor'];
    }

    // check year level field
    if (empty($_POST['levels'])) {
        $errors['levels'] =  'This field is required!! <br />';
    } else {
        $levels = $_POST['levels'];
    }

    // check course field
    if (empty($_POST['courses'])) {
        $errors['courses'] =  'This field is required!! <br />';
    } else {
        $courses = $_POST['courses'];
    }

    /*if (array_filter($errors)) {
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $tel = mysqli_real_escape_string($conn, $_POST['tel']);
        $DOB = mysqli_real_escape_string($conn, $_POST['DOB']);
        $age = mysqli_real_escape_string($conn, $_POST['age']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
        $exampleradios = mysqli_real_escape_string($conn, $_POST['exampleradios']);
        $applicationfor = mysqli_real_escape_string($conn, $_POST['applicationfor']);
        $levels = mysqli_real_escape_string($conn, $_POST['levels']);
        $courses = mysqli_real_escape_string($conn, $_POST['courses']);


        // create sql
        $sql = "INSERT INTO student_info(first_name, last_name, email, phone_number, date_of_birth, Age, Gender, nationality, application_type, application_for, year_of_study, course_applied) VALUES('$fname', '$lname', '$email', '$tel', '$DOB', '$age', '$gender', '$nationality', '$exampleradios', '$applicationfor', '$levels', '$courses')";


        // connect to db and check
        if(mysqli_query($conn, $sql)){
            // success
             header('location: index.php');
        } else {
            echo 'query error: ' . mysqli_error($conn);
        }
    } */
    if(array_filter($errors)) {
        // echo errors in the form
    } else {
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $tel = mysqli_real_escape_string($conn, $_POST['tel']);
        $DOB = mysqli_real_escape_string($conn, $_POST['DOB']);
        $age = mysqli_real_escape_string($conn, $_POST['age']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
        $exampleradios = mysqli_real_escape_string($conn, $_POST['exampleradios']);
        $applicationfor = mysqli_real_escape_string($conn, $_POST['applicationfor']);
        $levels = mysqli_real_escape_string($conn, $_POST['levels']);
        $courses = mysqli_real_escape_string($conn, $_POST['courses']);

         // create sql
         $sql = "INSERT INTO student_info(first_name, last_name, email, phone_number, date_of_birth, Age, Gender, nationality, application_type, application_for, year_of_study, course_applied) VALUES('$fname', '$lname', '$email', '$tel', '$DOB', '$age', '$gender', '$nationality', '$exampleradios', '$applicationfor', '$levels', '$courses')";

         // connect to db and check
         if(mysqli_query($conn, $sql)){
            // success
            // header('location: index.php');
        } else {
            echo 'query error: ' . mysqli_error($conn);
        }
    }


} // end of POST CHECK

?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 5 css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css file link -->
    <link rel="stylesheet" href="styles.css">

    <title>Registration Form</title>
    <style>
        body {
            background-color: #f1f1f1;
        }

        .border-class {
            border: 0px solid #fff;
            padding: 50px 60px;
            -webkit-box-shadow: -1px 4px 17px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: -1px 4px 17px 0px rgba(0, 0, 0, 0.75);
            box-shadow: -1px 4px 17px 0px rgba(0, 0, 0, 0.75);
        }
    </style>
</head>

<body>

    <section>
        <div class="container-sm">
            <div class="row justify-content-center my-4">
                <div class="col-10 col-sm-9 col-md-8 border-class">

                    <h3 class="border-top border-bottom py-3 text-center text-success">STUDENT DETAILS</h3>
                    <!-- registration form -->
                    <form method="POST" action="registrationform.php">
                        <!-- form input for full name -->

                        <!-- personnal Information -->
                        <h4>Basic Information</h4>
                        <div class="row mb-3">
                            <h6 class="fst-italic">Full Name</h6>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="Jonah" value="<?php echo htmlspecialchars($fname); ?>">
                                <label for="fname" class="form-label">First Name:</label>
                                <div class="text-danger"> <?php echo $errors['fname']; ?></div>
                            </div>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Wakahiu" value="<?php echo htmlspecialchars($lname); ?>">
                                <label for="lname" class="form-label">Last Name:</label>
                                <div class="text-danger"> <?php echo $errors['lname']; ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-sm-6">
                                <label for="email" class="form-label">Your Email:</label>
                                <input type="text" class="form-control" id="email" placeholder="jonah12@gmail.com" name="email" value="<?php echo htmlspecialchars($email); ?>">
                                <div class="text-danger"> <?php echo $errors['email']; ?></div>
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label for="tel" class="form-label">Phone Number:</label>
                                <input type="text" class="form-control" id="tel" name="tel" placeholder="0724248957" value="<?php echo htmlspecialchars($tel); ?>">
                                <div class="text-danger"> <?php echo $errors['tel']; ?></div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <label for="date" class="form-label">Date of Birth:</label>
                                <input type="text" class="form-control" id="date" name="DOB" placeholder="12/02/1973" value="<?php echo htmlspecialchars($DOB); ?>">
                                <div class="text-danger"> <?php echo $errors['DOB']; ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-sm-3">
                                <label for="age" class="form-label">Age:</label>
                                <input type="text" class="form-control" id="age" name="age" placeholder="12" value="<?php echo htmlspecialchars($age); ?>">
                                <div class="text-danger"> <?php echo $errors['age']; ?></div>
                            </div>
                        </div>
                        <!-- form input for gender -->

                        <div class=" mb-3">
                            <h6 class="fst-italic">Gender:</h6>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gender" class="form-check-input" id="male" value="Male">
                                <label for="male" class="form-check-label">Male</label>

                            </div>
                            <div class=" form-check form-check-inline">
                                <input type="radio" name="gender" class="form-check-input" id="female" value="Female">
                                <label for="female" class="form-check-label">Female</label>
                            </div>
                            <div class="text-danger"> <?php echo $errors['gender']; ?></div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-sm-4">
                                <label for="nationality" class="form-label">Nationality:</label>
                                <input type="text" class="form-control" id="nationality" placeholder="kenyan" name="nationality" value="<?php echo htmlspecialchars($nationality); ?>">
                                <div class="text-danger"> <?php echo $errors['nationality']; ?></div>
                            </div>
                        </div>

                        <!-- end first part of the form -->
                        <div class="border-bottom" style=" margin: 20px 0 30px"></div>

                        <h4 class="border-bottom border-top py-3 my-3">Academic Information:</h4>

                        <div class="mb-3">
                            <h6 class="fst-italic">Application type:</h6>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="exampleradios" id="freshman" value="Freshman">
                                <label for="freshman" class="form-check-label">Freshman</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="transferee" name="exampleradios" value="Transferee">
                                <label for="transferee" class="form-check-label">Transferee</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="other" name="exampleradios" value="Others">
                                <label for="other" class="form-check-label">Others</label>
                            </div>
                            <div class="text-danger"> <?php echo $errors['exampleradios']; ?></div>
                        </div>


                        <div class="mb-3">
                            <h6 class="fst-italic">Admission Application For:</h6>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="applicationfor" id="semester1" value="1st Semester">
                                <label for="semester1" class="form-check-label">1st Semester</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="applicationfor" id="semester2" value="2nd Semester">
                                <label for="semester2" class="form-check-label">2nd Semester</label>
                            </div>
                            <div class="text-danger"> <?php echo $errors['applicationfor']; ?></div>

                        </div>

                        <div class="row">
                            <h6>Year level:</h6>
                            <div class="mb-3 col-sm-3 ">

                                <select class="form-select" aria-label="Default select example" name="levels">
                                    <option selected value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                <div class="text-danger"> <?php echo $errors['levels']; ?></div>
                            </div>
                        </div>

                        <div class="row">
                            <h6 class="fst-italic">Course Applied for:</h6>
                            <div class="mb-3 col-sm-10">

                                <select class="form-select" aria-label="Default select example" name="courses">
                                    <option selected value="computer science">Computer Science</option>
                                    <option value="Applied Physics and Computer Science">Applied Physics and Computer Science</option>
                                    <option value="Mathematics and Compute Science">Mathematics and Computer Science</option>
                                    <option value="Information Technology">Information Technology</option>
                                </select>
                                <div class="text-danger"> <?php echo $errors['courses']; ?></div>
                            </div>
                        </div>

                        <div class="d-grid justify-content-center mb-3">
                            <button class="btn btn-success" type="submit" name="submit">Submit</button>
                        </div>

                        <div class="border-bottom"></div>

                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>