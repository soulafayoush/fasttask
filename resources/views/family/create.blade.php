<!-- students/create.blade.php -->

<h1>Create Student</h1>

<form action="{{ route('create.store') }}" method="POST">
    @csrf
    <label for="name">full_name:</label>
    <input type="text" name="full_name" id="full_name" required>

    <label for="group_id">Group:</label>
    <select name="group_id" id="group_id" required>
        @foreach($groups as $id => $name)
            <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>

    <label for="course_id">Course:</label>
    <select name="course_id" id="course_id" required>
        @foreach($courses as $id => $name)
            <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>

    <button type="submit">Create</button>
</form>
