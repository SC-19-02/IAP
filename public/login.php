<?php
require __DIR__ . '/../autoload.php';

// Create objects
$greetings = new Greetings();
$forms     = new UserForms();
$helpers   = new Helpers();

// Show page
$helpers->showHeader($site_name);   

echo $greetings->sayHello();
echo $greetings->today();

$forms->loginForm();

$helpers->showFooter($site_name);
