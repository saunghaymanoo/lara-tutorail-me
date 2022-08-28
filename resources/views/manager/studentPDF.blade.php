<div class="container">
    <h1>User list</h1>
    <table border="1" cellpadding="10" width="100%" style="margin-bottom: 100px;">
        <tr>
            <th width="20%">ID</th>
            <th width="40%">Name</th>
            <th width="40%">Email</th>
        </tr>
       @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
            </tr>
        @endforeach
    </table>
</div>