<?php
class UserForms {

    // Registration form
    public function registerForm() {
        ?>
        <form method="post" action="submit.php">
            <h2>Register</h2>

            <p>
                <label for="fullname">Name:</label>
                <input type="text" id="name" name="name" required>
            </p>

            <p>
                <label for="student_id">Student ID:</label>
                <input type="text" id="student_id" name="student_id" required>
            </p>

            <p>
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </p>

            <p>
                <label for="password">Create Password:</label>
                <input type="password" id="password" name="password" required>
            </p>

            <button type="submit">Register</button>
            <p><a href="login.php">Go to Login</a></p>
        </form>
        <?php
    }

    // Login form
    public function loginForm() {
        ?>
        <form method="post" action="login.php">
            <h2>Login</h2>
            <p>
                <label for="student_id">Student ID:</label>
                <input type="text" id="student_id" name="student_id" required>
            </p>

            <p>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </p>

            <button type="submit">Login</button>
            <p><a href="register.php">Go to Register</a></p>
        </form>
        <?php
    }
}
?>
