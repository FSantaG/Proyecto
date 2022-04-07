<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.head')
    </head>
    <body class="antialiased">
        @include('layouts.navbar')
    
        <div class="profile-bg">
            <div style="border: none; margin-left:13%" class="profile-posts">
                    <h2 style="margin-left:1%">Recent posts:</h2>
                        @foreach($messages as $message)
                        <div class="post">
                            <p>{{ $message->message }}</p>
                            <hr>
                            <i>{{ $message->likes }}</i><button> + </button> <i>{{ $message->dislikes }}</i><button> - </button>
                        </div>
                        @endforeach
                    <!--  -->

                </div>
                <aside>
                    <div style="margin-top: 10%; margin-left:10%;">
                        <h2 style="margin-left:1%">Tags:</h2>
                        <p>PHP<input style="margin: 0px; padding: 0px;" type="checkbox"></p>
                        <p>JS<input style="margin: 0px; padding: 0px;" type="checkbox"></p>
                        <p>C#<input style="margin: 0px; padding: 0px;" type="checkbox"></p>
                        <p>C++<input style="margin: 0px; padding: 0px;" type="checkbox"></p>
                    </div>
                </aside>
            </div>
        </div>
    </body>
</html>