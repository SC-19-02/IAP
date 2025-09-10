<?php
require __DIR__ . '/../autoload.php';

$greetings = new Greetings(); 
$helpers = new Helpers(); 
$forms = new UserForms();

$helpers->showHeader($site_name);

echo $greetings->sayHello();
echo $greetings->today();

$forms->registerForm();

$helpers->showFooter($site_name);


