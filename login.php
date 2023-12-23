<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="file:///C:/Users/Hatim%20Meftahi/Downloads/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="file:///C:/Users/Hatim%20Meftahi/Downloads/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <title>Login</title> 
  </head>
  <body>
  <div class="container text-center mt-5">
    <form style="max-width:300px;margin:auto;" class="border shadow p-3 rounded" action="chk-login.php" method="post">
        <img class="mt-4 mb-4" src="logo.png" alt="logo" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
        <?php if(isset($_GET['error'])){ ?>
        <div class="alert alert-danger" role="alert">
            <?=$_GET['error']?>
        </div>
        <?php }?>
        <input type="text" id="username" class="form-control" placeholder="Username" name="username" required autofocus>
        <input type="password" id="password" class="form-control mt-3" placeholder="Password" name="password" Required>
        <!--<select class="form-select mt-4" name="role">
            <option value="responsable" selected>Responsable</option>
            <option value="user" selected>User</option>
        </select>
        <div class="checkbox mt-4">
            <label>
                <input type="checkbox" value="Remember me"> Remember me
            </label>
        </div>!-->
        <div class="mt-3">
            <button class="btn btn-lg btn-primary btn-block form-control"> Login</button>
        </div>
    </form>
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