<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        a{
            text-decoration: none;
        }
        .header{
            display: flex;
            justify-content: center;
        }
        .link-wrap{
            margin-right: 20px;
        }

    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="header hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <div class="link-wrap">
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            </div>
            <div class="link-wrap">
                <a href="{{ route('todo.index') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Todoリスト一覧へ</a>
            </div>
            <div class="link-wrap">
                <a href="{{ route('todo.create') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">タスクの作成</a>
            </div>
            <div class="link-wrap">
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">新規登録</a>
                @endif
            </div>


        </div>
    </div>
</body>

</html>
