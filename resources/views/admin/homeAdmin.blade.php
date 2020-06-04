@extends('layouts.master')
@section('Content-fluid')
<div class="panel-header panel-header-lg">
  <canvas id="bigDashboardChart"></canvas>
</div>
@endsection

@section('title')
    Admin Page
@endsection
@section('titlePage')
    Bonjour {{Auth::user()->nom}}
@endsection

@section('content')
 <div class="wrapper">
    
    <div class="row">
        <div class="col-lg-4">
          <div class="card card-chart">
            <div class="card-header">
              <h5 class="card-category"></h5>
              <h4 class="card-title">Annonce </h4>
              <div class="dropdown">
                <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                  <i class="now-ui-icons loader_gear"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <a class="dropdown-item text-danger" href="#">Remove Data</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <canvas id="lineChartExample"></canvas>
              </div>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card card-chart">
            <div class="card-header">
              <h5 class="card-category">Performance</h5>
              <h4 class="card-title">User Profile</h4>
              <div class="dropdown">
                <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                  <i class="now-ui-icons loader_gear"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <a class="dropdown-item text-danger" href="#">Remove Data</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
              </div>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card card-chart">
            <div class="card-header">
              <h5 class="card-category">Email Statistics</h5>
              <h4 class="card-title">24 Hours Performance</h4>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <canvas id="barChartSimpleGradientsNumbers"></canvas>
              </div>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-category">Information Personnel</h5>
                <h4 class="card-title"> Salutation
                  {{ Auth::user()->nom }}
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>
                                    Nom
                                </th>
                                <td>
                                    {{ Auth::user()->nom }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Telephone
                                </th>
                                <td>
                                    {{ Auth::user()->telephone }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Compte crée le
                                </th>
                                <td>
                                    {{ auth()->user()->created_at }}
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
      </div>

 </div>

@endsection

@section('scripts')
    
@endsection