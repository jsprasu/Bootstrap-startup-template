@extends('master')

@section('content')

    <div class="panel panel-primary" ng-controller="ProductsController" ng-show="!isLoading">
        <div class="panel-heading">Manage list
            <span class="pull-right"><a href="#"><i class="fa fa-plus-circle"></i> Add page link</a></span>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Success msg</strong>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        Message
                    </div>
                </div>
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
                        <tr ng-repeat="item in products">
                            <td>[[ item.name ]]</td>
                            <td>Item 1</td>
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
