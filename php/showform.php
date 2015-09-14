<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Processing Form Data</title>
	<style type="text/css">
		code {color:#F00C4D;font-weight:bold;font-size:1.2em}
		i {color: #6D0CF0}
		th, td {padding:.1em;border:1px solid blue;text-align:left}
		p {font-size:.9em;font-style:italic}
	</style>
	<link rel="stylesheet" 
       href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
</head>
<body>
<?php
$a_bool = TRUE;   // a boolean
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an integer

echo gettype($a_bool); // prints out:  boolean
echo gettype($a_str);  // prints out:  string
echo gettype($an_int);

// If this is an integer, increment it by four
if (is_int($an_int)) {
    $an_int += 4;
}

// If $a_bool is a string, print it out
// (does not print out anything)
if (is_string($a_bool)) {
    echo "String: $a_bool";
}
?>
	<p>This is a very simple PHP script that outputs the name of each bit of information (that corresponds to the <code>name</code> attribute for that field) along with the value that was sent with it right in the browser window.</p>
	<p>In a more useful script, you might store this information in a MySQL database, or send it to your email address.</p>
	<table>
		<tr><th>Field Name</th><th>Value(s)</th></tr>
<?php 
if( !empty ($POST['emailaddress']))
{
  $emailaddress = $POST['emailaddress'];
}
else
{
   $emailaddress = NULL; echo 'You must enter a email address<br>';
}
$pattern = '/\b[\w.]+\.[A-Za-z]{2,6}\b/';
if( !preg_match ($pattern, $emailaddress))
{
   $emailaddress = NULL; echo 'Email address is in incorrect format';
}
$label="Contact Time";
$value=$_REQUEST["contacttime"];
echo $label . " " . $value;
$label='Title';
$value=$_POST['title'];
echo $label . " " . $value;
$label='First Name';
$value=$_POST['firstname'];
echo $label . " " . $value;
$label='Last Name';
$value=$_POST['lastname'];
echo $label . " " . $value;
$label='Address';
$value=$_POST['address'];
echo $label . " " . $value;
$label='Town';
$value=$_POST['town'];
echo $label . " " . $value;
$label='County';
$value=$_POST['county'];
echo $label . " " . $value;
$label="REQUEST Code";
$value=$_POST["REQUESTcode"];
echo $label . " " . $value;
$label='Email Address';
$value=$_POST['emailaddress'];
echo $label . " " . $value;
$label='Telephone';
$value=$_POST['telephone'];
echo $label . " " . $value;
$label='Contact Type';
$value=$_REQUEST['contacttype'];
echo $label . " " . $value;
$label='Message';
$value=$_POST['message'];

echo $label . " " . $value;
?>
	</table>
</body>
</html>
