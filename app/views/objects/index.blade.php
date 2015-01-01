@extends('master.layout')
 <?php
 /**
  * Created by PhpStorm.
  * User: issymac
  * Date: 12/29/14
  * Time: 1:52 PM
  */ ?>
 @section('content')
<img src="img/forent.jpg" class="img-responsive" alt=" ">
 <div class="container">

    <div class="panel">

        <div class="panel-heading">
            <h4>List of all the objects in the database</h4>
        </div>
        <div class="panel-body">

            <table id="dynamic-table" class="table table-bordered table-striped table-condensed">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>type</th>
                        <th>location</th>
                        <th>rooms</th>
                        <th class="numeric">Created</th>
                        <th class="numeric">Updated</th>
                        <th>Kind</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $i = 1; ?>
                    @foreach($objects as $obj)

                    <tr>
                        <td>{{ $i++  }}</td>
                        <td>{{ $obj->type }}</td>
                        <td>{{ $obj->entry_location }}</td>
                        <td>{{ $obj->mello_rooms }}</td>
                        <td>{{ $obj->created_at }}</td>
                        <td>{{ $obj->updated_at }}</td>
                        <td>
                            <a class="btn btn-default btn-xs" >
                                <i class="glyphicon glyphicon-tag"></i>
                                Rental
                            </a>
                        </td>
                        <td>

                         <a class="btn btn-success btn-xs" href=''>
                            <i class="fa fa-money"></i>
                            Free
                        </a>

                        </td>
                        <td>

                        <div class="btn-group" >
                            <a class="btn btn-info btn-xs" href="">
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>
                            <form class="pull-right" action='' method="post">
                                <button class="btn  btn-danger  btn-xs" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete User" data-message="Are you sure you want to delete this user ?">
                                    <i class="glyphicon glyphicon-trash"></i>
                                </button>
                            </form>
                        </div>

                        <a class="btn btn-warning btn-xs" href=''>
                            <i class="fa fa-level-down"></i>
                            more details
                        </a>

                        </td>
                    </tr>

                    @endforeach

                    </tbody>
            </table>

        </div>

    </div>

 </div>

       <script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
       <script src="{{ asset('js/dynamic_table_init.js') }}"></script>


 @stop