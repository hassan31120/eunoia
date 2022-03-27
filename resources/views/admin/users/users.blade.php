@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">All Users</h1>
@endsection

@section('content')
<div>

    <div class="card">
        <div class="card-header">

            <a href="{{route('admin.user.create')}}" class="btn btn-primary float-right"> Add user </a>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php $i = 1; ?>
            @include('partial.alerts')
            @if (count($users) > 0)
                <table class="table text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>PhoneNo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>

                                <td>{{$i++}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->age}}</td>
                                <td>{{$user->gender}}</td>
                                <td>{{$user->phone_no}}</td>
                                <td>
                                    <a href="{{route('admin.user.edit', ['id' => $user->id])}}" class="btn btn-info"> <i class="fas fa-edit"></i> edit</a>
                                    <a href="{{route('admin.user.destroy', ['id' => $user->id])}}" style="margin-left: 5px" class="btn btn-danger"> <i class="fas fa-trash-alt"></i> delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h2>Sorry, There is no users</h2>
            @endif
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->


</div>
@endsection
