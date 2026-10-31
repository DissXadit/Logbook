<!DOCTYPE html>
<html lang="en">

@include('layout.css')

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form action="{{ url('simpan-user') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="name" id="exampleName"
                                            placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="level" id="level" placeholder="Level">
                                        <option>Admin</option>
                                        <option>User</option>
                                      </select>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" id="email"
                                        placeholder="Email" value autofocus>
                                </div>
                                <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" name="password" placeholder="Password">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary btn-block">Register Account</button>
                                </div>
                            </form>
                            <hr>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@include('layout.js')

</body>

</html>
