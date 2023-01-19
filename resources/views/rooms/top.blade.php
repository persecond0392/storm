

<x-app-layout>
    <x-slot name="header">
        　  <h1></h1>
    </x-slot>
    <body>
        <div class='body'>
            <div class='introduction'>
            </div>
            <div class='start'>
                <a href='create'>ファシリテーターになる</a>
                <br>
                <form action="/enter" method="POST">
                    @csrf
                    <div class="title">
                        <h2>キーを入力して参加する</h2>
                        <input type="text" name="key" placeholder="キー"/>
                        <p class="title__error" style="color:red">{{ $errors->first('key') }}</p>
                    </div>
                    <input type="submit" value="参加する"/>
                </form>
            </div>
        </div>
    </body>
</x-app-layout>