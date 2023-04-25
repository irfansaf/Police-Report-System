<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="my-3">Reports</h3>
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
                                <td><img src="{{ asset('images/' . $report->image) }}" alt="Report image" width="50"></td>
                                <td>{{ $report->category_id }}</td>
                                <td>{{ $report->description }}</td>
                                <td>
                                    <a href="{{ route('reports.show', $report->id) }}" class="btn btn-info">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>