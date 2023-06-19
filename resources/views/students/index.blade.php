
{{dd($students)}};

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student CRUD</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>


    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h5>Student Crud</h5>
                            </div>
                            <div class="col text-end">
                                <a href="{{ route('students.create') }}" class="btn btn-outline-primary">Add Students</a>
                            </div>
                        </div>

                        @if (count($students) > 0)

                            <table class="table table-bordered m-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>address</th>
                                        <th>Mobile</th>
                                        <th>Date Of Birth</th>
                                        <th>Religion</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($students as $students)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->mobile }}</td>
                                            <td>{{ $item->dateOBirth }}</td>
                                            <td>{{ $item->religion }}</td>
                                            <td>
                                                <a href="{{ route('students.edit', $students) }}"
                                                    class="btn btn-primary"> Edit</a>
                                                <a href="{{ route('students.delete', $students) }}"
                                                    class="btn btn-danger "> Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <div class="alert-alert-danger">NO Record Found!</div>
                        @endif
                        </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
