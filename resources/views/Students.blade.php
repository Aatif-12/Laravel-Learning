<div>
    <h1>Student List</h1>
    {{-- {{print_r($data)}} --}}

    <table border="2">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Batch</td>
        </tr>
        @foreach($data as $student)
        <tr>
            <td>{{$student['id']}}</td>
            <td>{{$student['name']}}</td>
            <td>{{$student['email']}}</td>
            <td>{{$student['batch']}}</td>
        </tr>
        @endforeach
    </table>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
</div>
