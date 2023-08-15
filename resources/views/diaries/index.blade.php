<x-app-layout>
    <x-slot name="header">Share Diary</x-slot>
    <div class="p-6">
        <h1 class="text-2xl">投稿記事の一覧</h1>
        <a href='/diaries/create'>
            <button type='button' class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">新規投稿作成</button>
        </a>
        <!--投稿日を表示したい-->
        <div class='diaries'>
            @foreach ($diaries as $diary)
                <div class='diary bg-white border-2 rounded-lg pl-2 mt-2'>
                    <h2 class='title'>
                        <a href="/diaries/{{$diary->id}}" class="text-blue-500 underline hover:no-underline">{{$diary->title}}</a>
                    </h2>
                    <h3 class="date">{{$diary->date}}</h3>
                    <h3 class="post-author">{{$diary->user->name}}</h3> <!--diaryモデルに書いてあるuserテーブルとのリレーションで名前が持ってこれる-->
                    <p class='body'>{{$diary->body}}</p>
                    <form action="/diaries/{{$diary->id}}"  id="form_{{$diary->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800" onclick="deleteDiary({{$diary->id}})">削除</button>
                    </form>
                </div>
                
            @endforeach
        </div>
    </div>
    <div class='paginate'>
        {{$diaries->links()}}
    </div>
</x-app-layout>
<script>
    function deleteDiary(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
    }
</script>
<!--新規作成ボタンを目立たせる-->
<!--投稿ごとに境目を作る-->