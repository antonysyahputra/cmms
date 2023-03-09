@extends('layouts/layout')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">{{ $title }} </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Form</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
          </ol>
        </nav>
      </div>
      <div class="row">     
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                  <h4 class="card-title">{{ $inventory->code_inventory }}</h4>
                  <table class="table">
                    <tr>
                        <th>Inventory Code</th>
                    <td>:</td>
                    <td>{{ $inventory->code_inventory }}</td>
                    </tr>
                    <tr>
                        <th>Product</th>
                    <td>:</td>
                    <td>{{ $inventory->product->name }}</td>
                    </tr>
                    <tr>
                        <th>Specification</th>
                    <td>:</td>
                    <td>{{ $inventory->product->specification }}</td>
                    </tr>
                    <tr>
                        <th>Purchased In</th>
                    <td>:</td>
                    <td>{{ $inventory->purchased_in }}</td>
                    </tr>
                  </table>
                  
                </div>
              </div>
            </div>    
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:{{  asset('bootstrap-5') }}/partials/_footer.html -->
    <footer class="footer">
      <div class="container-fluid d-flex justify-content-between">
        <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
        <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
      </div>
    </footer>
    <!-- partial -->
  </div>
</div>
@endsection
    

