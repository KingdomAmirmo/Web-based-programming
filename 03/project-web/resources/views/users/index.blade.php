@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>لیست کاربران</h2>
        <a href="{{ route('users.create') }}" class="btn btn-primary">ایجاد کاربر جدید</a>
    </div>

    @if($users->isEmpty())
        <div class="alert alert-info">هنوز کاربری وجود ندارد.</div>
    @else
        <table class="table table-bordered text-center bg-white">
            <thead class="table-dark">
            <tr>
                <th style="width:80px">#</th>
                <th>نام</th>
                <th>ایمیل</th>
                <th style="width:220px">عملیات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td class="text-start">{{ $user->name }}</td>
                    <td class="text-start">{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.show', $user) }}" class="btn btn-sm btn-info">نمایش</a>
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-warning">ویرایش</a>

                        <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline-block"
                              onsubmit="return confirm('آیا از حذف این کاربر مطمئن هستید؟');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">حذف</button>
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
