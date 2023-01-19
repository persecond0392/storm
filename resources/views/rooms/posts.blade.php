<x-app-layout>
    <x-slot name="header">
        　  <h1>トップページ</h1>
    </x-slot>
    <body>
        <p>議題{{$title}}</p>
         <p>キー:{{$key}}<p>
          <a href='/{{$key}}'>入室する</a>
        <div class="footer">

        </div>
    </body>
</x-app-layout>


 