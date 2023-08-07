<x-app-layout>
    <x-slot name="header">share diary</x-slot>
        <h1>Share diary</h1>
        <a href='/diaries/create'>新規作成</a>
        <!--投稿日を表示したい-->
        <div class='diaries'>
            @foreach ($diaries as $diary)
                <div class='diary'>
                    <h2 class='title'>タイトル</h2>
                       <a href="/diaries/{{$diary->id}}">{{$diary->title}}</a>
                    <h3 class="post-author">投稿者</h3>
                    <p class='body'>本文</p>
                    <form action="/diaries/{{$diary->id}}"  id="form_{{$diary->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteDiary({{$diary->id}})">削除</button>
                    </form>
                </div>
            @endforeach
        </div>
        <script>
    function deleteDiary(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
    }
</script>
        <div class='paginate'>
            {{$diaries->links()}}
        </div>
</x-app-layout>