@extends('master.layout')
<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 12/28/14
 * Time: 8:08 PM
 */?>

@section('content')

<div class="container">

    <div class="panel" style="height: 700px">

        <div class="panel-heading">
            <b>Write the Description Of Your Request</b>
        </div>
        <div class="panel-body" id="etherpad">

             <iframe src="http://beta.etherpad.org" align="middle" height="600px" width="1100px">
                <p>compatibility</p>
             </iframe>

        </div>

    </div>

</div>
<script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>

<script>
           $(document).ready(function(){

           var requirejs = require('requirejs');

                api = require('etherpad-lite-client')
                            etherpad = api.connect({
                                 apikey: 'UcCGa6fPpkLflvPVBysOKs9eeuWV08Ul',
                                  host: 'localhost',
                                  port: 9001
                            }),

                            etherpad.createGroup(function(error, data) {
                              if(error) console.error('Error creating group: ' + error.message)
                              else console.log('New group created: ' + data.groupID)
                            }),

                            var args = {
                              groupID: 'g.yJPG7ywIW6zPEQla',
                              padName: 'testpad',
                              text: 'Hello world!'
                            },

                            etherpad.createGroupPad(args, function(error, data) {
                              if(error) console.error('Error creating pad: ' + error.message)
                              else console.log('New pad created: ' + data.padID)
                            })

            });

        </script>

@stop