<x-app-layout>
    <x-slot name="header">Follows</x-slot>
    <div class="p-6">
        <h1 class="text-2xl">フレンド一覧</h1>
        <form action="/follow_search" method="POST">
            @csrf
            <div class="email">
                <input type="text" name="follow[email]">
                <button type="submit" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">フレンド検索</button>
            　　<p class="search__error" style="color:red">{{ $errors->first('follow.email') }}</p>  <!--｛｛｝｝のなかはphpの書き方になっているよ-->
            </div>
        </form>
         <div class='followers'>
            @foreach ($followers as $follower)
                <div class='followerers pl-2  bg-white border-2 rounded-lg mt-2'>
                    <h3 class='friend_name'>
                         <a href="/follow_diaries/{{$follower->id}}" class="text-blue-500 underline hover:no-underline">{{$follower->name}}</a>
                    </h3>
                    <p class='friend_email'>{{$follower->email}}</p>
                </div>
                <hr><!--投稿ごとの境界線-->
            @endforeach
        </div>
    </div>
        <div class='paginate'>
            {{$followers->links()}}
        </div>
</x-app-layout>
<!--id 名前　登録日順に並ぶように-->
<!--emailをコントローラーに渡す-->
<!--コントローラーではwhere分を使う-->
<!--フレンド検索のボタンを目立たせる　　検索についてのアナウンスを入れる-->
<!--該当するアドレスがなかった時の処理を追加する-->
<!--バリデーションでfollowモデルに追加-->