<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Edit Users</title>
</head>
<body>

    <div class="container my-5">
        <div class="row mb-5">
            <div class="col-lg-6">
                <h1>Edit User</h1>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <div class="row">
            <div class="col-12">
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                
                @csrf
                @method('PUT')

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <strong>Password:</strong>
                                <input type="password" name="password" value="{{$user->password}}" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <strong>Email:</strong>
                                <input type="text" name="email" value="{{$user->email}}" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <strong>Role:</strong>
                                <input type="text" name="role" value="{{$user->role}}" class="form-control" placeholder="Role">
                            </div>
                        </div>
                        <div class="col-12 text-left">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>
</html>

    
