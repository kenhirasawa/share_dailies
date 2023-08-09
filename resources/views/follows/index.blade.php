<x-app-layout>
    <x-slot name="header">Follows</x-slot>
        <h1>フレンド一覧</h1>
         <div class='followers'>
            @foreach ($followers as $follower)
                <div class='followerers'>
                    <h2 class='friend_id'>{{$follower->id}}</h2>
                    <h3 class='friend_name'>{{$follower->name}}</h3>
                    <p class='friend_email'>{{$follower->email}}</p>
                </div>
            @endforeach
        </div>
</x-app-layout>
<!--id 名前　登録日順に並ぶように-->