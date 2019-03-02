<div class="container">
    <div class="navbar-header">
        <!-- responsive nav button -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- /responsive nav button -->

        <!-- logo -->
        <a class="navbar-brand" href="#body">
            <h1 id="logo">
                <img src="{{ asset('meghna2/img/2.png') }}" alt="Meghna" height="40" width="110"/>
            </h1>
        </a>
        <!-- /logo -->
    </div>

    <!-- main nav -->
    @if(isset($menu))
        <nav class="collapse navbar-collapse navbar-right" role="Navigation">
            <ul id="nav" class="nav navbar-nav">
                @foreach($menu as $item)
                    <li><a href="#{{ $item['alias'] }}">{{ $item['title'] }}</a></li>
                @endforeach
            </ul>
        </nav>
    @endif
    <!-- /main nav -->
</div>
