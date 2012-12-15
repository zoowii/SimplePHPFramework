<form action="" method="post">
    <input type="text" name="username" placeholder="Username or Email" required="">
    <br>
    <input type="password" name="password" placeholder="Password" required="">
    <br>
    <input type="submit" value="Login">
</form>
<hr>
<a href="{url_for m='user' c='auth' a='register'}">Register</a>
<br>
<a href="{root_url}">回到首页</a>