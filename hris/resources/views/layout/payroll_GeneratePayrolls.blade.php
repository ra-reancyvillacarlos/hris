@extends('index')
@section('title') Payroll - Generate Payroll @endsection
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Payroll Options</a>
    </li>
    <li class="breadcrumb-item active">Generate Payrolls</li>
</ol>
<div class="card mb-2">
	<div class="input-group">
        <input class="form-control" type="text" placeholder="Input ID Number">
        <span class="input-group-append">
            <button class="btn btn-primary" type="button">
              	<i class="fa fa-gear"></i> Generate Payroll
            </button>
        </span>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">
      	<i class="fa fa-table"></i> Sample Generated DTR History
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              	<thead>
	                	<tr>
		                  <th>Name</th>
		                  <th>Position</th>
		                  <th>Office</th>
		                  <th>Age</th>
		                  <th>Start date</th>
		                  <th>Salary</th>
	                	</tr>
              	</thead>
              	<tfoot>
                	<tr>
		                <th>Name</th>
		                <th>Position</th>
		                <th>Office</th>
		                <th>Age</th>
		                <th>Start date</th>
		                <th>Salary</th>
                	</tr>
              	</tfoot>
              	<tbody>
                	<tr>
		               	<td>Reancy Villacarlos</td>
		               	<td>System Architect</td>
		               	<td>Edinburgh</td>
		               	<td>20</td>
		               	<td>2011/04/25</td>
		               	<td>$320,800</td>
                	</tr>
                	<tr>
		               	<td>Jan Paolo Cleotes</td>
		               	<td>System Architect</td>
		               	<td>Edinburgh</td>
		               	<td>14</td>
		               	<td>2011/04/25</td>
		               	<td>$320,800</td>
                	</tr>
                	<tr>
		               	<td>Mhel Heinz Debalucos</td>
		               	<td>System Architect</td>
		               	<td>Edinburgh</td>
		               	<td>69</td>
		               	<td>2011/04/25</td>
		               	<td>$320,800</td>
                	</tr>
                	<tr>
		               	<td>Syd Yancy Balbidas</td>
		               	<td>System Architect</td>
		               	<td>Edinburgh</td>
		               	<td>79</td>
		               	<td>2011/04/25</td>
		               	<td>$320,800</td>
                	</tr>
                	<tr>
		               	<td>Gemar Pacate</td>
		               	<td>System Architect</td>
		               	<td>Edinburgh</td>
		               	<td>61</td>
		               	<td>2011/04/25</td>
		               	<td>$320,800</td>
                	</tr>   
              	</tbody>
            </table>
       	</div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
@endsection