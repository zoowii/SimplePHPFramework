<h4>{$message}</h4>
<form action="" method="post">
    <input type="text" name="username" placeholder="Username" required="">
    <br>
    <input type="email" name="email" placeholder="Email optional">
    <br>
    <input type="password" name="password" placeholder="Password" required="">
    <br>
    <input type="submit" value="Register">
</form>
<a href="{url_for m='user' c='auth' a='login'}">Already have an account?</a>
<br>
<a href="{root_url}">回到首页</a>