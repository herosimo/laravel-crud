<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Users</title>
</head>
<body>
    <div class="container my-5">
        <div class="row mb-5">
            <div class="col-lg-6">
                <h1>Tabel Rekaman User</h1>
            </div>

            <div class="col-lg-6 d-flex justify-content-end">
                <a class="btn btn-primary" href="{{ route('users.create') }}">Tambah</a>
            </div>
        </div>
        
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        @endif

        <div class="row">
            <div class="col-12">

                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role}}</td>
                            <td>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                    <a class="btn btn-warning" href="{{ route('users.edit', $user->id) }}">
                                        Edit
                                    </a>

                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger" type="submit" title="delete">
                                        Delete
                                    </button>
                                </form>
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

