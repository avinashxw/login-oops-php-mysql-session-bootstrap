<?php include('include/header.php'); ?>
    <div class="container mb-4" style=" margin: auto; width: 25%;">
        <div class="row">
            <main class="form-signin">
            <?php 
            if(!empty($_SESSION)) {
                print_r($_SESSION);
            }
            ?>
                <form action="auth.php" method="POST" id="formlogin" onsubmit="return validateform();">
                    <img class="mb-4" src="./assets/images/login.png" alt="SignIn" height="50">
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                    <h3 style="color: red; font-size: 1rem;" id="errmessage"></h3>

                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" name="email">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" name="password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <input type="submit" name="submit" value="Sign In"class="w-100 btn btn-lg btn-primary"/>
                    <p class="mt-5 mb-3 text-muted">&copy; <?php echo date('d-m-Y'); ?></p>
                </form>
            </main>
        </div>
    </div>
<?php include('include/footer.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function validateform() {
    var $valid = true;
    var email = $('#email').val();
    var password = $('#password').val();
    console.log('Email: '+email+' | Password: '+password);
    if(email=='') {
        $('#errmessage').html('Please fill the email address!');
        $valid = false;
    }
    else if(password=='') {
        $('#errmessage').html('Please fill the password!');
        $valid = false;
    }
    return $valid;
}
</script>