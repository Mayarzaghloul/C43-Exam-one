<?php

//1//
/*echo "<table border='1'>";
for ($row = 1; $row <= 8; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 8; $col++) {
        $sum = $row + $col;
        if ($sum % 2 == 0) {
            echo "<td height='30' width='30' style='background-color: white;'></td>";
        } else {
            echo "<td height='30' width='30' style='background-color: black;'></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
//2.1//
function printDiamond($n) {
 
    for ($i = 1; $i <= $n; $i++) {
     
        for ($j = $i; $j < $n; $j++) {
            echo "  ";
        }
        for ($j = 1; $j <= (2 * $i - 1); $j++) {
            echo "*";
        }
        echo "<br>";
    }

    for ($i = $n - 1; $i >= 1; $i--) {
       
        for ($j = $n; $j > $i; $j--) {
            echo "  ";
        }
        for ($j = 1; $j <= (2 * $i - 1); $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

printDiamond(5);
//2.2//

$size = 5; 


for ($i = 1; $i <= $size; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}


for ($i = $size; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

//3.2//
for ($i = 1; $i <= 5; $i += 2) {
    echo str_repeat("*", $i) . "</br>";
}

// Bottom part of the shape
for ($i = 3; $i >= 1; $i -= 2) {
    echo str_repeat("*", $i)."</br>";
}

//3//
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];

for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] > $array[$j]) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}
echo "Ascending: " . implode(", ", $array) . "<br>";

for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] < $array[$j]) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}
echo "Descending: " . implode(",",$array);

//4//
$numbers = [2,4,3,1,6,7,5,8,0,9];
$sum = array_sum($numbers);
$count = count($numbers);
$average = $sum / $count;
echo "The average is: " . $average;

//5//
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
$evenNumbers = [];
foreach ($array as $value) {
    if ($value % 2 == 0) {
        $evenNumbers[] = $value;
    }
}
echo "Even Numbers: " . implode(", ", $evenNumbers) . "<br>";
$filteredArray = array_filter($array, function($value) {
    return $value % 2 != 0;
});
echo "Array without even numbers: " . implode(", ", $filteredArray);

//6//


$nums = [10, 30, 20];
$max_number = $nums[0];
if ($nums[1] > $max_number) {
    $max_number = $nums[1];
}
if ($nums[2] > $max_number) {
    $max_number = $nums[2];
}
echo "The maximum number is: " . $max_number;
/*
//7//
$date = "2012-12-21";
$newDate = date("Y-m-d", strtotime("+1 month", strtotime($date)));
echo "New Date: $newDate";

//8//
$currentDate = date('Y-m-d');
$previousMonth = date('m', strtotime('-1 month', strtotime($currentDate)));
echo $previousMonth;
//9//

$string = "Mayar , saad";
$search = "saad";
if (preg_match("/$search/", $string)) {
    echo "String contains '$search'.";
} else {
    echo "String does not contain '$search'.";
}
//10//
function isPrime($number) {
   
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
$number = 8;
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
*/
//11//
/*
if (isset($_POST['color'])) {
    setcookie("bgColor", $_POST['color'], time() + (86400 * 30), "/"); // 30 days
    header("Refresh:0");
}
$bgColor = isset($_COOKIE['bgColor']) ? $_COOKIE['bgColor'] : "#FFFFFF";
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body { background-color: <?= $bgColor; ?>; }
    </style>
</head>
<body>
    <form method="post">
        <label for="color">Choose a background color:</label>
        <select name="color" id="color">
            <option value="#FFFFFF">White</option>
            <option value="#FF5733">Orange</option>
            <option value="#33FF57">Green</option>
            <option value="#3357FF">Blue</option>
        </select>
        <button type="submit">Change Color</button>
    </form>
</body>
</html>*/

?>