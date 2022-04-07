<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.head')
    </head>
    <body class="antialiased">
        @include('layouts.navbar')
    
        <div class="profile-bg">
            <div class="profile-top">
                <img class="avatar-big" src="img/img_avatar.png">
                {{-- <img src="{{Auth::user()->profile_photo_path}}" alt="{{Auth::user()->name}}"> --}}
                <div class="profile-info">
                    <h2><b>Username</b></h2>
                    <p><i>User status</i></p>
                </div>
            </div>
            
            <div class="profile-posts">
                <h2 style="margin-left:1%">Recent posts:</h2>
                <div class="post">
                    <p>Boomer moment</p>
                    <hr>
                   <button> + </button><button> - </button>
                    <!-- <img src="img/team2.jpg"> -->
                </div>
                <div class="post">
                    <p>Bloomer moment</p>
                    <hr>
                   <button> + </button><button> - </button>
                    <!-- <img src="img/team2.jpg"> -->
                </div>
                <div class="post">
                    <p>Doomer moment</p>
                    <hr>
                   <button> + </button><button> - </button>
                    <!-- <img src="img/team2.jpg"> -->
                </div>
                <div class="post">
                    <p>Zoomer moment</p>
                    <hr>
                   <button> + </button><button> - </button>
                    <!-- <img src="img/team2.jpg"> -->
                </div>
                <div class="post">
                    <p>Coomer moment</p>
                    <hr>
                   <button> + </button><button> - </button>
                    <!-- <img src="img/team2.jpg"> -->
                </div>
            </div>
        </div>
    </body>
</html>