<meta name="viewport" content="width=device-width, initial-scale=1">
@if($errors->any())
<ul>
  @foreach ($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
</ul>
@endif

<div>
  <form method=POST action="{{ route('create') }}">
    @csrf
    <input type="text" name="title" placeholder="Title" /> <br>
  <input type="text" name="author" placeholder="Author" /> <br>
<button type="submit">Submit</button>
</form>
</div>