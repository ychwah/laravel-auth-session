
<h1>Edit Student</h1>
<form method="POST">
    @csrf
    <div>
        <label for="fn">First Name: </label><input type="text" id="fn" name="first_name" value="{{ $student->first_name }}">
    </div>
    <div>
        <label for="mn">Middle Name: </label><input type="text" id="mn" name="middle_name" value="{{ $student->middle_name }}">
    </div>
    <div>
        <label for="ln">Last Name: </label><input type="text" id="ln" name="last_name" value="{{ $student->last_name }}">
    </div>
    <div>
        <label for="suffix">Suffix: </label><input type="text" id="suffix" name="suffix" value="{{ $student->suffix }}">
    </div>
    <div>
        <label for="gender">Gender: </label><input type="radio" id="gender" name="gender" value="M" @checked($student->gender == 'M')> Male &nbsp;
    <input type="radio" name="gender" value="F" @checked($student->gender == 'F')> Female
    </div>
    <div>
        <label for="bd">Birthdate: </label><input type="date" id="bd" name="birthdate" value="{{ $student->birthdate }}">
    </div>
    <button type="button" onclick="javascript:location.href='/'">Cancel</button>
    <button type="submit">Update</button>
</form>

<style>
    form > div {
        display: flex;
    }

    label {
        flex-basis: 100px
    }

    .required {
        color: red
    }
</style>