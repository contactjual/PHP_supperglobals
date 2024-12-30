<?php

// PHP supperglobals.................................

// $GLOBALS... is an array that contains all global variables.

$x = 10;
$y = 5;

function my_func () {
    echo $GLOBALS["z"] = $GLOBALS["x"] + $GLOBALS["y"];
}
my_func();




// $_SERVER... holds information about headers, paths, and script locations.

echo $_SERVER["SERVER_NAME"]; // localhost
echo $_SERVER["PHP_SELF"]; // file location




// $_REQUEST... contains submitted form data, and all cookie data.

// &_POST... contains an array of variables received via the HTTP POST method.

// &_GET... contains an array of variables received via the HTTP GET method.




?>