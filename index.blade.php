<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Car Details</h1>
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Model Name</th>
                            <th>Date Created</th>
                            <th>Manufacture</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cars as $car)
                            <tr>
                                <td>{{ $car->id }}</td>
                                <td>{{ $car->{'Model name'} }}</td>
                                <td>{{ $car->{'Date created'} }}</td>
                                <td>{{ $car->Manufacture }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if (count($cars) === 0)
                    <p class="text-center text-muted">No cars found.</p>
                @endif
            </div>
        </div>
    </div>

</body>
</html>
