@extends('Backendlayout.applog')
@section('content')
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url(../assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(../assets/images/big/3.jpg);">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="../assets/images/big/icon.png" alt="wrapkit">
                        </div>

             
                        <?php
                    $message =Session::get('message');

                    if($message!=NULL){

                        echo $message;
                        Session::put('message');

                    }


                        ?>




                        <h2 class="mt-3 text-center">Sign In</h2>
                        <p class="text-center">Enter your email address and password to access admin panel.</p>

                        <form class="mt-4" action="{{ route ('auth') }}" method="post">
                        @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label text-dark" for="uname">Username</label>
                                        <input class="form-control" id="uname" type="text" name="user_name"
                                            placeholder="enter your username">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label text-dark" for="uname">Email</label>
                                        <input class="form-control" id="uname" type="text" name="email_address"
                                            placeholder="enter your email_address">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label text-dark" for="pwd">Password</label>
                                        <input class="form-control" id="pwd" type="password" name="password"
                                            placeholder="enter your password">
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn w-100 btn-dark">Sign In</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    Don't have an account? <a href="#" class="text-danger">Sign Up</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection