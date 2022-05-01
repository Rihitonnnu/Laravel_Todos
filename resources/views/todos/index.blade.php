<x-header/>

<body class="antialiased">
    <div class="">
        <h1>Todo一覧</h1>
        @foreach ($e_all as $e_todo)
            <div class="todo-content">
                <div class="article-title">ユーザー名：{{ $e_todo->name }}</div>
                <div class="article-title">タイトル：{{ $e_todo->title }}</div>
                <div class="article-title">内容：{{ $e_todo->body }}</div>
                <div class="article-title">{{ $e_todo->created_at }}</div>
            </div>
        @endforeach
    </div>
</body>

<style>
    body {
        font-family: 'Nunito', sans-serif;
    }

    .todo-content {
        border: 2px solid red;
    }

</style>

