@extends('index')
@section('title') DTR - Employee DTR @endsection
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Daily Track Record</a>
    </li>
    <li class="breadcrumb-item active">Employee DTR</li>
</ol>
<div class="mb-2 border" style="padding:10px;">
	<form>
	  	<div class="row">
	    	<div class="col">
	    		<label>From:</label>
	      		<input type="date" class="form-control">
	    	</div>
	    	<div class="col">
	    		<label>To:</label>
	      		<input type="date" class="form-control">
	    	</div>
	    	<div class="col ml-5">
	    		<label>Employee ID</label>
	    		<input type="text" class="form-control" placeholder="Employee ID">
	    	</div>
	    	<div class="col mt-2">
	    		<button type="submit" class="btn btn-info mt-4">Go</button>
	    	</div>
	  	</div>
	</form>
</div>
<div class="card mb-3">
    <div class="card-header">
      	<i class="fa fa-table"></i> Sample Employee Workdates
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              	<thead>
	                	<tr>
		                  <th>Name</th>
		                  <th>Date</th>
		                  <th>Time In</th>
		                  <th>Time Out</th>
		                  <th>Sources</th>
	                	</tr>
              	</thead>
              	<tfoot>
                	<tr>
		                <th>Name</th>
		                <th>Date</th>
		                <th>Time In</th>
		                <th>Time Out</th>
		                <th>Sources</th>
                	</tr>
              	</tfoot>
              	<tbody>
                	<tr>
                		<td>Reancy Villacarlos</td>
                		<td>January 1, 2001</td>
                		<td>7:00 AM</td>
                		<td>8:00 PM</td>
                		<td>HR Office</td>
                	</tr>   
              	</tbody>
            </table>
       	</div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
@endsection