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

        main {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .btn {
            text-decoration: none;
            color: black;
            padding: 7px;
            border-radius: 5px;
            box-shadow: 0px 0px 3px -5px black;
            cursor: pointer;
            border: 0;
            font-weight: bold;
            width: 100%;
            text-align: center;
            transition: all 0.3s ease;
        }

        .btn:hover {
            box-shadow: 0px 3px 10px -5px black;
        }

        .action-btn {
            background-color: rgb(221, 221, 221);
        }

        .danger-btn {
            background-color: #b92323;
            color: white;
        }
    </style>

    <main>
        <a href="{{ route('create') }}" class="btn action-btn">إستيراد أسماء عن طريق ملف csv</a>
        <a href="" class="btn action-btn">تسجيل إسم جديد</a>
        <a href="" class="btn action-btn">عرض الأسماء المسجلة</a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn danger-btn">تسجيل الخروج</button>
        </form>
    </main>


    {{-- <form action="{{ route('import') }}" method="POST">
    @csrf
    <label for="import">إستيراد أسماء عن طريق ملف CSV</label>
    <input type="file" name="import" id="import">
    <button type="submit">إستيراد</button>
</form> --}}
@endsection
