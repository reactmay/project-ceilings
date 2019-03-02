<p>Здравствуйте, меня зовут <strong>{{ $data['name'] }}</strong></p>
<li>Мой номер телефона: <strong>{{ $data['phone'] }}</strong></li>
@if($data['email'])<li>Мой Эллектронный адрес: <strong>{{ $data['email'] }}</strong></li>@endif
<p><i>{{ $data['message'] }}</i></p>
