@extends('master')

@section('content')

    <div class="panel panel-primary">
        <div class="panel-heading">Manage cruds
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <h3>Add item</h3>

                    {!! Form::open(['method' => 'post', 'url' => '']) !!}

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        {!! Form::label('Name:') !!}
                        {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder' => 'Enter name']) !!}
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('item') ? 'has-error' : '' }}">
                        {!! Form::label('Item:') !!}
                        {!! Form::text('item', old('item'), ['class'=>'form-control', 'placeholder' => 'Enter item']) !!}
                        <span class="text-danger">{{ $errors->first('item') }}</span>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success">Add new</button>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@stop