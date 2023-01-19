<x-app-layout>
    <x-slot name="header">
        　  <h1>トップページ</h1>
    </x-slot>
    <body>
        <div class="media">
            <div class="media-body comment-body">
                <div class="row">
                    <span class="comment-body-user">{{$item->name}}</span>
                    <span class="comment-body-time">{{$item->created_at}}</span>
                </div>
                <span class="comment-body-content">{!! nl2br(e($item->comment)) !!}</span>
            </div>
        </div>
    </body>
</x-app-layout>