@extends('index')
@section('title')HRIS | Time Log Entry @endsection
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Time Log Entry</a>
    </li>
</ol>
<div class="mb-2 border" style="padding:10px;">
	<div class="btn-toolbar" role="toolbar">
	  	<div class="btn-group mr-3" role="group">
	    	<button type="button" class="btn btn-info mr-1"><i class="fa fa-plus"></i> Add Log</button>
	    	<button type="button" class="btn btn-info"><i class="fa fa-refresh"></i> Update Log</button>
	  	</div>
	  	<div class="btn-group mr-3" role="group">
	    	<button type="button" class="btn btn-warning mr-1"><i class="fa fa-ban"></i> Remove Log</button>
	    	<button type="button" class="btn btn-danger"><i class="fa fa-remove"></i> Remove All Logs</button>
	    </div>
	  	<div class="btn-group mr-3" role="group">
	  		<button type="button" class="btn btn-success mr-1"><i class="fa fa-floppy-o"></i> Save</button>
	  		<button type="button" class="btn btn-secondary"><i class="fa fa-sign-out"></i> Exit</button>
	  	</div>
	</div>
</div>
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
      	<i class="fa fa-table"></i> Sample Time Log Entry
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              	<thead>
	                	<tr>
		                  <th>Workdate</th>
		                  <th>Time Logs</th>
		                  <th>Status</th>
		                  <th>Source</th>
	                	</tr>
              	</thead>
              	<tfoot>
                	<tr>
		                <th>Workdate</th>
		                <th>Time Logs</th>
		                <th>Status</th>
		                <th>Source</th>
                	</tr>
              	</tfoot>
              	<tbody>
                	<tr>
                		<td>January 1, 2001</td>
                		<td>1</td>
                		<td>Present</td>
                		<td>HR Office</td>
                	</tr>   
              	</tbody>
            </table>
       	</div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
@endsection