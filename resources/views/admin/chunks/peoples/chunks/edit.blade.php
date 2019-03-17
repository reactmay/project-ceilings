<main>
    <section class="content">
        <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">// {{ $title }}</h1></div>
        <div class="container">
            <h3>Информация о работнике</h3>
            <br>
            <form id="user">
                <table class="table table-hover">
                    <tbody>
                                <tr>
                                    <td><label for="usrname">ИД в базе: </label></td>
                                    <td><a>{{ $data['id'] }}</a></td>
                                </tr>
                                <tr>
                                    <td><label for="djoined">Дата рождения: </label></td>
                                    <td><input type="date" class="datepicker" value="{{ $data['date_if_birth'] }}"></td>
                                </tr>
                                {{--<tr>--}}
                                    {{--<td><label for="ipaddress">Last IP Address: </label></td>--}}
                                    {{--<td><a>127.0.0.1</a></td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td><label for="econfirm">Email Confirmed: </label></td>--}}
                                    {{--<td><i class="material-icons">check</i></a></td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td><label for="guidelines">Guidelines Approved: </label></td>--}}
                                    {{--<td><i class="material-icons">check</i></a></td>--}}
                                {{--</tr>--}}
                                <tr>
                                    <input type="hidden" name="pastdata" value="" />
                                    <td><label for="usrname">Имя: </label></td>
                                    <td><input type="text" name="usrname" value="{{ $data['name'] }}" /></td>
                                </tr>
                                {{--<tr>--}}
                                    {{--<td><label for="email">E-mail: </label></td>--}}
                                    {{--<td><input type="text" name="email" value="dwight@dundermifflin.com" /></td>--}}
                                {{--</tr>--}}
                                <tr>
                                    <td><label for="accesslevel">Должность: </label></td>
                                    <td><input type="text" name="accesslevel" value="{{ $data['position'] }}" /></td>
                                </tr>
                                <tr>
                                    <td><label for="accesslevel">Фотография: </label></td>
                                    <td>
                                        <img src="{{ asset('meghna2/img/team/'.$data['images']) }}" alt="" class="circle">
                                    </td>
                                </tr>
                                {{--<tr>--}}
                                    {{--<td><label for="email">Account Actions: </label></td>--}}
                                    {{--<td>--}}
                                        {{--<div class="btn-toolbar">--}}
                                            {{--<a href="#" class="btn btn-danger">Kick</a>--}}
                                            {{--<a href="#" class="btn btn-warning">Message</a>--}}
                                            {{--<a href="#" class="btn btn-success">Chat Logs</a>--}}
                                        {{--</div>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                    </tbody>
                </table>
                <br>
                <div class="center-align"><input class="btn btn-success" disabled type="submit" value="Сохранить" /></div>
            </form>
            <br><br>
            {{--<h2>DwightKSchrute's Account History</h2><br>--}}
            {{--<table class="striped hover">--}}
                {{--<thead>--}}
                {{--<tr>--}}
                    {{--<th>Action</th>--}}
                    {{--<th>Time</th>--}}
                {{--</tr>--}}
                {{--</thead>--}}
                {{--<tbody>--}}
                {{--<tr>--}}
                    {{--<td>Got into work</td>--}}
                    {{--<td>6:40AM</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td>Watered plant</td>--}}
                    {{--<td>6:51AM</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td>Rearranged Michael's toys</td>--}}
                    {{--<td>7:14AM</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td>Made coffee</td>--}}
                    {{--<td>9:20AM</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td>Made sale - $512 worth of premium letterstock</td>--}}
                    {{--<td>12:31PM</td>--}}
                {{--</tr>--}}
                {{--</tbody>--}}
            {{--</table>--}}
        </div>
    </section>
</main>
