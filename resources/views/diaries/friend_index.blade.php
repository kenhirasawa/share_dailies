<x-app-layout>
    <x-slot name="header">Share Diary</x-slot>
    <div class="p-6">
        <h1 class="text-2xl">{{$follower->name}}の投稿一覧</h1>
        <div class='diaries'>
            @foreach ($diaries as $diary)
                <div class='diary pl-2 bg-white border-2 rounded-lg mt-2'>
                    <h2 class='title'>
                        <a href="/follow_diaries/{{$follower->id}}/{{$diary->id}}" class="text-blue-500 underline hover:no-underline">{{$diary->title}}</a>
                    </h2>
                    <h3 class="date">{{$diary->date}}</h3>  
                    <h3 class="post-author">{{$diary->user->name}}</h3>
                    <p class='body truncate'>{{$diary->body}}</p>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
</x-app-layout>