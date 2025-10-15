@extends('layouts.app')

@section('content')
    <h2>نمایش کاربر</h2>

    <div class="card bg-white p-3">
        <p><strong>#</strong> {{ $user['id'] }}</p>
        <p><strong>نام:</strong> {{ $user['name'] }}</p>
        <p><strong>ایمیل:</strong> {{ $user['email'] }}</p>

        <a href="{{ route('users.edit', $user['id']) }}" class="btn btn-warning">ویرایش</a>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">بازگشت</a>
    </div>
@endsection
