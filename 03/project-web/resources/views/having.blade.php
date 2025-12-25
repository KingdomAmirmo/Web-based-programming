@extends('layouts.app')
@section('content')

    <h1>کاربرانی با مجموع سفارش > 500</h1>
    <ul style="background-color: darkorchid;color: white; border-radius: 20px;padding: 50px;">
        @foreach($users as $user)
            <li> شناسه کاربری: {{ $user->user_id }}, نام کاربر:
                {{ $user->user->name }} جمع سفارش:
                {{ round($user->total) }} تومان</li>
        @endforeach
    </ul>

@endsection
