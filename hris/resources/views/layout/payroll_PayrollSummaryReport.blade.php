@extends('index')
@section('content')
<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Payroll Options</a>
        </li>
        <li class="breadcrumb-item active">Payroll Summary Report</li>
      </ol>
      <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-pie-chart"></i> Pie Chart Example</div>
            <div class="card-body">
              <canvas id="myPieChart" width="100%" height="100"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
          <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
@endsection