<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class08-assignment</title>
</head>
<body> 
       <h1>assignment01</h1> 
    <?php
   function Age($value) {

    if($value>0 && $value<=12 ) {
        return "children";
    }elseif($value>=13 && $value<=19 ) {
        return "teenagers";
    }elseif($value>=20 && $value<=49 ) {
        return "young people";
    }elseif($value>49  ) {
        return "old people";
    }
    
   }
   
   echo Age(2)."<br>";
   echo Age(19)."<br>";
   echo Age(45)."<br>";
   echo Age(50)."<br>";

    ?>

<h1>assignment02</h1>

<?php
function geometry($type = "r", $length =0 , $width =0){
    if($type == "r") {
        return $length*$width;
    }elseif($type == "s") {
        return $length*$length;
    }elseif($type == "t") {
        return .5*$length*$width;
    }

}
echo geometry ("r",40 ,30)."<br>";
echo geometry ("s",40 )."<br>";
echo geometry ("t",40 ,30)."<br>";

?>


<h1>assignment03</h1>
<?php
function GPA( $bng=80,$eng=80,$mth=80){
    
    $Total_mark = $bng+$eng+$mth;
    $avareg_mark = $Total_mark/3;
//per subject result
    if ( $bng <= 30 || $eng <= 30 || $mth <= 30 ) {
        return "Your Resoult is Faild ";
    }
//avareg result
    elseif($avareg_mark >= 80 ){
        return "Your Resoults is A+";
    }elseif($avareg_mark >=70 ){
        return "Your Resoult is A";
    }elseif($avareg_mark >=60 ){
        return "Your Resoult is A-";
    }elseif($avareg_mark >=50 ){
        return "Your Resoult is B";
    }elseif($avareg_mark >=40 ){
        return "Your Resoult is C";
    }elseif($avareg_mark >=34 ){
        return "Your Resoult is D";
    }elseif($avareg_mark <34 ){
        return "Your Resoult is F";
    }
}

echo gpa( 80, 50, 90)."<br>";
echo gpa( 40, 30, 80)."<br>";

?>
<h1>assignment04</h1>
<?php
    
    function age_cal( $birdth_years ){
   
    $now_years = date('Y');
   $age_cal = $now_years - $birdth_years;
    return "Your Age " . $age_cal . " Years Old";
}

echo age_cal( 2003 );
?>
    
    <h1>assignment05</h1>
<?php
    
   function bmi( $kg, $height ) {
    $bmiCal = $kg / ($height*$height);
    $bmi = round( $bmiCal );

    if ( $bmi <= 18.5 ) {
        return "Your BMI " . $bmi ." Your Low Body ";
    }elseif( $bmi > 18.5 && $bmi <= 25 ){
        return "Your BMI " . $bmi . " All Right Your Body";
    }elseif( $bmi > 25 && $bmi<= 30){
        return  "Your BMI " . $bmi ." Please control Your Body";
    }elseif( $bmi > 30.0 ){
        return "Your BMI " . $bmi ." Your Body is Very Very Over Weight";
    } 
} 

echo bmi( 52, 165);
?>
    
       <h1>assignment06</h1>
<?php
    
   function currencyConverter( $type, $amount ){
 
    if ( $type == 'usd') {
        return $amount*86;
    }elseif( $type == 'pound' ){
        return $amount*111;
    }elseif( $type == 'euro' ){
        return $amount*93;
    }elseif( $type == 'cud' ){
        return $amount*68;
    }

}


echo currencyConverter( 'usd', 550 );
?>
</body>
</html>
