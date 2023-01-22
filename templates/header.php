<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap 5 css link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- bootstrap 5 icons link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!-- css file link -->
  <link rel="stylesheet" href="styles.css">

  <title>MULTIMEDIA UNIVERSITY OF KENYA</title>
  <style>

    /* styles for carousel */
     /* background image of carousel */
     .bg-img-1 {
      background-image: url(images/new/bg10.jpg);
    }

    .bg-img-2 {
      background-image: url(images/new/bg11.jpg);
    }

    .bg-img-3 {
      background-image: url(images/new/bg13.jpg);
    }

    /* carousel itself*/
    .carousel-item {
      height: 32rem;
      background: no-repeat scroll center scroll;
      -webkit-background-size: cover;
      background-size: cover;
    }

    .carousel-item::before {
      content: "";
      display: block;
      position: absolute;
      top: 0;
      bottom: 0;
      right: 0;
      left: 0;
      background: #000;
      opacity: 0.7;
    }

    .bg-new{
      background-color: rgb(30, 30, 30) !important;
    }

    /* carousel-caption */
    .carousel-caption{
      bottom: 180px;
      padding-left: 100px;
      padding-right: 100px;

    }

    /* end of carousel */



    .navbar .navbar-brand{
      font-size: 25px;
    }

    .navbar .navbar-nav .nav-link{
      font-size: 13px;
      color: white;
      font-style: Sans-serif;
    }

    /* styling links on hover in footer.php file */

  </style>

</head>

<body>

  <!-- using header to have a background image -->
  <header>

    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-light fixed-top bg-transparent">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/websitebanner.png" style="width: 25vw;" class="img-fluid" alt="">

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-uppercase">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>

            <!-- dropdown menu -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                MMU Portal
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="login.php" target="_blank">Student Portal</a></li>
                <li><a class="dropdown-item" href="#">Parent Portal</a></li>
                <li><a class="dropdown-item" href="#">Staff Portal</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">School Pages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.php" target="_blank">Gallery</a>
            <li class="nav-item">
              <a class="nav-link" href="registrationform.php" target="_blank">Registration Form</a>
            </li>
        </div>
      </div>
    </nav>

   







  <!-- bootstrap 5 js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- jquery cdn links -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    var nav =document.querySelector('nav');
    window.addEventListener('scroll',function () {
      if(window.pageYOffset > 100){
        nav.classList.add('bg-new');
      } else{
        nav.classList.remove('bg-new');
      }
    })
  </script>