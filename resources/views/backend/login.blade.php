<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bloom Wash admin:Login</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->


    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="codedthemes">
    <meta name="keywords"
        content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">

    <!-- Favicon icon -->
    {{-- <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('backend/assets/images/favicon.ico') }}" type="image/x-icon"> --}}

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{ asset('backend/assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <!--ico Fonts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/icon/icofont/css/icofont.css') }}">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!-- waves css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/plugins/Waves/waves.min.css') }}">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/main.css') }}">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/responsive.css') }}">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/color/color-1.min.css') }}"
        id="color" />

</head>
<style>
    .md-input-wrapper label{
        color: #f7941d;
    }
.img_logo{
    width: 50%;
    border-radius: 20%;
    top: -20px;
}
.md-input-wrapper label{
    color: #000;
}
.common-img-bg {
    height: 100%;
   
    background: url('https://assets.website-files.com/5f620e68bd4f686ef08f6a60/60c84a77f09f4f688196fd44_Laundry%20Delivery%20Fold%20Business.jpg') no-repeat;
    background-size: cover;
}
@media only screen and (max-width: 768px){
.common-img-bg {
    /* width: 100%; */
    height: 100%;
    background-size: cover;
    background: url('https://assets.website-files.com/5f620e68bd4f686ef08f6a60/60c84a77f09f4f688196fd44_Laundry%20Delivery%20Fold%20Business.jpg');
}
}
.login-card{
    background:#ffffffb5;width:70%;margin:auto;border-radius:20px;
}
@media only screen and (max-width: 768px){
.login-card{
    background:#ffffffb5;border-radius:20px;width:auto;
}
}
</style>
<body style="color:rgb(255, 255, 255);">
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="login-card card-block" style="">
                        <form class="md-float-material" method="POST" action="">
                            @csrf
                            <div class="text-center">
                                <img src="{{ asset('backend/image.png') }}" style="width:50%" class="img_logo" alt="logo">
                            </div>
                            <h3 class="text-center text-light" style="color: #051c84;">
                                Sign In to your account
                            </h3>
                            <div class="row">
                                <div class="col-md-12 d-flex">
                                    <div class="md-input-wrapper">
                                        <input type="text" name="email" class="md-form-control"
                                            required="required" />
                                        <label>Email</label>
                                    </div>
                                    <div style="visibility:hidden;">dddd</div>
                                </div>
                                <div class="col-md-12 d-flex">
                                            <div class="md-input-wrapper">
                                        <input type="password" id="id_password" name="password" class="md-form-control"
                                            required="required" />
                                        <label>Password</label>
                                    </div>
                                  <div><i class="far fa-eye" id="togglePassword" style="z-index:1;margin: auto 10px; cursor: pointer;"></i></div>  
                                   
                                </div>
                                <div class="col-sm-6 col-xs-12 forgot-phone text-right">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-10 offset-xs-1">
                                    <button type="submit"
                                        class="btn  btn-md btn-block waves-effect text-center m-b-20 text-light" style="background: #051c84;color:#fff;border-radius:40px 20px 40px 20px;">LOGIN</button>
                                </div>
                            </div>
                            <!-- </div> -->
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- end of login-card -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>

<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jqurey -->
    <script src="{{ asset('backend/assets/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/tether/dist/js/tether.min.js') }}"></script>
    <!-- Required Fremwork -->
    <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- waves effects.js -->
    <script src="{{ asset('backend/assets/plugins/Waves/waves.min.js') }}"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{ asset('backend/assets/pages/elements.js') }}"></script>
</body>

</html>

{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
<script>
     const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>