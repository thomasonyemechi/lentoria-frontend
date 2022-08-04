<div class="footer">
    <div class="container">
        <div class="row align-items-center g-0 border-top py-2">
            <div class="col-md-6 col-12 text-center text-md-start">
                <span>© 2021 Geeks. All Rights Reserved.</span>
            </div>
            <div class="col-12 col-md-6">
                <nav class="nav nav-footer justify-content-center justify-content-md-end">
                    <a class="nav-link active ps-0" href="#">Privacy</a>
                    <a class="nav-link" href="#">Terms </a>
                    <a class="nav-link" href="#">Feedback</a>
                    <a class="nav-link" href="#">Support</a>
                </nav>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body shadow">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    style="float: right;font-size: 40px;">&times;</button>
                <div class="mb-4 m-0">
                    <a href="."><img src="{{ asset('assets/images/logo2.png') }}" class="mb-4"
                            alt=""></a>

                    <h1 class="mb-1 fw-bold">Sign in</h1>
                    <span>Don’t have an account? <a href="signup.php" class="ms-1">Sign up</a></span>
                </div>
                <form>
                    <div id="loginAlert"></div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Username or email</label>
                        <input type="email" id="loginEmail" class="form-control" name="email"
                            placeholder="Email address here" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="loginPassword" class="form-control" name="password"
                            placeholder="**************" required>
                    </div>
                    <div class="d-lg-flex justify-content-end align-items-center mb-4">

                        <div>
                            <a href="forgot-password.php">Forgot your password?</a>
                        </div>
                    </div>
                    <div>
                        <div class="d-grid">
                            <button type="submit" id="submitLogin" class="btn btn-primary">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        // $('#login_modal').modal('show');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#submitLogin').on('click', function(e) {
            e.preventDefault();
            email = $('input[name="email"]').val();
            password = $('input[name="password"]').val();

            if (!email || !password) {
                salat('All fileds are required', 1);
                return;
            }

            if (!email) {
                salat('Pls enter a valid email address', 1);
                return;
            }
            $.ajax({
                method: 'post',
                url: 'http://127.0.0.1:8000/api/user_login',
                data: {
                    email: email,
                    password: password
                },
                beforeSend: () => {
                    btn('#submitLogin', 'Sign In', 'before');
                }
            }).done(function(res) {
                console.log(res)
                message = res.message;
                $.ajax({
                    method: 'post',
                    url: '/session_login_infomation',
                    data: {
                        data: res
                    }
                }).done(function(res) {
                    salat(message)
                    console.log(res)
                    location.href = '/instructor/dashboard';
                });
            }).fail(function(res) {
                console.log(res);
                concatError(res.responseJSON);
                btn('#submitLogin', 'Sign In', 'after');
            });
        })

    })
</script>
