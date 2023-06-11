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