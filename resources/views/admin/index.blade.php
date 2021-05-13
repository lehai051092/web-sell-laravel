<!DOCTYPE html>
<html>
<head>
    <title>Login Dashboard</title>
    @include('admin.links.link-top')
</head>
<body>
<div class="log-w3">
    <div class="w3layouts-main">
        <h2>Sign In Now</h2>
        <form action="{{ route('backend.login.dashboard') }}" method="post">
            @csrf
            <input type="email" class="ggg" name="admin_email" placeholder="E-MAIL" required="">
            <input type="password" class="ggg" name="admin_password" placeholder="PASSWORD" required="">
            <?php
            $message = Session::get('message');

            if ($message) {
                echo "<span class='sell-admin-message'>" . $message . "</span>";
                Session::put('message', null);
            }
            ?>
            <span><input type="checkbox"/>Remember Me</span>
            <h6><a href="#">Forgot Password?</a></h6>
            <div class="clearfix"></div>
            <input type="submit" value="Sign In" name="login">
        </form>
        <p>Don't Have an Account ?<a href="">Create an account</a></p>
    </div>
</div>
@include('admin.links.link-bottom')
</body>
</html>
