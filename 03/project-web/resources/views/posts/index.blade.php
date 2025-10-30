@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>پست‌ها</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">ایجاد پست جدید</a>
    </div>

    @if($posts->isEmpty())
        <div class="alert alert-info">هنوز هیچ پستی نیست.</div>
    @else
        <div class="list-group">
            <div class="list-group-item d-flex justify-content-between bg-light fw-bold">
                <div class="col-1">#</div>
                <div class="col-4">عنوان</div>
                <div class="col-3">نویسنده</div>
                <div class="col-3">تاریخ ایجاد</div>
            </div>

            @foreach($posts as $post)
                <a href="{{ route('posts.show', $post) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <div class="col-1 text-center">{{ $loop->iteration }}</div>
                    <div class="col-4"><strong>{{ $post->title }}</strong></div>
                    <div class="col-3 text-muted small">{{ $post->user->name ?? '—' }}</div>
                    <div class="col-3 text-muted small">{{ $post->created_at->format('Y-m-d H:i') }}</div>
                </a>
            @endforeach
        </div>
    @endif
@endsection
