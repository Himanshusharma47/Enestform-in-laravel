@extends('layouts.main')
@push('title')
  Login
@endpush


@section('login-section')

<div class="login-here">
    @if(session('error'))
    <div class="error-danger">
        {{ session('error') }}
    </div>
    @endif

    <div class="login">
        <p>Login Here</p>
        <div  class="user-info">

            <form method="post" action="{{route('signin.data')}}">
                @csrf
                <table class="login-1">
                    <tr class="inpt">
                        <td ><span>Username</span></td>
                        <td><input type="text" name="fullname" required>
                            @error('username')
                            {{$message}}
                            @enderror
                        </td>
                    </tr><br>
                    <tr class="inpt">
                        <td ><span>Password</span></td>
                        <td><input type="password" name="password" required>
                            @error('password')
                            {{$message}}
                            @enderror
                        </td>
                    </tr>
                    <tr class="logn-btn" >
                        <td></td>
                        <td><input class="log" type="submit" name="login" value="Login">
                        </td>
                    </tr>
                </table>
            </form>

        </div>
    </div>
</div>
</div>
<div class="sign-up">
<div class="sign">
    <p>New to Enest? <a href=""> Sign up</a></p>
    <div  class="user-info">
        <form method="post" action="{{route('signup.data')}}">
            @csrf
            <table class="login-1">
                <tr class="inpt-1">
                    <td ><span>Full Name</span></td>
                    <td><input type="text" name="fullname" required></td>
                </tr><br>
                <tr class="inpt-1">
                    <td ><span>Email</span></td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr class="inpt-1">
                    <td ><span>Password</span></td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr class="logn-btn" >
                    <td></td>
                    <td><input class="log" type="submit" name="signup" value="Sign up">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
</div>


@endsection
