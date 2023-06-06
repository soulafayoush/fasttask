<h1>Students</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('family.create') }}" class="btn btn-primary">إضافة</a>
{{-- <a href="{{ route('students.search') }}" class="btn btn-primary">بحث</a> --}}

<table>
    <thead>
        <tr>
            <th>fullName</th>
            <th>'phone</th>
            <th>init</th>
        
        </tr>
    </thead>
    <tbody>
        @foreach($families as $student)
        <tr>
            <td>{{ $student->student_name }}</td>
          
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
