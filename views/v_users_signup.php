<form method='POST' action='/users/p_signup'>

    First Name<br>
    <input type='text' name='first_name' autocomplete="on">
    <br><br>

    Last Name<br>
    <input type='text' name='last_name' autocomplete="on">
    <br><br>

    Email<br>
    <input type='email' name='email' autocomplete="on">
    <br><br>

    Password<br>
    <input type='password' name='password'>
    <br><br>    
    
    <input type='hidden' name='timezone'>
    
    <script>
    $('input[name='timezone']').val(jstz.determine().name());
</script>

    <input type='submit' value='Sign up'>

</form>

