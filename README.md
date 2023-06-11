# PHP-Practice
This time with OOP :O

# Php is installed globaly
## Start a php server
```
php -S localhost:4000
```
## After starting the server create a php file for example - site.php
```
http://localhost:4000/site.php
```

## Get info from a form like this
```php
    <form action = "site.php" method="post">
        <input type="text" name="textBox"/>
        <button type="submit">Submit</button>
    </form>
    <?php 
    $text = $_POST["textBox"];
    echo "$text";
    ?>
```

## List and for loop
```php
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
```