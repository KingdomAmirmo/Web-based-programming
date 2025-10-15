<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>لیست کاربران</title>
    <style>
        body {
            direction: rtl;
            text-align: right;
            font-family: "Vazirmatn", sans-serif;
            margin: 30px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            border: 1px solid #aaa;
        }

        a, button {
            font-family: inherit;
        }
    </style>
</head>
<body>
<h2>لیست کاربران</h2>
<a href="{{ route('users.create') }}">➕ افزودن کاربر جدید</a>

@if (session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="8">
    <tr>
        <th>شناسه</th>
        <th>نام</th>
        <th>ایمیل</th>
        <th>عملیات</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{ $user['id'] }}</td>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['email'] }}</td>
            <td>
                <a href="{{ route('users.edit', $user['id']) }}">✏️ ویرایش</a>
                <form action="{{ route('users.destroy', $user['id']) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">🗑 حذف</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
