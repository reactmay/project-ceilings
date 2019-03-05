<main>
    <section class="content">
        <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">// {{ $title }}</h1></div>
        <!-- Stat Boxes -->
        <div class="row">
            {{--<div class="col l3 s6">--}}
            {{--<!-- small box -->--}}
            {{--<div class="small-box bg-aqua">--}}
            {{--<div class="inner">--}}
            {{--<h3>420</h3>--}}
            {{--<p>Accounts</p>--}}
            {{--</div>--}}
            {{--<div class="icon">--}}
            {{--<i class="ion ion-person-add"></i>--}}
            {{--</div>--}}
            {{--<a href="#" class="small-box-footer" class="animsition-link">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
            {{--</div>--}}
            {{--</div><!-- ./col -->--}}
            {{--<div class="col l3 s6">--}}
            {{--<!-- small box -->--}}
            {{--<div class="small-box bg-green">--}}
            {{--<div class="inner">--}}
            {{--<h3>69</h3>--}}
            {{--<p>New Toons</p>--}}
            {{--</div>--}}
            {{--<div class="icon">--}}
            {{--<i class="ion ion-stats-bars"></i>--}}
            {{--</div>--}}
            {{--<a href="#" class="small-box-footer" class="animsition-link">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
            {{--</div>--}}
            {{--</div><!-- ./col -->--}}
            <div class="col s12">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{ $count_messages }}</h3>
                        <p>Получено сообщений</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-email"></i>
                    </div>
                    <a href="{{ route('messages') }}" class="small-box-footer" class="animsition-link">Посмотреть все <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            {{--<div class="col s6">--}}
            {{--<!-- small box -->--}}
            {{--<div class="small-box bg-red">--}}
            {{--<div class="inner">--}}
            {{--<h3>1337</h3>--}}
            {{--<p>Уникальных посетителей</p>--}}
            {{--</div>--}}
            {{--<div class="icon">--}}
            {{--<i class="ion ion-pie-graph"></i>--}}
            {{--</div>--}}
            {{--<a href="#" class="small-box-footer" class="animsition-link">Больше информации <i class="fa fa-arrow-circle-right"></i></a>--}}
            {{--</div>--}}
            {{--</div>--}}

            <div class="container">
                <h3 class="center-align">Последние 5 непрочитанных сообщений с сайта</h3>
                <div class="row">
                    @foreach($messages as $message)
                        @if($message->checked == 0)
                            <div class="col s12">
                                <div class="card blue-grey darken-3">
                                    <div class="card-content white-text">
                                        #{{ $message->id }}<span class="card-title"> {{ $message->name }}</span>
                                        <p>
                                            @if($message->message)
                                                @isset($message->message)
                                                    {{ $message->message }}
                                                @endisset
                                            @else()
                                                Пусто
                                            @endif
                                        </p>
                                    </div>
                                    <div class="card-action">
                                        <span>{{ $message->phone }}</span>
                                        <span>
                                        @if($message->email)
                                                @isset($message->email)
                                                    {{ $message->email }}
                                                @endisset
                                            @else()
                                                E-mail не указан
                                            @endif
                                    </span>
                                        <div class="row">
                                            <p class="col s6">{{ $message->created_at }}</p>
                                            {!! Form::open(['url' => route('messagesEdit', array('message' => $message['id'])), 'class' => 'form-horizontal', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                            {!! Form::hidden('id', $message['id']) !!}
                                            <p class="col s6">{!! Form::button('Прочитано', ['class' => 'waves-effect waves-light btn tooltipped', 'type' => 'submit', 'data-position' => 'top', 'data-tooltip' => 'Отметить как прочитано']) !!}</p>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>
