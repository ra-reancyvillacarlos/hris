@extends('index')
@section('title') Payroll - View Payroll @endsection
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Payroll Options</a>
    </li>
    <li class="breadcrumb-item active">View Payroll</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
      	<i class="fa fa-table"></i> Sample View Payroll
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