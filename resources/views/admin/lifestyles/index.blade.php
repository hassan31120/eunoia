@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div>

    <div class="card">
        <div class="card-header">

            <h3 class="text-center">All Lifestyles</h3>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php $i = 1; ?>
            @include('partial.alerts')
            @if (count($lifestyles) > 0)
                <table class="table table-striped text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>User</th>
                            <th>test1</th>
                            <th>test2</th>
                            <th>test3</th>
                            <th>test4</th>
                            <th>test5</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lifestyles as $lifestyle)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$lifestyle->users->name}}</td>
                                <td>{{$lifestyle->test1}}</td>
                                <td>{{$lifestyle->test2}}</td>
                                <td>{{$lifestyle->test3}}</td>
                                <td>{{$lifestyle->test4}}</td>
                                <td>{{$lifestyle->test5}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
            <div class="alert alert-danger" role="alert">
                <h4 class="text-center">Sorry, There is no lifestyles!</h4>
            </div>
            @endif
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->


</div>
@endsection
