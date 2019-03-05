<main>
    <section class="content">
        <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">// {{ $title }} </h1></div>
        <div class="container">
            <div class="row">
                @if($peoples)
                    @foreach($peoples as $people)
                        <div class="col s6" style="width: 50%">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light circle responsive-img">
                                    <img class="activator" src="{{ asset('meghna2/img/team/4.jpg') }}" height="220px">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">{{ $people->name }}<i class="material-icons right">more_vert</i></span>
                                    {!! Html::link(route('peoplesEdit', ['people' => $people->id]), 'открыть', ['alt' => $people->name, 'data-toggle' => 'tooltip', 'title' => 'Открыть профиль']) !!}
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">{{ $people->name }}<i class="material-icons right">close</i></span>
                                    <p>{{ $people->text }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
</main>
