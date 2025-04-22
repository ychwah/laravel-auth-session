<meta name="viewport" content="width=device-width, initial-scale=1">

<table border="1">
  <thead>
    {{-- <th>I.D.</th> --}}
    <th>Title</th>
    <th>Author</th>
  </thead>
  <tbody>
    @if(isset($books) && count($books))
    @foreach ($books as $book)
    <tr>
      {{-- <td>{{ $book->id }}</td> --}}
      <td>{{ $book->title }}</td>
      <td>{{ $book->author }}</td>
    </tr>
    @endforeach
    @else
    <tr>
      <td colspan="3">No data available.</td>
    </tr>
    @endif
  </tbody>
</table>
<br>
<a href="/create">Add New Book</a>