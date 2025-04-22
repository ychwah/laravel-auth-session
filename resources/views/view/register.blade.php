<meta name="viewport" content="width=device-width, initial-scale=1">
@if($errors->any())
<ul>
  @foreach ($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
</ul>
@endif

<div>
  <form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="name" name="name" placeholder="Name" />
    <input type="text" name="email" placeholder="Email" /> <br>
    <input type="text" name="password" placeholder="Password" /> <br>
    <input type="text" name="vpassword" placeholder="Verify Password" /> <br>
    <button type="submit">Register</button>
    <a href="/login">Login</a>
</form>
</div>