<?php
// function

function valideMessage( $message, $color = "danger" ){
  $messageDiv =  "<div class='alert alert-{$color} d-flex justify-content-between'> {$message} <button class='btn' id='close'>X</button> </div>";

  return $messageDiv;
}


/**
* Email Validation function
* 
*/

function valideEmail( $email ){
   if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
      return true;
   }else{
       return false;
   }
}

/**
*Edumail Validatiln function 
* 
*/

function valideEduMail( $email ){
  $valideEdumail = ['edu.shorobindu', 'diu.edu.bd', 'brak.edu.bd'];
  $eduEmailArr = explode( '@', $email, 2 );

  if ( in_array( $eduEmailArr[1], $valideEdumail ) ) {
      return true;
  }else{
      return false;
  }

}

/**
* 
* User Name Function
*/

function valideUsername( $username  ){

  if ( preg_match( '/^[0-9A-Za-z_]{5,20}$/', $username ) ) {
      return true;
  }else{
      return false;
  }
}


/***
 * 
 * Value Set Function 
 * 
 */

 function oldValue( $value ){
     
  if ( isset( $_POST[$value] ) ) {
      echo $_POST[$value]; 
  } 
 }

//  if (isset( $_POST['submit'] )) {

                 // all php data //
 if (isset($_POST['submitBtn']))  {

   $username     = $_POST['username'];
   $email        = $_POST['email'];
   $password     = $_POST['password'];
   $birthday     = $_POST['birthday'];
   $country      = $_POST['country'];
   $gender       = '';
   if (isset($_POST['gender'])) {
       $gender       = $_POST['gender'];
   }

   $agree_status = '';
   if (isset($_POST['agree_status'])) {
       $agree_status = $_POST['agree_status'];
   }



   if ( $username  == '') {
    $nameMessage = valideMessage('Please Type Your Name');
}
 if( $email == ''){
    $emailMessage = valideMessage('Please Type Your Email');
}
 if( $password == ''){
  $passwordMessage = valideMessage('Please type your Password');
}
 if( $birthday == ''){
  $birthdayMessage = valideMessage('Please type your birthday');
}
 if( $country == ''){
  $countryMessage  = valideMessage('Please type your country ');
}
 if( $gender  == 'Select Your gender '){
  $genderMessage = valideMessage('Please Select Your gender');
}
 if( empty($agree_status) ){
  $agreeMessage = valideMessage('please chack agree_status');
}

// Validate Condtion
elseif( valideUsername( $username ) == '' ){
  $nameMessage = valideMessage( 'User Name is not Vailde');
}
elseif( valideEmail( $email ) == false ){
  $emailMessage = valideMessage('Your Email is not valide');
}elseif( empty( $agree_status ) ){
  $agreeMessage = valideMessage('please agree terms and conditions');
}
else{
  $allMessage = valideMessage('Succes all data sumited', 'info');

  //Succes after clear all field
  $_POST = "";
}

 }              

 



?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

 
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>
              <?php
                        if ( isset( $allMessage ) ) { echo $allMessage; }
              ?>
              <form method="post" action="" autocomplete="on">

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                  <input type="text" name="username" id="form3Example1cg" class="form-control form-control-lg"/>
                  <?php
                            if ( isset( $nameMessage ) ) { echo $nameMessage; }
                    ?>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                  <input type="email" name="email"id="form3Example3cg" class="form-control form-control-lg"/>
                  <?php
                  if (isset($emailMessage)) {echo $emailMessage;} 
                  ?>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" />
                  <?php
                  if (isset($passwordMessage)) { echo $passwordMessage;}
                  ?>
                </div>

                <div class="form-outline mb-4">
                
                    <label for="birthday">Birthday:</label>
                    <input type="date" id="birthday" name="birthday"  >
                    <?php
                  if (isset($birthdayMessage)) { echo $birthdayMessage;}
                  ?>
                </div>
                
             <div class="form-check d-flex justify-content-center ">
              <label for="country" class="form-label ">Country</label>
              <select class="form-select" id="country" name="country" aria-label="Default select example">
               <option selected>---------------------------------------------</option>
               <option value="Bangladesh">Bangladesh</option>
               <option value="India">India</option>
               <option value="Pakisthan">Pakisthan</option>
              </select>
              <?php
                  if (isset($countryMessage)) {echo $countryMessage;} 
                  ?>
            </div>

              <div class="form-check">
                <label class="form-check-label" for="radio1">Gender</label>
                  
                
                <div class="form-check">
                  <label class="form-check-label" for="radio2">Male</label>
                   <input type="radio" class="form-check-input" id="radio1" name="Gender" value="option1">
              </div>
                
                <div class="form-check">
                  <label class="form-check-label" for="radio2">Female</label>
                   <input type="radio" class="form-check-input" id="radio2" name="Gender" value="option2">
               </div>
                <div class="form-check">
                  <label class="form-check-label" for="radio2">Other</label>
                   <input type="radio" class="form-check-input" id="radio3" name="Gender" value="option3">

                   <?php
                  if (isset( $genderMessage)) {echo  $genderMessage;} 
                  ?>
               </div><br>
                
        

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input" type="checkbox" name="agree_status" value="yes" id="agreeCheckbox">
                  <label class="form-check-label" for="agreeCheckbox">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                  <?php
                  if (isset( $agreeMessage)) {echo $agreeMessage;} 
                  ?>
                </div>

                
                <div class="d-flex justify-content-center ">
                 <input type="submit" name="submitBtn" class="btn btn-primary " value="Register">
                </div>

               

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>







    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>