<x-header/>

<body class="antialiased">
    <div class="">
        <h1>タスク作成</h1>
        <form action="{{ route('todo.store') }}" method="POST">
            @csrf
            <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600">自分の名前 ※必須</label>
                <input type="text" id="name" name="name" required
                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600">タイトル ※必須</label>
                <input type="text" id="title" name="title" required
                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600">タスク内容 ※必須</label>
                <br>
                <textarea id="body" name="body" required
                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"></textarea>
            </div>
            <div class="relative">
                <button
                class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">投稿する</button>
            </div>
        </form>
    </div>
</body>


