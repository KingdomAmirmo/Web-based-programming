@extends('layouts.app')

@section('content')
    <h3>ایجاد پست جدید</h3>

    @include('partials.errors')

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">عنوان</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">متن</label>
            <textarea name="body" class="form-control" rows="6" required>{{ old('body') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">نویسنده</label>
            <select name="user_id" class="form-select" required>
                <option value="">انتخاب کاربر</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" @selected(old('user_id') == $user->id)>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">ذخیره</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">انصراف</a>
    </form>
@endsection
