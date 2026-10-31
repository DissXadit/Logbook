<!DOCTYPE html>
<html lang="en">

@include('layout.css')

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="/Login_v1/images/img-01.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" action="{{ route('auth.verify') }}" method="post">
                    {{ csrf_field() }}
                    <span class="login100-form-title">
                        Selamat Datang
                    </span>

                    <div class="wrap-input100"  >
                        <input class="input100" type="email" name="email" placeholder="Email" id="email" value autofocus required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password" id="exampleInputPassword" required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>
<div>
                    <p class="text-grey-200 text-center p-t-136">
                        New on our platform?
                        <span class="text-black font-bold-1000"> Contact Administrator</span>
                    </p>
                </div>
                </form>

            </div>
        </div>
    </div>

@include('layout.js')
</body>

</html>
