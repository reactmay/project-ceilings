<main>
    <section class="content">
        <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">// {{ $title }} </h1></div>
        <div class="container">
            <div class="row">
                @foreach($settings as $item)
                    {!! Form::open(['url' => route('settingsEdit', array('item' => $item['id'])), 'class' => 'form-horizontal', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    {!! Form::hidden('id', $item['id']) !!}
                    <div class="row">
                        <div class="input-field col s12">
                            {!! Form::label('mail_admin', 'Куда отправлять сообщения?', ['for' => 'email']) !!}
                            {!! Form::email('mail_admin', $item['mail_admin'], ['class' => 'validate', 'name' => 'email', 'id' => 'email', 'type' => 'email', 'required', 'placeholder' => 'Указать почтовый ящик']) !!}
                        </div>
                        <p>
                            <input id="show_aboutus" type="checkbox" name="show_aboutus" @if($item['show_aboutus'])checked="checked"@endif {{ old('show_aboutus', $item['show_aboutus']) === 'show_aboutus' ? 'checked' : 'false' }}/>
                            <label for="show_aboutus"><span>Отображать о нас?</span></label>
                        </p>
                        <p>
                            <input id="show_service" type="checkbox" name="show_service" @if($item['show_service'])checked="checked"@endif {{ old('show_service', $item['show_service']) === 'show_service' ? 'checked' : 'false' }}/>
                            <label for="show_service"><span>Отображать сервисы?</span></label>
                        </p>
                        <p>
                            <input id="show_portfolio" type="checkbox" name="show_portfolio" @if($item['show_portfolio'])checked="checked"@endif {{ old('show_portfolio', $item['show_portfolio']) === 'show_portfolio' ? 'checked' : 'false' }}/>
                            <label for="show_portfolio"><span>Отображать портфолио?</span></label>
                        </p>
                        <p>
                            <input id="show_team" type="checkbox" name="show_team" @if($item['show_team'])checked="checked"@endif {{ old('show_team', $item['show_team']) === 'show_team' ? 'checked' : 'false' }}/>
                            <label for="show_team"><span>Отображать команду?</span></label>
                        </p>
                        <p>
                            <input id="show_testimonials" type="checkbox" name="show_testimonials" @if($item['show_testimonials'])checked="checked"@endif {{ old('show_testimonials', $item['show_testimonials']) === 'show_testimonials' ? 'checked' : 'false' }}/>
                            <label for="show_testimonials"><span>Отображать отзывы?</span></label>
                        </p>
                        <div class="center-align">
                            {!! Form::button('Сохранить', ['class' => 'btn waves-effect waves-red', 'type' => 'submit']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                @endforeach
            </div>
        </div>
    </section>
</main>

