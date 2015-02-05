@extends('master.layout')

<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 1/1/15
 * Time: 11:41 AM
 */ ?>

  @section('content')

  <div class="container">

         <div class="panel-body well well-lg">

            <form role="form" action="{{URL::to('addnew')}}" method="post" class="form" enctype="multipart/form-data">

                        <div class="form-group col-lg-6">
                            <label >Item Type</label>
                            <input type="text" class="form-control" name="type" id="type" placeholder="Type">
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Item ID</label>
                            <input type="text" class="form-control" name="aidi" id="aidi" readonly placeholder="Id">
                        </div>
                        <div class="form-group col-lg-6">
                            <label> Object Description</label>
                            <br>
                            <textarea  class="form-control" rows="3" placeholder="Description" name="description" id="description"> </textarea>
                        </div>
                        <br><br><br><br><br><br><br><br><br><br>
                        <label class="pull-left" style="margin-left: 18px"> ADDITIONAL DETAIL </label> <br><br>
                        <div class="form-group col-lg-4">
                            <label>Ac</label>
                            <input type="text" class="form-control"name="Ac" id="Ac" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label >Acres</label>
                            <input type="text" class="form-control" name="acres" id="acres" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Acres Source</label>
                            <input type="text" class="form-control"name="acres_source" id="acres_source" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label >Ap No</label>
                            <input type="number" class="form-control" name="ap_number" id="ap_number" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label >Appliances</label>
                            <input type="text" class="form-control" name="appliances" id="appliances" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label >Bathroom Description</label>
                            <input type="text" class="form-control" name="bathroom_desc" id="bathroom-desc" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label >Bathroom Features</label>
                            <input type="text" class="form-control" name="bedroom_features" id="bedroom_features" placeholder="">
                        </div>
                        <div class="form-group col-lg-4 hidden">
                            <label >Cross Streets</label>
                            <input type="text" class="form-control" name="cross_street" id="cross_street" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label >Dinning Area</label>
                            <input type="text" class="form-control" name="dining_area" id="dining_area" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label >Disability Access</label>
                            <input type="text" class="form-control" name="disability_access" id="disability_access" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label >Enclosed Yard</label>
                            <input type="text" class="form-control" name="enclosed_yard" id="enclosed_yard" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label >Entry Location</label>
                            <input type="text" class="form-control" name="entry_location" id="entry_location" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label >Exterior Construction</label>
                            <input type="text" class="form-control" name="exterior_construction" id="exterior_construction" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label >Floors</label>
                            <input type="text" class="form-control" name="floors" id="floors" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label >Heat</label>
                            <input type="text" class="form-control" name="heat" id="heat" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label >Lot Description</label>
                            <input type="text" class="form-control" name="lot_description" id="lot_description" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label >Lot Dimension</label>
                            <input type="text" class="form-control" name="lot_dimentions" id="lot_dimentions" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label >Lot Size Source</label>
                            <input type="text" class="form-control" name="lot_size_source" id="lot_size_source" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label >Mello Rooms</label>
                            <input type="text" class="form-control" name="mello_rooms" id="mello_rooms" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label >Misc Interior</label>
                            <input type="text" class="form-control" name="misc_interior" id="misc_interior" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label >Parking Type</label>
                            <input type="text" class="form-control" name="parking_types" id="parking_types" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label >Location</label>
                            <input type="text" class="form-control" name="location" id="location" placeholder="">
                        </div>

                        <div class="form-group col-lg-12">
                            <input id="file-1" class="file" type="file" name="file-1"  multiple=true data-preview-file-type="any">
                        </div>

                        <button type="submit" class="btn btn-success pull-right" style="margin-top: 20px">Submit</button>


            </form>

         </div>

     </div>

     <script src="{{ asset('js/jquery.js') }}"></script>
     <script src="{{ asset('js/fileinput.js') }}"></script>
     <script src="{{ asset('js/fileinput.min.js') }}"></script>


     <script>

     $("#file-1").fileinput({
             uploadUrl: "' . Url::to(['addnew']) . '",
             allowedFileExtensions : ['jpg', 'png','gif'],
             overwriteInitial: false,
             maxFileSize: 1000,
             maxFilesNum: 10,
             allowedFileTypes: ['image', 'video', 'flash'],
             slugCallback: function(filename) {
                 return filename.replace('(', '_').replace(']', '_');
             }
     	});

     </script>



  @stop