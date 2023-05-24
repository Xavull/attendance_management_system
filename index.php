<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/js/bootstrap.bundle.min.js" />
  <link rel="stylesheet" href="assets/css/style-land.css" />
  <title>InvestHood Docs</title>
  <style>
    /* Additional CSS */
    .white-label {
      color: white;
    }
    .center-button {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }
    label{
      color: #fff;
    }
  </style>
</head>
<body class="index">
  <video autoplay muted loop style="position: fixed; top: 0; left: 0; min-width: 100%; min-height: 100%; z-index: -1;">
    <source src="assets/videos/office.mp4" type="video/mp4">
  </video>

  <div class="center">
    <!-- beginning of navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand text-danger" href="index.php"><img src="assets/images/logo.png" class="logo mb-4" style="max-height: 150px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- end of navbar -->
    <!-- beggining of login form -->
    <center>
      <div
        style="width: 30%; border: 4px solid red; padding: 15px; margin: 20px;"
      >
     <!-- <video autoplay muted loop>
           <source src="assets/videos/Office.mp4" type="video/mp4">
       </video> -->
        <form action="backend/login.php" class="mt-5" method="post">
          <h2 class="text-center text-danger">LOGIN HERE</h2>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input
              type="email"
              name="email"
              class="form-control form-control-sm"
              id="email"
              aria-describedby="emailHelp"
            />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input
              type="password"
              name="password"
              class="form-control form-control-sm"
              id="password"
            />
          </div>
          <button type="submit" name="submit" class="btn btn-danger">
            Login
          </button>
        </form>
      </div>
    </center>


    <!-- beginning of login form -->
    
    <!-- end of login form -->
  </div>
</body>
</html>
