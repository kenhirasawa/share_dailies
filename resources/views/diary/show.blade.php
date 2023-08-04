<x-app-layout>
    <x-slot name="header">share diary</x-slot>
    <h1 class="title">
        {{$post->title}}
    </h1>
    <div class="content">
        <h3>本文</h3>
        <p>{{$post->body}}</p>
    </div>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</x-app-layout>