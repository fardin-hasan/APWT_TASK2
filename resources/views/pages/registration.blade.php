<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
  
</head>
@extends('layouts.app')
@section('content')
{{-- <div  >

    <form action="{{route('success')}}"  method="post">
{{csrf_field()}}
<div class="form-group mb-2">
    <label class="fw-bold">Name</label>
    <input type="text" name="name" value="{{old('name')}}">
    @error('name')
    <span >{{$message}}</span>
    @enderror
</div>
<div class="form-group mb-2">
    <label >Email</label>
    <input type="text" name="email" value="{{old('email')}}" class="form-control">
    @error('email')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div >
    <label >Date of Birth</label>
    <input type="date" name="dob" value="{{old('dob')}}" >
    @error('dob')
    <span >{{$message}}</span>
    @enderror
</div>
<div >
    <label >Password</label>
    <input type="password" name="password" value="{{old('password')}}" >
    @error('password')
    <span >{{$message}}</span>
    @enderror
</div>
<div class="form-group mb-2">
    <label >Confirm Password</label>
    <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}">
    @error('password_confirmation')
    <span >{{$message}}</span>
    @enderror
</div>

<div class="row mt-3">
    <div class="col-4">
        <input type="submit"  value="Register">
    </div>
    <div >
        <div >
            <span >Have an account?</span>
            <a href="{{ route ('login') }}">Login</a>
        </div>
    </div>
</div>
</form>
</div> --}}
<div >
<section >
    <div >
        <div >
            <div>
                <h2>Sign up</h2>
                <form action="{{route('success')}}" method="POST" id="register-form">
                    {{csrf_field()}}

                    <div class="form-group">
                        <div>
                            @error('name')
                            <h6 class="text-danger">{{$message}}</h6>
                            @enderror
                        </div>
                        <label for="name"><i></i></label>
                        <input type="text" name="name" value="{{old('name')}}" id="name" placeholder="Your Name" />
                    </div>


                    <div class="form-group">
                        <div>
                            @error('email')
                            <h6 >{{$message}}</h6>
                            @enderror
                        </div>
                        <label for="email"><i></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email" />

                    </div>

                    <div class=>
                        <div>
                            @error('password')
                            <h6 >{{$message}}</h6>
                            @enderror
                        </div>
                        <label for="password"><i></i></label>
                        <input type="password" name="password" id="password" placeholder="Your Password" />

                    </div>
                    <div>
                        <div>
                            @error('password_confirmation')
                            <h6>{{$message}}</h6>
                            @enderror
                        </div>
                        <label for="password_confirmation"><i></i></label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="Repeat your password" />

                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term"/>
                        <label for="agree-term"><span><span></span></span>I agree all
                            statements in <a href="#" >Terms of service</a></label>
                    </div>
                    <div >
                        <input type="submit" name="signup" id="signup" value="Register" />
                    </div>
                </form>
            </div>
            <div >
              
                <a href="{{ route ('login') }}">I am already member</a>
            </div>
        </div>
    </div>
</section>
</div>
@endsection

</html>






<!-- Sing in  Form -->
{{-- <section >
        <div >
            <div>
                <div >
                    <figure><img src="loginForm/images/signin-image.jpg" alt="sing up image"></figure>
                    <a href="{{ route ('registration') }}">Create an account</a>
</div>

<div>
    <h2 >Sign up</h2>
    <form method="post" id="login-form" action="{{route('success')}}">
        {{csrf_field()}}
        <div class="form-group">
            <label for="email"><i></i></label>
            <input type="email" value="{{old('email')}}" name="email" id="email" placeholder="Your email" />
            @error('email')
            <span>{{$message}}</span>
            @enderror
        </div>
        <div >
            <label for="password"><i></i></label>
            <input type="password" name="password" id="password" placeholder="Your Password" />
            @error('password')
            <span>{{$message}}</span>
            @enderror
        </div>
        <div >
            <input type="checkbox" name="remember-me" id="remember-me" />
            <label for="remember-me"><span><span></span></span>Remember
                me</label>
        </div>
        <div>
            <input type="submit" name="signin" id="signin" value="Log in" />
        </div>
    </form>
   
</div>
</div>
</div>
</section> --}}