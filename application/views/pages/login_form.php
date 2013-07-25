<div id="login_form">
    <h1>Login</h1>
    
    <?php
    // looks at the login controllers with the validate credentials method
    echo form_open('login/validate_credentials');
    // first input is name - second is value
    echo form_input('username', 'Username');
    echo form_password('password', 'Password');
    echo form_submit('submit', 'Login');
    echo anchor('login/signup', 'Create Account');

    ?>
</div>