@extends('layouts.app')

@section('content')

<link href="assets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

 <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Pages </h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{url('')}}">Home</a>
                        </li>
                     
                        <li class="active">
                            <strong>Pages</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Pages </h5>
                        <div class="ibox-tools">
						<!-- <a href="{{ url('products/create') }}" class="btn btn-primary btn-xs">Add New</a> -->
						
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
							
                          
                           
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
					
					 <thead>
                        <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Option</th>
                    
                </tr>
                    </thead>
                    <tbody>
                <?php foreach ($pages as $row) { ?>
                    <tr>
                        <td><?php echo $row->title; ?></td>
                        
                        <td> <?php echo substr($row->body, 0, 100) . "..."; ?> </td>
                       

                        <td> 
                            <a data-id="1" href="<?php echo url("pages/edit/" . $row->id); ?>" > <i class="fa fa-edit"> </i> </a>
                            <a target="_blank" href="#" > <i class="fa fa-eye "> </i> </a> 
                           
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        
                    
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
           
        </div>
       
       
        <script src="assets/js/plugins/dataTables/datatables.min.js"></script>

   
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'Products'},
                    {extend: 'pdf', title: 'Products'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

            


        });

        
    </script>
    
        
<?php

function clean($string) 
{
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}
?>

@endsection
