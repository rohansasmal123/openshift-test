<!DOCTYPE html>
<html>
<body>

<h1>My first PHP Page</h1>

<?php
$output = shell_exec('ifconfig');

echo "<pre>$output</pre>";

echo "Hello World!";
?>

</body>
</html>
