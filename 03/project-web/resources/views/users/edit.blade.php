<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>ویرایش کاربر</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h3 class="mb-4">ویرایش کاربر</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <h5>⚠ خطا در ورود اطلاعات:</h5>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">نام</label>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">ایمیل</label>
            <input type="email" name="email" value="{{ $user->email }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">رمز عبور جدید (اختیاری)</label>
            <input type="password" name="password" class="form-control">
            <small class="text-muted">اگر نمی‌خواهی تغییر کند، خالی بگذار.</small>
        </div>

        <button type="submit" class="btn btn-primary">ذخیره تغییرات</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">بازگشت</a>
    </form>
</div>
</body>
</html>
