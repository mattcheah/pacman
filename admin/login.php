<!doctype html>

<html>

<head>
    <title>Login</title>
    <meta name="robots" content="noindex">
</head>
<body>
    
    <form submit="form-login.php">
    
        <label for="un">Username:</label>
        <input type="text" name="un" placeholder="Username:">
        <label for="pw">Password:</label>
        <input type="text" name="pw" placeholder="Password:">
        <input type="submit" name="submit" value="Log On">
    
    </form>
    <p id="login-form-message"></p>

</body>

<script>

$(function() {
    $("form").submit(function() {
        event.preventDefault;
        $.ajax({
            
        }).success(data, function() {
             $('#login-form-message').html(data);
            window.location = "dashboard.php";
        }).failiure(data, function() {
            $('#login-form-message').html(data);
        });
    });
});

</script>
    
</html>

