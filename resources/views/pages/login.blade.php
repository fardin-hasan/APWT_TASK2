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

<div class="main">
    <section>
        <div >
            <div >
                <div >
                    
                    <a href="{{ route ('registration') }}" >Create an account</a>
                </div>

                <div >
                    <h2>Register</h2>
                    <form method="POST" action="{{route('success')}}">
                        {{csrf_field()}}
                        <div >
                            <div>
                                @error('email')
                                <h6 >{{$message}}</h6>
                                @enderror
                            </div>
                            <label for="email"><i ></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div >
                            <div>
                                @error('password')
                                <h6 >{{$message}}</h6>
                                @enderror
                            </div>
                            <label for="your_pass"><i ></i></label>
                            <input type="password" name="your_pass" id="your_pass" placeholder="Your Password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me"  />
                            <label for="remember-me" ><span><span></span></span>Remember me</label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin"value="Log in"/>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

</html>