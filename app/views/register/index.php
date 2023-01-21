<div class="container">
    <div class="vertical-center">
        <div class="title">
            Let's Join Us
        </div>

        <hr>
        <div class="text-center mt-5" style="padding-left: 2rem; padding-right: 2rem;">
            <form action="<?= BASEURL; ?>/register/tambah" method="post">
                <input class="form-control form-control-lg" type="text" placeholder="Username" aria-label=".form-control-lg example" id="username" name="username"><br>
                <input class="form-control form-control-lg" type="text" placeholder="Email" aria-label=".form-control-lg example" id="email" name="email"><br>
                <div class="mb-4" style="position: relative;">
                    <input type="password" id="password" class="form-control form-control-lg" aria-describedby="passwordHelpBlock" placeholder="Password" name="password">
                    <i class="bi bi-eye" id="togglePassword" style="position: absolute; z-index: 10; top: 11px;
    right: 18px; font-size: 20px;"></i>
                </div>
                <div class="" style="position: relative;">
                    <input type="password" class="form-control form-control-lg" aria-describedby="passwordHelpBlock" placeholder="Confirm Password" id="confirm_pass" name="confirm_pass">
                    <i class="bi bi-eye" id="toggleConfirm_pass" style="position: absolute; z-index: 10; top: 11px;
    right: 18px; font-size: 20px;"></i>
                </div>
                <button type="submit" class="btn btn-login my-3" style="margin-top: 80px !important;">
                    REGISTER
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

<script>
    const icon2 = document.getElementById('toggleConfirm_pass');
    let password2 = document.getElementById('confirm_pass');

    /* Event fired when <i> is clicked */
    icon2.addEventListener('click', function() {
        if (password2.type === "password") {
            password2.type = "text";
            icon2.classList.add("bi-eye-slash");
            icon2.classList.remove("bi-eye");
        } else {
            password2.type = "password";
            icon2.classList.add("bi-eye");
            icon2.classList.remove("bi-eye-slash");
        }
    });
</script>