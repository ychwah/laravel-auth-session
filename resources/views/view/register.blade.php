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
    <input type="name" name="name" placeholder="Name" value="{{ old('name') }}" /> <br />
    <input type="text" name="email" placeholder="Email" value="{{ old('email') }}" /> <br>
    <input type="password" name="password" placeholder="Password" value="{{ old('password') }}" /> <br>
    <input type="password" name="vpassword" placeholder="Verify Password" value="{{ old('vpassword') }}" /> <br>
    <button type="submit">Register</button>
    <a href="/login">Login</a>
</form>
</div>