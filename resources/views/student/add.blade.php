
<h1>Add Student</h1>
<form method="POST">
    @csrf
    <div>
        <label for="fn">First Name<span class="required">*</span>: </label><input type="text" id="fn" name="first_name" value="{{ old('first_name') }}">
    </div>
    <div>
        <label for="mn">Middle Name: </label><input type="text" id="mn" name="middle_name" value="{{ old('middle_name') }}">
    </div>
    <div>
        <label for="ln">Last Name<span class="required">*</span>: </label><input type="text" id="ln" name="last_name" value="{{ old('last_name') }}">
    </div>
    <div>
        <label for="suffix">Suffix: </label><input type="text" id="suffix" name="suffix" value="{{ old('suffix') }}">
    </div>
    <div>
        <label for="gender">Gender<span class="required">*</span>: </label><input type="radio" id="gender" name="gender" value="M"> Male &nbsp;
    <input type="radio" name="gender" value="F"> Female
    </div>
    <div>
        <label for="bd">Birthdate<span class="required">*</span>: </label><input type="date" id="bd" name="birthdate" value="{{ old('birthdate') }}">
    </div>
    <button type="submit">Submit</button>
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