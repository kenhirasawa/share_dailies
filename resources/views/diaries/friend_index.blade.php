<x-app-layout>
    <x-slot name="header">Share Diary</x-slot>
        <h1>ユーザーの投稿記事</h1>
        <div class='diaries'>
            @foreach ($diaries as $diary)
                <div class='diary'>
                    <h2 class='title'>
                        <a href="/diaries/{{$diary->id}}">{{$diary->title}}</a>
                    </h2>
                    <h3 class="date">{{$diary->date}}</h3>  
                　　<h3 class="post-author">{{$diary->user->name}}</h3>
                　　<p class='body'>{{$diary->body}}</p>
                </div>
                <hr>
            @endforeach
        </div>

</x-app-layout>