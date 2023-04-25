<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Reports</title>
</head>
<body>
    <div class="container">
        <h1>Admin Reports</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Status</th>
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
                        <td>{{ $report->status }}</td>
                        <td>
                            <form action="{{ route('admin.approve_report', $report->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success">Approve</button>
                            </form>
                            <form action="{{ route('admin.reject_report', $report->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-danger">Reject</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>