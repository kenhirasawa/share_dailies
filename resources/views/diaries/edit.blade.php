<x-app-layout>
    <x-slot name="header">share diary</x-slot>
    <h1 class="title">投稿編集画面</h1>
    <div class="title">
        
    </div>
    <form action="/diaries/{{$diary->id}}" method="POST">
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
        <input type="submit" value="更新"/>
    </form>
    <div class="footer">
        <a href="/diaries/{{$diary->id}}">戻る</a> 　
        <!--個別の投稿に戻りたい-->
    </div>
</x-app-layout>
<!--画像投稿できる枠を作る-->