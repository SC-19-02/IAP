<?php
class Greetings {

    public function sayHello() {
        return "<h3>Welcome</h3>";
    }

    public function today() {
        $day = date("l"); 
        return "<p>Today is <strong>" . $day . "</strong></p>";
    }
}

