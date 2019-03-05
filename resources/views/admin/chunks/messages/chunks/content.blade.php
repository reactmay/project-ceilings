<main>
    <section class="content">
        <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">// {{ $title }} </h1></div>
        <div class="container">
            <div class="row">
                @foreach($messages as $message)
                    @if($message->checked != 0)
                        <div class="col s6">
                            <div class="card blue-grey darken-1">
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
                                        <p class="col s6">{!! Form::button('Уже прочитано', ['class' => 'waves-effect waves-light btn tooltipped disabled', 'type' => 'submit', 'data-position' => 'top', 'data-tooltip' => 'Отметить как прочитано']) !!}</p>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col s6">
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
            {{ $messages->links() }}
        </div>
    </section>
</main>
