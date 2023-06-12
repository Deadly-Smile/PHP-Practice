<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "site.php" method="post">
        <input type="text" name="textBox"/><br>
        <label>Eat </label>
        <input type="checkbox" name="activities[]" value="Eat"><br>
        <label>Sleep </label>
        <input type="checkbox" name="activities[]" value="Sleep"><br>
        <label>Chill </label>
        <input type="checkbox" name="activities[]" value="Chill">
        <br>
        <button type="submit">Submit</button>
    </form>
    <?php 

    class Person {
        private $name;
        private $age;
        private $address;

        public function __construct($name, $age, $address) {
            $this->name = $name;
            $this->age  = $age;
            $this->address = $address; 
        }

        public function getInfo() {
            echo "Name : $this->name<br> Age : $this->age<br> Adress : $this->address<br>";
        }

        public function setInfo($name, $age, $address) {
            $this->name = $name;
            $this->age  = $age;
            $this->address = $address; 
        }
    }

    $ami = new Person("Anik", "23", "Mirpur-1, Dhaka-1216");
    $ami->setInfo("Anik", "23", "Mirpur-1, Dhaka-1216");
    $ami->getInfo();

    $arekJon = new Person("Some guy", "34", "Nowhere");
    $arekJon->getInfo();

    $switchCondition = 2345;
    switch($switchCondition) {
        case 123:
            echo $switchCondition;
            break;
        case 234:
            echo $switchCondition;
            break;
        default:
            echo "Default";
            break;
    }

    $val = 9;
    if($val == 1) {
        echo "$val";
    } else if($val == 2) {
        echo "$val";
    } else {
        echo "<p>Some thing else</p>";
    }

    $val = 5;
    while($val--) {
        echo "$val, ";
    } 

    function my_sqrt($n) {
        return sqrt($n);
    }

    echo my_sqrt(100);

    $ini = "Ki hoise?";
    echo "$ini <br>";
    
    $text = $_POST["textBox"];
    echo "$text <br>";

    $activityList = $_POST["activities"];
    $list = array("I tried so hard ", "and got so far, ", "in the end ", "it doesn't even matter.........");
    $map = array("Anik" => "The coolest person 😎", "You" => "Also cool 😃");
    for ($i=0; $i < count($activityList); $i++) { 
        echo "<p>$activityList[$i]</p>";
    }
    for ($i=0; $i < count($list); $i++) { 
        echo "$list[$i]";
    }
    echo "<br/>";
    echo $map["Anik"];

    ?>
</body>
</html>