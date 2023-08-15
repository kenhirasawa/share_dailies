<x-app-layout>
    <x-slot name="header">Share Diary</x-slot>
    <div class="p-6">
        <h1 class="text-2xl">{{$diary->user->name}}の投稿詳細画面</h1>
        <h1 class="title">
            {{$diary->title}}
        </h1>
        <h3 class="post-author">{{$diary->user->name}}</h3>
        <h3 class="date">{{$diary->date}}</h3>
        <div class="content">
            <h3>本文</h3>
            <p>{{$diary->body}}</p>
        </div>
        @if($diary->image_url)
        <div>
            <img src="{{ $diary->image_url }}" alt="画像が読み込めません。"/>
        </div>
        @endif
        <div class="edit flex mt-2">
            <a href="/diaries/{{$diary->id}}/edit">
                <button type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">編集</button>
            </a>
            <a href="/follow_diaries/{{$follower->id}}">
                <button type="button" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">一覧へ戻る</button>
            </a>
        </div>
    </div>
</x-app-layout>
<!--画像見れるようにする-->