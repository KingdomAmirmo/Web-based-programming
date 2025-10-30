@if ($errors->any())
    <div class="alert alert-danger">
        <h5 class="mb-2">⚠ خطا در ورود اطلاعات:</h5>
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
