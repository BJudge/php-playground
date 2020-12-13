<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "Peter";
    $age = 42;
        echo "<h1>Bart's Site</h1>";
        echo "<hr>";
        echo("Hello World!");
        echo"<br>";
        echo"<br>";
        echo "There once was a man named {$name}<br>";
        echo "He was {$age} years old<br>";
        $name = "Mike";
        echo "He really liked the name {$name}<br>";
        echo "But didn't like beng {$age} <br>";
        $phrase = "This is not today";
        echo "<br>";
        echo "$phrase";
        echo "<br>";
        echo strtolower($phrase);
        echo "<br>";
        echo strtoupper($phrase);
        echo "<br>";
        echo strlen($phrase);
        echo "<br>";
        echo $phrase[0];
        echo "<br>";
        $phrase[0] = "Z";
        echo "<br>";
        echo $phrase;
        echo "<br>";
        echo str_replace("today", "Panda", $phrase);
        echo "<br>";
        echo substr($phrase, 5);
        echo "<br>";
        echo -40;
        echo "<br>";
        echo 5+9;
        echo "<br>";
        echo 10%3;
        echo "<br>";
        echo 4 + 5 * 10;
        echo "<br>";
        echo (4 + 5) * 10;
        echo "<br>";
        $number = 12;
        echo $number;
        echo "<br>";
        $number++;
        echo $number;
        echo "<br>";
        $number--;
        echo $number;
        echo "<br>";
        $number +=10;
        echo $number;
        echo "<br>";
        echo pow(4, 4);
        echo "<br>";
        echo sqrt(256);
        echo "<br>";
        echo max(2, 10);
        echo "<br>";
        echo min(2, 10);
        echo "<br>";
        echo ceil(3.1);
        echo "<br>";
        echo floor(3.9);
        echo "<br>";
        ?>
        <form action="index.php" method="get">
           Name: <input type="text" name="name">
           <input type="submit" value="Confirm">
        </form>
        <br>
        <?php
        echo "You just submitted the name: "; echo $_GET["name"];
        echo "<br>"; ?>
        <form action="index.php" method="get">
        <input type="number" name="number1">
        <br>
        <input type="number" name="number2">
        <input type="submit" value="Confirm">
        </form>
        <?php
        echo "<br>";
        echo "Answer "; echo $_GET["number1"] + $_GET["number2"];
        echo "<br>"; ?>
        <form action="index.php" method="get">
        Colour: <input type="text" name="colour">
        Plural-Noun: <input type="text" name="pluralNoun">
        Person: <input type="text" name="person">
        <input type="submit" value="Confirm">
        </form>
        <?php
        echo "Roses are "; echo $_GET["colour"]; echo "<br>";
        echo $_GET["pluralNoun"]; echo" are blue <br>";
        echo "I Love "; echo $_GET["person"]; echo "<br>";
        echo "<br>";
        $firstArray = array("Kevin", "Karen", "Jim");
        echo $firstArray[1];
        echo "<br>";
        $firstArray[1] = "Dwight";
        echo $firstArray[1];
        echo "<br>";
        echo count($firstArray);
        echo "<br>";
        ?>
        
        <form action="index.php" method="post">
        <br>
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Orange: <input type="checkbox" name="fruits[]" value="orange"><br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
        <input type="submit" value="Confirm">
        </form>
        <?php
        $fruits = $_POST["fruits"];
        echo "<br>";
        echo $fruits[1];
        echo "<br>";
        $grades = array(
            "Jim" => "A+",
            "Pam" => "B-",
            "Oscar" => "C+"
        );
        echo $grades["Jim"]; ?>
        <form action="index.php" method="post">
        <input type="text" name="student">
        <input type="submit" value="Confirm">
        </form>
        <?php
        echo "<br>";
        echo $grades[$_POST["student"]];
        echo "<br>";
        function myFirstFunction($name) {
            echo "Hello $name";
        };
        echo "<br>";
        myFirstFunction("Bart");
        echo "<br>";
        echo "<br>";
        function cube($num) {
           return $num * $num * $num;
        };
        $cubeResult = cube(4);
        echo $cubeResult;
        echo "<br>";
        echo "<br>";
        $isMale = false;
        if($isMale) {
            echo "You are male";
        } else {
            echo "You are not male";
        };
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        
    ?>
</body>
</html>