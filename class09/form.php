<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form</title>

    <style>
        .form-div {
            width: 500px;
            margin: 0 auto;
        }
    </style>
  </head>
  <body>
      <?php 

        if (isset($_POST['submitBtn'])) {
            $userName  = $_POST['userName'];
            $userEmail = $_POST['userEmail'];
            $phone     = $_POST['phone'];

            if ($userName == '' || $userEmail == '' || $phone == '') {
                echo "All fields are required";
            } else {
                // echo "Everything is ok";
                echo "<pre>";
                print_r($_POST);
                echo "</pre>";
            }
            
        }
        
        
      ?>
      <div class="container">
          <div class="wrap shadow form-div">
              <div class="card">
                    <div class="card-body">
                        <h1>Registration Form</h1>
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="fieldthree" class="form-label">Name</label>
                                <input type="text" name="userName" class="form-control" id="fieldthree">
                            </div>
                            <div class="form-group">
                                <label for="fieldOne" class="form-label">Email address</label>
                                <input type="email" name="userEmail" class="form-control" id="fieldOne">
                            </div>
                            <div class="form-group">
                                <label for="fieldFour" class="form-label">Phone</label>
                                <input type="tel" name="phone" class="form-control" id="fieldFour">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submitBtn" class="btn btn-primary" value="Register">
                            </div>
                        </form>
                    </div>
              </div>
          </div>

      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>