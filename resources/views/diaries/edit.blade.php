<x-app-layout>
    <x-slot name="header">Share Diary</x-slot>
    <div class="p-6">
        <h1 class="text-2xl">投稿編集画面</h1>
        <form action="/diaries/{{$diary->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="content_date">
                <input type="date" name="post[date]" value="{{$diary->date}}">
                <p class="date_error" style="color:red">{{$errors->first('post.date')}}</p>
            </div>    
            <div class="content_title">
                <h2>タイトル名</h2>
                <input type="text" name="post[title]" value="{{$diary->title}}">
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="content_body">
                <h2>本文</h2>
                <input type="text" name="post[body]" value="{{$diary->body}}">
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div class="image">
                <input type="file" name="image" value="{{$diary->image_url}}">
            </div>
            <div class="flex mt-2">
                <button type="submit" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">更新する</button>
                <a href="/diaries/{{$diary->id}}">
                    <button type="button" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">更新せず戻る</button>
                </a>
            </div>
        </form>
        <!--個別の投稿に戻りたい-->
        </div>
</x-app-layout>
<!--画像投稿できる枠を作る-->