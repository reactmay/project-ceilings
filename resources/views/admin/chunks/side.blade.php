<ul id="slide-out" class="side-nav fixed z-depth-4">
    <li>
        <div class="userView">
            <div class="background">
                <img src="{{ asset('control/assets/img/photo1.png') }}">
            </div>
            <img class="circle" src="{{ asset('control/assets/img/avatar04.png') }}">
            <span class="white-text name">Добро пожаловать,</span>
            <span class="white-text email">{{ Auth::user()->name }}!</span>
        </div>
    </li>

    {{--<li>--}}
    {{--<form class="sidebar-form">--}}
    {{--<div class="input-group">--}}
    {{--<input id="accounts" type="text" name="username" class="form-control" placeholder="Universal Search" autocomplete="off" />--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</li>--}}

    <li class="{{ Request::path() == 'admin' ? 'active' : '' }}"><a href="{{ route('admin') }}"><i class="material-icons pink-item">dashboard</i>Главная</a></li>
    <li><a class="active" target="_blank" href="{{ url('/') }}"><i class="material-icons pink-item">undo</i>Вернуться на сайт</a></li>
    <li><div class="divider"></div></li>

    <li><a class="subheader">Управление</a></li>
    <li class="{{ Request::path() == 'admin/messages' ? 'active' : '' }}"><a href="{{ route('messages') }}"><i class="material-icons pink-item">mail</i>Просмотр сообщений</a></li>
    {{--<li><a href=""><i class="material-icons pink-item">thumbs_up_down</i>Настройка сервисов</a></li>--}}
    {{--<li><a href=""><i class="material-icons pink-item">note_add</i>Настройка портфолио</a></li>--}}

    {{--<li class="no-padding">--}}
    {{--<ul class="collapsible collapsible-accordion">--}}
    {{--<li>--}}
    {{--<a class="collapsible-header">User Management<i class="material-icons pink-item">person</i></a>--}}
    {{--<div class="collapsible-body">--}}
    {{--<ul>--}}
    {{--<li><a href="userdetails.html">User Detail</a></li>--}}
    {{--<li><a href="recentusers.html">Recent Users</a></li>--}}
    {{--<li><a href="reports.html">Reports</a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</li>--}}

    {{--<li class="no-padding">--}}
        {{--<ul class="collapsible collapsible-accordion">--}}
            {{--<li>--}}
                {{--<a class="collapsible-header">Прочее<i class="material-icons pink-item">arrow_drop_down</i></a>--}}
                {{--<div class="collapsible-body">--}}
                    {{--<ul>--}}
                        {{--<li><a href="">Каталог иконок</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</li>--}}
</ul>
