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

        .todo-content {
            border: 2px solid red;
        }

    </style>

<body class="antialiased">
    <div class="">
        <h1>Todo一覧</h1>
        @foreach ($e_all as $e_todo)
            <div class="todo-content">
                <div class="article-title">{{ $e_todo->name }}</div>
                <div class="article-title">{{ $e_todo->title }}</div>
                <div class="article-title">{{ $e_todo->body }}</div>
                <div class="article-title">{{ $e_todo->created_at }}</div>
            </div>
        @endforeach
    </div>
</body>

</head>
