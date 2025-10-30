@extends('layouts.app')

@section('content')
    <h3 class="mb-4">ویرایش پست</h3>

    @include('partials.errors')

    <form action="{{ route('posts.update', $post) }}" method="POST" class="bg-white p-3 border rounded">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">عنوان</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $post->title) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">متن</label>
            <textarea name="body" class="form-control" rows="6" required>{{ old('body', $post->body) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">نویسنده</label>
            <select name="user_id" class="form-select" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" @selected(old('user_id', $post->user_id) == $user->id)>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary">ذخیره تغییرات</button>
        <a href="{{ route('posts.show', $post) }}" class="btn btn-secondary">انصراف</a>
    </form>
@endsection
