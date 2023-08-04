<x-app-layout>
    <x-slot name="header">share diary</x-slot>
       <h1>Share diary</h1>
       <div class='posts'>
           @foreach ($posts as $post)
               <div class='post'>
                   <h2 class='title'>Title</h2>
                        <a href="/dialies//{{$diary->id}}">{{$diary->title}}</a>
                   <h3 class="post-author">投稿者</h3>
                   <p class='body'>sample body</p>
               </div>
            @endforeach
       </div>
       <div class='paginate'>
           {{$dialies->links()}}
       </div>
</x-app-layout>