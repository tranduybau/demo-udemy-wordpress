<?php
function myFirstFunction($name, $color)
{
    echo "<p>Hello, my name is $name and my favorite color is $color.</p>";
}

myFirstFunction('Bau', 'pink');
myFirstFunction('Uab', 'black');
?>

<h1>
    <?php
    bloginfo('name');
    ?>
</h1>
<p>
    <?php
    bloginfo('description')
    ?>
</p>