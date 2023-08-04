<x-app-layout>
    <x-slot name="header">share diary</x-slot>
    <h1 class="title">
        {{$diary->title}}
    </h1>
    <div class="content">
        <h3>本文</h3>
        <p>{{$diary->body}}</p>
    </div>
    <div class="footer">
        <a href="/diaries">戻る</a>
    </div>
</x-app-layout>