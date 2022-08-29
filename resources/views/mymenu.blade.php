
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="m-0"><img src="" alt="Logo" id="logo-change"></h1>
              {{--   <img src="{{asset('img/blue_logo.png')}}" alt="Logo">--}}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    @foreach ($items as $item)
                    @php


                    $isActive = null;

                   
                    if(url($item->link()) == url()->current()){
                        $isActive = 'active';
                    }


                @endphp
                    <div class="nav-item dropdown">
                        <a href="{{ url($item->link()) }}" class="nav-link {{ $isActive }}">{{ $item->title }}</a>
                    </div>
                    @endforeach




                </div>


            </div>
        </nav>

