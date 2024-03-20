@extends('layout')

@section('content')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            max-width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgb(221, 221, 221);
        }

        .input-field {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        .input-field input {
            padding: 8px;
            width: 350px;
            margin: 3px 0px;
        }

        .error {
            width: 350px;
            color: #f20000;
            font-size: 10px;
        }

        .submit-btn {
            width: 350px;
            padding: 8px;
            cursor: pointer;
        }
    </style>


    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="input-field">
            <label for="username">إسم المستخدم</label>
            <input type="text" name="username" placeholder="إسم المستخدم">
            @error('username')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>

        <div class="input-field">
            <label for="password">كلمة السر</label>
            <input type="password" name="password" id="password" placeholder="كلمة السر">
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="submit-btn">تسجيل الدخول</button>
    </form>
@endsection
