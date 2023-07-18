
<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="utf-8" />
    <title>Log In | Codefox - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <!-- Sweet Alert-->
    <link href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Theme Config Js -->
    <script src="{{asset('assets/js/config.js')}}"></script>

    <!-- App css -->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body class="loading authentication-bg">

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card shadow-none">

                        <div class="card-body p-3">

                            <div class="text-center w-75 m-auto">
                                <div class="auth-logo">
                                    <a href="index.html" class="logo logo-dark text-center">
                                        <span class="logo-lg">
                                            <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="22">
                                        </span>
                                    </a>

                                    <a href="index.html" class="logo logo-light text-center">
                                        <span class="logo-lg">
                                            <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="22">
                                        </span>
                                    </a>
                                </div>
                                <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                            </div>

                            <form id="FormLogin"  action="#">
                                @csrf
                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Email address</label>
                                    <input class="form-control" type="email" name="email" id="emailaddress" required="" placeholder="Enter your email">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signin" name="remember" value="T" checked>
                                        <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div>

                                <div class="text-center d-grid">
                                    <button class="btn btn-primary" type="submit"> Log In </button>
                                </div>

                            </form>

                            <div class="text-center">
                                <h5 class="mt-3 text-muted">Sign in with</h5>
                                <ul class="social-list list-inline mt-3 mb-0">
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                    </li>
                                </ul>
                            </div>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p> <a href="auth-recoverpw.html" class="text-muted ms-1">Forgot your password?</a></p>
                            <p class="text-muted">Don't have an account? <a href="auth-register.html" class="text-dark text-decoration-underline ms-1"><b>Sign Up</b></a></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->


    <footer class="footer footer-alt">
        <script>document.write(new Date().getFullYear())</script> &copy; Codefox theme by <a href="#!" class="text-dark text-decoration-underline">Coderthemes</a>
    </footer>


    <!-- Vendor js -->
    <script src="{{asset('assets/js/vendor.min.js')}}"></script>

    <!-- Sweet Alerts js -->
    <script src="{{asset('assets/libs/sweetalert2/sweetalert2.all.min.js')}}"></script>

    <!-- Sweet alert init js-->
    <script src="{{asset('assets/js/pages/sweet-alerts.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/app.min.js')}}"></script>
<script>
$( document ).ready(function() {
    $('body').on('submit' , '#FormLogin' , function(e){
    e.preventDefault();
    var form = $(this);
    loadingButton(form.find('button[type=submit]'));
    $.ajax({
        method: "POST",
        url: "{{url('login')}}",
        dataType: "json",
        data: form.serialize()
    }).done(function( res ) {
        resetButton(form.find('button[type=submit]'));
        if(res.status==1){
            window.location = "{{url('')}}";
        }else{
            Swal.fire(
                {
                    title: res.title,
                    text: res.content,
                    icon: 'error'
                }
            )
        }
    }).fail(function(res){
        resetButton(form.find('button[type=submit]'));
        var res = $.parseJSON(res.responseText);
        var str = "Please take a screenshot of this for the staff.\n\r"+res.message+"\n\r"+res.exception+"\n\r"+res.file+" Line : "+res.line;
        // swal("Sorry something went wrong.",str,'error');
        Swal.fire(
                {
                    title: 'Sorry something went wrong.',
                    text: str,
                    icon: 'error'
                }
            )

    });
});

function loadingButton(btn){
    var org_text = btn.data('loading');
    var current_text = btn.html();
    if(org_text===undefined){
        org_text = '<i class="fa fa-spinner fa-spin"></i>';
    }
    btn.attr('disabled','disabled');
    btn.html(org_text);
    btn.data('loading' , current_text);
}

function resetButton(btn){
    var org_text = btn.data('loading');
    var current_text = btn.html();
    if(!org_text){
        org_text = '<i class="fa fa-refresh fa-spin"></i>';
    }
    btn.removeAttr('disabled','disabled');
    btn.html(org_text);
    btn.data('loading' , current_text);
}

});
</script>
</body>

</html>
