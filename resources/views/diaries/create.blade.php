<x-app-layout>
    <x-slot name="header">share diary</x-slot>
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
        <input type="submit" value="store"/>
    </form>
    <div class="footer">
        <a href="/diaries">戻る</a>
    </div>
</x-app-layout>
<!--画像投稿できる枠を作る-->