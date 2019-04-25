Some basic knowledge of php
 
<?php

echo "Hello Everyone";
echo "<br>";
echo "<br>";
echo "Welcome to basic PHP";

$date = "21th";
$month = "April";    
$data = "I have a project on $date $month" ;

define('name1', "My Name is"); #constant
define('name2', "AzizolJion"); #constant
$data2 = name1 .' '.  name2;

$basic = "Hope you learn some basic about PHP";
$data3 = "Thank you for coming & I".' '.$basic;

$test = "is simple";
$data4 = "The difference between single and double quotation $test";
$data5 = 'The difference between single and double quotation $test';

$data6 = 'Do you understand "now?"';
$data7 = "You can do it like \"this\" if you want";
$data8 = 'Or you can do it like \'this\' if you want';

$data9 = $basic[3].$data3[2].$test[1].$data6[3];

$name = "Robin";
$data10 = strlen($name);

function code() {
    echo "This is how function works";
}
function code2() {
    return "You can call it like this too";
}
function code3($sample) {
    echo $sample;
}
function code4($sample2 = "Or like this too") {
    echo $sample2;
}
function code5($sample3,$sample4) {
    echo "This the basics of $sample3";
    echo "<br>";
    echo "<br>";
    echo 'Hope you\'re having fun learning '.$sample4;
}

$data11 = str_replace('o', '0', $name);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Basic</title>
</head>
<body>


    <p><?php echo $data2 ?></p>
    <p><?php echo $data ?></p> 
    <p><?php print $data3 ?></p> 
    <p><?php print $data4 ?></p> 
    <p><?php print $data5 ?></p> 
    <p><?php print $data6 ?></p> 
    <p><?php print $data7 ?></p> 
    <p><?php print $data8 ?></p> 
    <p><?php print $data9 ?></p> 
    <p>My name length in php is <?php print $data10 ?></p> 
    <p><?php code(); ?></p> 
    <p><?php echo code2(); ?></p> 
    <p><?php echo code3("Heres another way of using function"); ?></p> 
    <p><?php echo code4(); ?></p> 
    <p><?php echo code5('php','the basics'); ?></p> 
    <p>This is how you replace letters - "<?php print $data11 ?>"</p> 

</body>
</html>

