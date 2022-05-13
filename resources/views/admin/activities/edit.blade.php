@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Edit Activity</h1>
@endsection

@section('content')
<div>

    <div class="card">
        <div class="card-header">

            <a href="{{route('amdin.activities')}}" class="btn btn-primary float-right"> All Activities </a>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @include('partial.alerts')
            <form action="{{route('admin.activity.update', $activity->id)}}" method="post">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" value="{{$activity->name}}" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                    <div class="col-md-6">
                        <input id="description" value="{{$activity->description}}" type="text" class="form-control" name="description" value="{{ old('description') }}" required autocomplete="description">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="score" class="col-md-4 col-form-label text-md-end">{{ __('Score') }}</label>

                    <div class="col-md-6">
                        <input id="score" value="{{$activity->score}}" type="text" class="form-control" name="score" value="{{ old('score') }}" required autocomplete="score">
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" style="margin-left: 42%; " class="btn btn-success">
                            {{ __('Edit Activity') }}
                        </button>
                    </div>
                </div>

            </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->


</div>
@endsection
