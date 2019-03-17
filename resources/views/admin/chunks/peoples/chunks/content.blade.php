<main>
    <section class="content">
        <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">// {{ $title }} </h1></div>
        <div class="container">
            <div class="row">
                @if($peoples)
                    @foreach($peoples as $people)
                        <ul class="collection">
                            <li class="collection-item avatar">
                                <img src="{{ asset('meghna2/img/team/'.$people->images) }}" alt="" class="circle">
                                <span class="title">{{ $people->name }}</span>
                                <p>Должность: {{ $people->position }}</p>
                                <p>День рождения: {{ $people->date_if_birth }}</p>
                                <p>{{ $people->text }}</p>
                                {!! Html::link(route('peoplesEdit', ['people' => $people->id]), 'Открыть', ['alt' => $people->name, 'class' => 'secondary-content', 'data-toggle' => 'tooltip', 'title' => 'Открыть профиль']) !!}
                            </li>
                        </ul>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
</main>
