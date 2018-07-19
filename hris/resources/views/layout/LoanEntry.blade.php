@extends('index')
@section('title')HRIS | Loan Entry @endsection
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Loan Entry</a>
    </li>
</ol>
<div class="row mb-2 border" style="padding:10px;">
	<div class="btn-toolbar col-md-8" role="toolbar">
	  	<div class="btn-group mr-3" role="group">
	    	<button type="button" class="btn btn-info mr-1"><i class="fa fa-plus"></i> Create</button>
	    	<button type="button" class="btn btn-info"><i class="fa fa-refresh"></i> Update</button>
	  	</div>
	  	<div class="btn-group mr-3" role="group">
	    	<button type="button" class="btn btn-warning mr-1"><i class="fa fa-ban"></i> Cancel</button>
	    	<button type="button" class="btn btn-success"><i class="fa fa-print"></i> Print</button>
	    </div>
	</div>
    <div class="input-group col-md-4">
	    <input class="form-control" type="text" placeholder="Search for...">
	    <span class="input-group-append">
	        <button class="btn btn-primary" type="button">
	       		<i class="fa fa-search"></i>
		    </button>
	    </span>
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
	    	<div class="col mt-2">
	    		<button type="submit" class="btn btn-info mt-4">Go</button>
	    	</div>
	  	</div>
	</form>
</div>
<div class="card mb-3">
    <div class="card-header">
      	<i class="fa fa-table"></i> Sample Loan Entry
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              	<thead>
	                	<tr>
		                  <th>Loan Number</th>
		                  <th>Employee Number</th>
		                  <th>Employee Name</th>
		                  <th>Loan Amount</th>
		                  <th>Deduction Amount</th>
		                  <th>Description</th>
		                  <th>Adj. Date</th>
		                  <th>Location</th>
	                	</tr>
              	</thead>
              	<tfoot>
                	<tr>
		                <th>Loan Number</th>
		                <th>Employee Number</th>
		                <th>Employee Name</th>
		                <th>Loan Amount</th>
		                <th>Deduction Amount</th>
		                <th>Description</th>
		                <th>Adj. Date</th>
		                <th>Location</th>
                	</tr>
              	</tfoot>
              	<tbody>
                	<tr>
                		<td>000001</td>
                		<td>000005</td>
                		<td>Reancy Vilacarlos</td>
                		<td>1,200</td>
                		<td>120,000</td>
                		<td>SSS Loan</td>
                		<td>2017-1-11</td>
                		<td>Stock Location 1</td>
                	</tr>   
              	</tbody>
            </table>
       	</div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
@endsection