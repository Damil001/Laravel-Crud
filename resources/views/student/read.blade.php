<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Cascading Style Sheet applied to different parts of the table */
        table, th, td {
            border: 1px solid black;
            text-align: center;
        }
        table {
            margin: 25px;
        }
        th, td {
            padding: 5px;
        }
    </style>
</head>
<body>
    <h2 style="border: 1px solid black; background-color:DodgerBlue; text-align:center;">View Students</h2>
    
    @if (session('status'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('status') }}
    </div>
    @endif
    
    <table>
        <thead>
            <tr>
                <th>CNIC</th>
                <th>Name</th>
                <th>Address</th>
                <th>Tel. No.</th>
                <th>Age</th>
                <th>Marital Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students ?? [] as $student)
            <tr>
                <td>{{ $student->cnic }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->telno }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->marital_status }}</td>
                <td>
                    <a class="btn" style="border: 1px solid;" href="{{ URL::to('student/edit', $student->cnic) }}" title="Edit -> {{ $student->cnic }}">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a class="btn" style="border: 1px solid;" href="{{ URL::to('student/delete', $student->cnic) }}" onclick="return confirm ('Are you sure to delete the student {{ $student->name }} having CNIC {{ $student->cnic }}?')" title="Delete -> {{ $student->cnic }}">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
