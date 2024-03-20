@extends('layout')

@section('content')
    <form action="" method="POST">
        @csrf
        <div class="input-field">
            <label for="name">إسم الشخص</label>
            <input type="text" name="name" id="name" placeholder="إسم الشخص">
        </div>

        <div class="input-field">
            <label for="nid">إسم الشخص</label>
            <input type="number" name="nid" id="nid" placeholder="رقم الهوية">
        </div>


    </form>
@endsection
