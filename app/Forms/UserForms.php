<?php
class UserForms {

    // Registration form
    public function registerForm() {
        ?>
        <form method="post" action="submit.php">
            <h2>Register</h2>

            <p>
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>
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

            <p>
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
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
