<div class="container">
    <div class="vertical-center">
        <div class="title">
            Welcome back! <br>
            Glad to see you again
        </div>

        <hr>
        <div class="text-center mt-5" style="padding-left: 2rem; padding-right: 2rem;">
            <form action="<?= BASEURL; ?>/login/cek_login" method="POST">
                <input class="form-control form-control-lg" type="text" placeholder="Enter your email" aria-label=".form-control-lg example" id="email" name="email"><br>
                <div class="" style="position: relative;">
                    <input type="password" id="password" name="password" class="form-control form-control-lg" aria-describedby="passwordHelpBlock" placeholder="Enter your password">
                    <i class="bi bi-eye" id="togglePassword" style="position: absolute; z-index: 10; top: 11px;
    right: 18px; font-size: 20px;"></i>
                </div>
                <button type="submit" class="btn btn-login my-3" style="margin-top: 80px !important;">
                    LOGIN
                </button>
            </form>
        </div>
    </div>
</div>


<script>
    const icon = document.getElementById('togglePassword');
    let password = document.getElementById('password');

    /* Event fired when <i> is clicked */
    icon.addEventListener('click', function() {
        if (password.type === "password") {
            password.type = "text";
            icon.classList.add("bi-eye-slash");
            icon.classList.remove("bi-eye");
        } else {
            password.type = "password";
            icon.classList.add("bi-eye");
            icon.classList.remove("bi-eye-slash");
        }
    });
</script>