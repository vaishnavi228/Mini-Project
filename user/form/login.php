<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER LOGIN</title>
    <!-- bootstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 bg-white shadow m-auto mt-5 font-monospace border border-info">
                <p class="text-white bg-success fs-3 fw-bold my-3 text-center">User Login</p>
                <form action="login1.php" method="POST">
                    <div class="mb-3">
                        <label for="username">User Name or email : </label>
                        <input type="text" name="name" placeholder="enter  user name" class="form-control">
                    </div>


                    <div class="mb-3">
                        <label for="username">User password : </label>
                        <input type="password" name="password" placeholder="enter  user name" class="form-control">
                    </div>
                    
                    

                    <div class="mb-3">

                        <button class="w-100 bg-warning fs-4 text-white">Login</button>
                    </div>

                    <div class="mb-3">

                        <button name="submit" class="w-100 bg-primary fs-4 text-white"><a href="register.php" class="text-decoration-none text-white">Register</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>