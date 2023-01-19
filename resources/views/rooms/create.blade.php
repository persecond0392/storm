<x-app-layout>
    <x-slot name="header">
        　  <h1></h1>
    </x-slot>
    <body>
         <h1></h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>議題</h2>
                <input type="text" name="title" placeholder="家族旅行　行き先" required/>
                
            </div>
            <input type="submit" value="作成"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</x-app-layout>