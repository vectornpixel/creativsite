<h1>Create Account</h1>

<fieldset>
    <legend>Personal Information</legend>
    
    <?php
    // looks at the login controllers with the validate credentials method
    echo form_open('login/create_member');
    // first input is name - second is value
    echo form_input('firstname', 'First Name');
    echo form_input('lastname', 'Last Name');
    echo form_input('email', 'Email Address');

    ?>
</fieldset>