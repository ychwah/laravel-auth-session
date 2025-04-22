<meta name="viewport" content="width=device-width, initial-scale=1">
@if($errors->any())
<ul>
  @foreach ($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
</ul>
@endif

<div>
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <input type="text" name="email" placeholder="Email" /> <br>
    <input type="text" name="password" placeholder="Password" /> <br>
    <button type="submit">Login</button>
    <a href="/register">Register</a>
</form>
</div>
