@extends('layouts.main')

{{-- title start here --}}
@push('title')
  Login
@endpush

{{-- login section  start here --}}
@section('login-section')

{{-- login section start here --}}
<div class="login-here">

    {{-- error message show here --}}
    @if(session('error'))
        <div class="error-danger delay">
            {{ session('error') }}
        </div>
    @endif

    {{-- success msg show here --}}
    @if (session('success'))
    <div class="success-message delay">
        {{ session('success') }}
    </div>
    @endif

    {{-- login start here --}}
    <div class="login">
        <p>Login Here</p>

        <div  class="user-info">
            {{-- form start here --}}
            <form method="post" action="{{route('signin.data')}}">
                @csrf
                <table class="login-1">
                    <tr class="inpt">
                        <td ><span>Username</span></td>
                        <td><input type="text" name="fullname" required>
                            <div class="red-color-validation">
                                @error('username')
                                {{$message}}
                                @enderror
                            </div>
                        </td>
                    </tr><br>
                    <tr class="inpt">
                        <td ><span>Password</span></td>
                        <td><input type="password" name="password" required>
                            <div class="red-color-validation">
                                @error('password')
                                {{$message}}
                                @enderror
                            </div>
                        </td>
                    </tr>
                    {{-- logn-btn start here --}}
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

{{-- signup section start here --}}
<div class="sign-up">
<div class="sign">
    <p>New to Enest? <a href=""> Sign up</a></p>
    {{-- user-info start here --}}
    <div  class="user-info">
        {{-- form start here --}}
        <form method="post" action="{{route('signup.data')}}">
            @csrf
            <table class="login-1">
                <tr class="inpt-1">
                    <td ><span>Full Name</span></td>
                    <td><input type="text" name="fullname" >
                        <div class="red-color-validation">
                        @error('fullname')
                        {{$message}}
                        @enderror
                        </div>
                    </td>
                </tr><br>
                {{-- inp-1 start here --}}
                <tr class="inpt-1">
                    <td ><span>Email</span></td>
                    <td><input type="email" name="email" >
                        <div class="red-color-validation">
                            @error('email')
                            {{$message}}
                            @enderror
                        </div>

                    </td>
                </tr>
                <tr class="inpt-1">
                    <td ><span>Password</span></td>
                    <td><input type="password" name="password" >
                        <div class="red-color-validation">
                            @error('password')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                </tr>
                {{-- logn-btn start here --}}
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
