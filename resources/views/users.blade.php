<div>
    <h1>User Database</h1>

    {{-- {{
        print_r($users);
    }} --}}

    <table border="2">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->name}}</td>
            </tr>
        @endforeach
    </table>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
</div>
