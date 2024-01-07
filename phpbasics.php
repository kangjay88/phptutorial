<?php  //functions and built in wp functions
    function myFirstFunction() {
        echo "<p>Hello, this is my first function.</p>";
    }

    myFirstFunction();
?>

<?php 
    function greet($name, $color) {
        echo "<p>Hi, my name is $name and my favorite color is $color.</p>";
    }

    greet('John', 'blue');
?>

<h1><?php bloginfo('name'); //bloginfo() is a builtin a wordpress function ?></h1> 
<p><?php bloginfo('description'); ?></p>

<?php 
    //WHILE LOOP 
    $names = array('Brad', 'John', 'Jane', 'Meowsalot');

    $count = 1;
    while($count < 10) {
        echo "<li>$count</li>";
        $count++;
    }
?>

<?php 
    $names = array('Brad', 'John', 'Jane', 'Meowsalot');

    $count = 0;

    while($count < count($names)) {
        echo "<li>Hi, my name is $names[$count] </li>";
        $count++;
    }

    // Wordpress uses WHILE loops instead of FOR/EACH loops 
?>