@if(session('success'))
    <ul>
        <li>{{ session('success') }}</li>
    </ul>
@endif

<h1>Dashboard</h1>
<p>Hi, {{ $user->name }} </p>

<div>
    <a href="/students/add">Add Student</a>
    <a href="/logout">Logout</a>
</div>
<br>
@if(isset($students) && $students->count())
    <table border="1">
        <tr>
            <th>I.D</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Birthdate</th>
            <th>Actions</th>
        </tr>

        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->last_name }}, {{  $student->first_name }}</td>
                <td>{{ $student->gender == 'M' ? 'Male' : 'Female' }}</td>
                <td>{{ $student->birthdate }}</td>
                <td style="display: flex">

                    <a href="/students/edit?id={{ $student->id }}">Edit</a>
                    &nbsp;&nbsp;
                    <a href="/students/delete?id={{ $student->id }}">Delete</a>

                </td>
            </tr>
        @endforeach
    </table>
@endif