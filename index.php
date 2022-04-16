<H1>quistion 01</H1>


<?php

$purchased_products = array(

array('name' => 'banana',  'qty' => 10, 'total_price' => 550),

array('name' => 'apple',     'qty' => 50,  'total_price' => 1500),

array('name' => 'orange',  'qty' => 7,    'total_price' => 600),

);
$total_qty = 0;
foreach ($purchased_products as $key => $value){
    $total_qty +=$value['qty'];
}

echo 'Total: ' .$total_qty . "<br>";

$total_Price = 0;
foreach ($purchased_products as $key => $value){
    $total_Price +=$value['total_price'];
}

echo 'Total: ' .$total_Price ;




?>





<H1>quistion 02</H1>
<?php
//You have two array of emails, these are given below

$first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 

$second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];

//use marge_array 
$merge_Email =array_merge($first_email_array, $second_email_array);

//use unique_array 
$unique_Email = array_unique($merge_Email);
//result
echo "<pre>";
print_r($unique_Email);
echo "</pre>";


?>










<H1>quistion 03</H1>
<?php
$citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );
echo "<pre>";
print_r(array_chunk($citylist, 4));
echo "</pre>";

?>