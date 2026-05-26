<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>自訂函式</h2>
<?php
function sayHello($name) {
    echo "Hello, $name!";
}   
sayHello("Alice");
?>  
<hr>

<?php
function name($firstName, $lastName) {
    echo "My name is $firstName $lastName.";
}
echo name("劉", "勤永");

?>
<hr>    
<?php
//數字相加的函式
function add($num1, $num2) {
    return $num1 + $num2;
}
//若沒有下ECHO，則不會顯示結果,只是寫到程式裡面.
echo "<br>";
echo add(5, 3); 
echo "<br>";
echo add(15, 5); 


function multiply($num1, $num2) {
    return $num1 * $num2;
}
function sum($title, $num1, $num2) {
    $tmp=0;
    echo $title."年終結算:";
    foreach ($nums as $num) {
        $tmp= $num+$tmp;
        echo $num."+";
    }
    echo "=".$tmp;
    echo "<br>";
}
?>





</body>
</html>