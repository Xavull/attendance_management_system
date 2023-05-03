<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN |Online WFH Employee Attendance System</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
    <style>
        html, body{
            height:100%;
        }
        .card {
           position: relative;
           display: flex;
           flex-direction: column;
           min-width: 0;
           word-wrap: break-word;
           background-color: rgb(193, 193, 214);
           background-clip: border-box;
           border: 3px solid rgba(0, 0, 0, 0.125);
           color: white;
           font-size: large;
           border-radius: 0.25rem;
           background: border-box;
           border-color: red;
           border-width: thick;
       } 
        #background-video {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
        }
        .bg-video {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            overflow: hidden;
            z-index: -1;
        }
        .bg-video video {
            min-width: 100%;
            min-height: 100%;
            object-fit: cover;
        }
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100%;
        }
        .card {
            width: 100%;
            max-width: 400px;
        }
        img.logo {
            max-height: 400px;
        }
    </style>
</head>
<body class="bg-dark bg-gradient">
   <div class="bg-video">
       <video autoplay muted loop>
           <source src="./Videos/Office .mp4" type="video/mp4">
       </video>
   </div>
   <div class="center">
       <img src="./Images/logo.png" class="logo mb-4">
            <h3 class="py-5 text-center text-light">Online WFH Employee Attendance System</h3>
            <div class="card my-3 ">
                <div class="card-body">
                    <form action="" id="login-form">
                        <center><small>Please your credentials.</small></center>
                        <div class="form-group">
                            <label for="email" class="control-label">Email</label>
                            <input type="email" id="email" autofocus name="email" class="form-control form-control-sm rounded-0" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" id="password" autofocus name="password" class="form-control form-control-sm rounded-0" required>
                        </div>
                        <div class="form-group d-flex w-100 justify-content-end">
                            <button class="btn btn-sm btn-primary rounded-0 my-1">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>