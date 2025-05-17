<form method="POST">
    @csrf
    <h1>Are you sure you want to delete Student #{{ $student->id }}?</h1>
    <button type="button" onclick="javascript:location.href='/'">Cancel</button>
    <button type="submit">Confirm</button>
</form>