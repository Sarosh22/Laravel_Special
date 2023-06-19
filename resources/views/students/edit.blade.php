<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
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
                            <div class="col-md-6">
                                <h3>Add Students</h3>
                            </div>
                            <div class="col-md-6 text-end">
                                <a href="{{ route('students') }}" class="btn btn-outline-primary">Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('students.create') }}" method="post">
                            @csrf
                            <div class="mb-3">

                                {{-- @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session::get('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @elseif (Session::has('failure'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ Session::get('failure') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif --}}


                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" id="name" placeholder="Enter your name!"
                                    value="{{ old('name') ? old('name') : $student->name }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="address">Address</label>
                                <input type="address" class="form-control @error('address') is-invalid @enderror"
                                    name="address" id="address" placeholder="Enter your address!"
                                    value="{{ old('address')? old ('address'): $student->address }}">
                                @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="mobile">Mobile No.</label>
                                <input type="text" class="form-control @error('mobile') is-invalid @enderror"
                                    name="mobile" id="mobile" placeholder="Enter your mobile!"
                                    value="{{ old('mobile')? old('mobile'): $student->mobile }}">
                                @error('mobile')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="date of birth">Date of Birth</label>
                                <input type="date of birth" class="form-control @error('date of birth') is-invalid @enderror" value="{{old('date of birth')? old('date of birth') :$student->dateOfBirth}}"
                                    name="date of birth" id="date of birth" placeeolder="Enter your date of birth!">
                                @error('date of birth')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>



                            <div class="mb-3">
                                <label for="religion">Religion</label>
                                <input type="text" class="form-control @error('religion') is-invalid @enderror" name="religion" value="{{old('religion') ? old('religion') : $students->religion}}"
                                    id="religion" placeholder="Please Enter yur religion!">
                                @error('religion')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div>
                                <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                            </div>
                        </form>
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
