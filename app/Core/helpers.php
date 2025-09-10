<?php
class Helpers {
    public function showHeader($siteName) {
        echo "<header><h1>$siteName</h1></header>";
    }

    public function showFooter($siteName) {
        echo "<footer>
                <p>&copy; " . date("Y") . " $siteName. All rights reserved.</p>
            </footer>";
    }
}
