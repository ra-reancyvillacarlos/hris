@extends('index')
@section('title') DTR - Generate DTR @endsection
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Daily Track Record</a>
    </li>
    <li class="breadcrumb-item active">Generate DTR</li>
</ol>
<div class="mb-2 border" style="padding:10px;">
	<form>
	  	<div class="row">
	    	<div class="col">
	    		<label>Payroll Period:</label>
	      		<input type="date" class="form-control">
	    	</div>
	    	<div class="col ml-5">
	    		<label>Employee ID</label>
	    		<input type="text" class="form-control" placeholder="Employee ID">
	    	</div>
	    	<div class="col mt-2">
	    		<button type="submit" class="btn btn-info mt-4">Generate</button>
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
		                  <th>Employee ID</th>
		                  <th>Name</th>
		                  <th>Days Worked</th>
		                  <th>Absences</th>
		                  <th>Late</th>
		                  <th>Undertime</th>
		                  <th>Total Overtime</th>
	                	</tr>
              	</thead>
              	<tfoot>
                	<tr>
		                <th>Employee ID</th>
		                <th>Name</th>
		                <th>Days Worked</th>
		                <th>Absences</th>
		                <th>Late</th>
		                <th>Undertime</th>
		                <th>Total Overtime</th>
                	</tr>
              	</tfoot>
              	<tbody>
                	<tr>
                		<td>0001</td>
                		<td>Reancy Villacarlos</td>
                		<td>1</td>
                		<td>0</td>
                		<td>0</td>
                		<td>0</td>
                		<td>2 hours</td>
                	</tr>   
              	</tbody>
            </table>
       	</div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
@endsection