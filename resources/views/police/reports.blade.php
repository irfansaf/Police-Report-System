<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Police Reports</title>
</head>
<body>
    <div class="container">
        <h1>Unassigned Reports</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reports as $report)
                    <tr>
                        <td>{{ $report->id }}</td>
                        <td>{{ $report->user->name }}</td>
                        <td><img src="{{ asset('images/' . $report->image) }}" width="100" height="100"></td>
                        <td>{{ $report->category->name }}</td>
                        <td>{{ $report->description }}</td>
                        <td>
                            <a href="{{ route('police.accept_report', $report->id) }}" class="btn btn-primary">Accept</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>