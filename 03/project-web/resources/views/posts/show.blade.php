@extends('layouts.app')

@section('content')
    <div class="card mb-3">
        <div class="card-body">
            <h3>{{ $post->title }}</h3>
            <div class="text-muted mb-2">نویسنده: {{ $post->user->name ?? '—' }} — {{ $post->created_at->format('Y-m-d H:i') }}</div>
            <p>{!! nl2br(e($post->body)) !!}</p>

            <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">ویرایش پست</a>

            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline-block" onsubmit="return confirm('آیا حذف شود؟');">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">حذف</button>
            </form>
        </div>
    </div>

    {{-- comments --}}
    <div class="card mb-3">
        <div class="card-body">
            <h5>کامنت‌ها</h5>

            @if($post->comments->isEmpty())
                <p class="text-muted">هنوز کامنتی ثبت نشده.</p>
            @else
                <ul class="list-group mb-3">
                    @foreach($post->comments as $comment)
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <strong>{{ $comment->user->name ?? '—' }}</strong>
                                    <div class="small text-muted">{{ $comment->created_at->format('Y-m-d H:i') }}</div>
                                    <div class="mt-1">{{ $comment->body }}</div>
                                </div>
                                <div class="text-start">
                                    <a href="{{ route('comments.edit', $comment) }}" class="btn btn-sm btn-warning">ویرایش</a>

                                    <form action="{{ route('comments.destroy', $comment) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('حذف شود؟')">حذف</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif

            {{-- form add comment (nested) --}}
            <h6>افزودن کامنت</h6>
            @include('partials.errors')
            <form action="{{ route('posts.comments.store', $post) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">نویسنده</label>
                    <select name="user_id" class="form-select" required>
                        <option value="">انتخاب کاربر</option>
                        @foreach(App\Models\User::all() as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">متن کامنت</label>
                    <textarea name="body" class="form-control" rows="3" required></textarea>
                </div>

                <button class="btn btn-primary">ثبت کامنت</button>
            </form>
        </div>
    </div>

    <a href="{{ route('posts.index') }}" class="btn btn-secondary">بازگشت</a>
@endsection
