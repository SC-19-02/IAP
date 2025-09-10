<?php
require __DIR__ . '/../autoload.php';

$greetings = new Greetings();
$forms     = new UserForms();
$helpers   = new Helpers();

$helpers->showHeader($site_name);   

echo $greetings->sayHello();
echo $greetings->today();

$forms->loginForm();

$helpers->showFooter($site_name);
