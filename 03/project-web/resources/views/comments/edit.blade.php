@extends('layouts.app')

@section('content')
    <h3 class="mb-4">ویرایش کامنت</h3>

    @include('partials.errors')

    <form action="{{ route('comments.update', $comment) }}" method="POST" class="bg-white p-3 border rounded">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">نویسنده</label>
            <select name="user_id" class="form-select" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" @selected(old('user_id', $comment->user_id) == $user->id)>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">متن کامنت</label>
            <textarea name="body" class="form-control" rows="4" required>{{ old('body', $comment->body) }}</textarea>
        </div>

        <button class="btn btn-primary">ذخیره تغییرات</button>
        <a href="{{ route('posts.show', $comment->post_id) }}" class="btn btn-secondary">بازگشت</a>
    </form>
@endsection
