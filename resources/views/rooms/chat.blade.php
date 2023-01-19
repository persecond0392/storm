<x-app-layout>

    <x-slot name="header">
        　  <h1></h1>
    </x-slot>
    <body>
        <div class="chat-container row justify-content-center">
            <div class="chat-area">
                <div class="card">
                    <div class="card-header">議題：</div>
                    <div class="card-body chat-card">
                        @foreach ($comments as $comment)
                            <div class='comments'>
                                <p class='comment'>{{$comment->comment}}</p>
                            </div>
                        @endforeach
                    </div>
                    
            </div>
        </div>
     
    
        <div class="comment-container row justify-content-center">
            <form method="POST" action="{{$key}}/comment" >
                @csrf
                <div class="comment-container row justify-content-center">
                    <div class="input-group comment-area">
                        <textarea class="form-control" id="comment" name="comment" placeholder="push massage (shift + Enter)"
                            aria-label="With textarea"
                            onkeydown="if(event.shiftKey&&event.keyCode==13){document.getElementById('submit').click();return false};"></textarea>
                        <button type="submit" id="submit" class="btn btn-outline-primary comment-btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        
        
       
         <p>キー:{{$key}}<p>
        <div class="footer">
         
        </div>
    </body>
</x-app-layout>