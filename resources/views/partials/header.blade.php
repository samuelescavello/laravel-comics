<header class="container d-flex justify-content-between align-items-center py-4 ">
        <div>
            <img src="{{asset('img/dc-logo.png')}}" alt="logo">
        </div>
        <ul>
            <li>
                @foreach ( $nav as $link)
                    <a class=" text-uppercase {{ Route::currentRouteName() === 'home'? 'active' : '' }}" href="{{route('home')}}">{{$link}}</a>

                </li>
                @endforeach
            
        </ul>
</header>
