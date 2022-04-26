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



</body>
</html>