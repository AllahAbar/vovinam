<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin người dùng</title>
</head>
<body>
    <form action="/pos" method="POST">
        @csrf

        <h1>Thông tin người dùng</h1>

        @php
            $user = DB::table('table_user')->where('id', 1)->first();
        @endphp

        @if ($user)
            <p>Xin chào, đây là ví dụ hoạt động!</p>
        @endif

    </form>
</body>
</html>
