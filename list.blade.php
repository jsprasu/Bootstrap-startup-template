@extends('master')

@section('content')

    <div class="panel panel-primary">
        <div class="panel-heading">Manage list
            <span class="pull-right"><a href="#"><i class="fa fa-plus-circle"></i> Add page link</a></span>
        </div>
        <div class="panel-body">
            <div class="row">
                @if ($message = Session::get('success'))
                    <div class="col-md-12">
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="{{ Lang::get('general.close') }}">
                                <span aria-hidden="true">&times;</span></button>
                            {!! implode('', $errors->all(':message <br/>')) !!}
                        </div>
                    </div>
                @endif
                <div class="col-md-12">
                    <h3>List</h3>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Item</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Name 1</td>
                            <td>Item 1</td>
                            <td>
                                    <span class="list-item-options">
                                        <a href="#">Edit</a>
                                        <a href="#">Delete</a>
                                    </span>
                            </td>
                        </tr>
                        <tr>
                            <td>Name 2</td>
                            <td>Item 2</td>
                            <td>
                                    <span class="list-item-options">
                                        <a href="#">Edit</a>
                                        <a href="#">Delete</a>
                                    </span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop