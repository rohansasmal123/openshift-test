<!DOCTYPE html>
<html>
<body>

<h1>My first PHP Page</h1>

<?php
$output=null;
$retval=null;
exec('ifconfig', $output, $retval);
print_r($output);

echo "Hello World!";
?>

</body>
</html>
