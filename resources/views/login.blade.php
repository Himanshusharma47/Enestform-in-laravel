@extends('layouts.main')
@push('title')
  Login
@endpush


@section('login-section')
			
<div class="login-here">
    <div class="login">
        <p>Login Here</p>
        <div  class="user-info">
          
            <form method="post">
                <table class="login-1">
                    <tr class="inpt">
                        <td ><span>Username</span></td>
                        <td><input type="text" name="unm" required></td>
                    </tr><br>
                    <tr class="inpt">
                        <td ><span>Password</span></td>
                        <td><input type="password" name="pass" required></td>
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
        <form method="post">
            <table class="login-1">
                <tr class="inpt-1">
                    <td ><span>Full Name</span></td>
                    <td><input type="text" name="fname" required></td>
                </tr><br>
                <tr class="inpt-1">
                    <td ><span>Email</span></td>
                    <td><input type="email" name="eml" required></td>
                </tr>
                <tr class="inpt-1">
                    <td ><span>Password</span></td>
                    <td><input type="password" name="pw" required></td>
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