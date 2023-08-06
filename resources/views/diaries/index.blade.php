<x-app-layout>
    <x-slot name="header">share diary</x-slot>
        <h1>Share diary</h1>
        <a href='/diaries/create'>新規作成</a>
        <!--投稿日を表示したい-->
        <div class='diaries'>
            @foreach ($diaries as $diary)
                <div class='diary'>
                    <h2 class='title'>Title</h2>
                       <a href="/diaries/{{$diary->id}}">{{$diary->title}}</a>
                    <h3 class="post-author">投稿者</h3>
                    <p class='body'>sample body</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{$diaries->links()}}
        </div>
</x-app-layout>