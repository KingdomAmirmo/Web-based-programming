@extends('layouts.app')

@section('content')
    <h2>ویرایش کاربر</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update', $user['id']) }}" method="POST" class="bg-white p-3 border rounded">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">نام</label>
            <input type="text" name="name" value="{{ old('name', $user['name']) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">ایمیل</label>
            <input type="email" name="email" value="{{ old('email', $user['email']) }}" class="form-control" required>
        </div>

        <button class="btn btn-primary" type="submit">به‌روزرسانی</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">انصراف</a>
    </form>
@endsection
