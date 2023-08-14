<x-app-layout>
    <x-slot name="header">Share Diary</x-slot>
    <h1>新規投稿作成画面</h1>
    <form action="/diaries" method="POST">
        @csrf
        <div class="date">
            <h2>日付</h2>
            <input type="date" name="post[date]" value="{{old('post.date')}}"/>
            <p class="date_error" style="color:red">{{$errors->first('post.date')}}</p>
        </div>
        <div class="title">
            <h2>タイトル名</h2>
            <input type="text" name="post[title]" placeholder="タイトル" value="{{old('post.title')}}"/>
            <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
        </div>
        <div class="body">
            <h2>本文</h2>
            <textarea name="post[body]" placeholder="内容を入力してください">{{old('post.body')}}</textarea>
            <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
        </div>
        <button type="submit" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">保存する</button>
    </form>
    <div class="footer">
        <a href="/diaries">
            <button type="button" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">戻る</button>
        </a>
    </div>
</x-app-layout>
<!--画像投稿できる枠を作る-->
<!--投稿者記入欄を作る-->