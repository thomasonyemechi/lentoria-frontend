<div class="footer">
    <div class="container">
        <div class="row align-items-center g-0 border-top py-2">
            <div class="col-md-6 col-12 text-center text-md-start">
                <span>&copy; {{ now()->year }} Lentoria Inc. All Rights Reserved.</span>
            </div>
            <div class="col-12 col-md-6">
                <nav class="nav nav-footer justify-content-center justify-content-md-end">
                    <a class="nav-link active ps-0" href="javascript:void(0)">Privacy</a>
                    <a class="nav-link" href="javascript:void(0)">Terms </a>
                    <a class="nav-link" href="javascript:void(0)">Feedback</a>
                    <a class="nav-link" href="javascript:void(0)">Support</a>
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
                <form id="loginForm">

                    <div class="mb-4 m-0 d-flex justify-content-between">
                        <div>
                            <h1 class="mb-1 fw-bold">Sign in</h1>
                            <span>Don’t have an account? <a type="button" class="ms-1 opensignup ">Sign up</a></span>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fe fe-x-circle"></i>
                        </button>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
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
                            <a href="javascript:void(0)">Forgot your password?</a>
                        </div>
                    </div>
                    <div>
                        <div class="d-grid">
                            <button type="submit" id="submitLogin" class="btn btn-primary ">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="signup_modal" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body shadow">
                <form id="signUpForm">

                    <div class="mb-4 d-flex justify-content-between">
                        <div>
                            <h1 class="mb-1 fw-bold">Create Account</h1>
                            <span>Already have an account? <a href="javascript:;" class="ms-1 openlogin">Sign
                                    In</a></span>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
                        </button>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Frist Name</label>
                            <input type="text" class="form-control" name="firstname" placeholder="Enter firstname"
                                required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lastname" placeholder="Enter Lastname"
                                required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email Address " required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Phone " required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="**************"
                            required>
                    </div>
                    <div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary ">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.opensignup').on('click', function() {
            $('#login_modal').modal('hide')
            $('#signup_modal').modal('show')
        })


        $('.openlogin').on('click', function() {
            $('#signup_modal').modal('hide')
            $('#login_modal').modal('show')

        })

        function loginAuto(email, password) {
            $.ajax({
                method: 'post',
                url: api_url + 'user_login',
                data: {
                    email: email,
                    password: password
                },
            }).done(function(res) {
                console.log(res);
                message = res.message;
                $.ajax({
                    method: 'post',
                    url: '/session_login_infomation',
                    data: {
                        data: res
                    }
                }).done(function(res) {
                    salat(message);
                    window.location.reload(true);
                });
            }).fail(function(res) {
                concatError(res.responseJSON);
            });
        }


        $('#loginForm').on('submit', function(e) {
            e.preventDefault();
            form = $(this);
            email = $(form).find('input[name="email"]').val();
            password = $(form).find('input[name="password"]').val();
            bt = $(form).find('button[type="submit"]');

            if (!email || !password) {
                salat('All fields are required', 1);
                return;
            }

            if (!email) {
                salat('Pls enter a valid email address', 1);
                return;
            }
            $.ajax({
                method: 'post',
                url: api_url + 'user_login',
                data: {
                    email: email,
                    password: password
                },
                beforeSend: () => {
                    btn(bt, 'Sign In', 'before');
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
                    location.reload(true);
                    $("#login_modal").modal('hide');
                });
            }).fail(function(res) {
                concatError(res.responseJSON);
                btn(bt, 'Sign In', 'after');
            });
        })


        $('#signUpForm').on('submit', function(e) {
            e.preventDefault();
            form = $(this);
            email = $(form).find('input[name="email"]').val();
            fname = $(form).find('input[name="firstname"]').val();
            lname = $(form).find('input[name="lastname"]').val();
            phone = $(form).find('input[name="phone"]').val();
            password = $(form).find('input[name="password"]').val();
            bt = $(form).find('button[type="submit"]');

            if (!email || !password || !fname || !lname || !phone) {
                salat('All fileds are required', 1);
                return;
            }
            if (!email) {
                salat('Pls enter a valid email address', 1);
                return;
            }
            $.ajax({
                method: 'post',
                url: api_url + 'user_signup',
                data: {
                    firstname: fname,
                    lastname: lname,
                    phone: phone,
                    email: email,
                    password: password
                },
                beforeSend: () => {
                    btn(bt, '', 'before');
                }
            }).done(function(res) {
                console.log(res)
                salat(res.message);
                btn(bt, 'Sign Up', 'after');
                loginAuto(email, password);
            }).fail(function(res) {
                console.log(res);
                concatError(res.responseJSON);
                btn(bt, 'Sign Up', 'after');
            });
        })



    })
</script>
