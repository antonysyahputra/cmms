@extends('layouts/layout')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Product Tables </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Products tables</li>
          </ol>
        </nav>
      </div>
      <div class="row">     
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Products</h4>
              <div class="search-field d-none d-md-block">
                <form class="d-flex align-items-center h-100" action="#">
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <i class="input-group-text border-0 mdi mdi-magnify"></i>
                    </div>
                    <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                  </div>
                </form>
              </div>
              <div class="d-flex justify-content-end">
                <a href="{{ route('products') }}/create" class="btn btn-gradient-primary mb-3 btn-fw">Tambah</a>
              </div>
              
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th> # </th>
                    <th> Code </th>
                    <th> Name </th>
                    {{-- <th> Progress </th> --}}
                    <th> Brand </th>
                    <th> Specification </th>
                    <th> Category </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $key => $product)
                    <tr>
                        <td> {{ $products->firstItem() + $key }}  </td>
                        <td> {{ $product->code_product }} </td>
                        <td> {{ $product->name }} </td>
                        {{-- <td>
                          <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td> --}}
                        <td> {{ $product->brand }} </td>
                        <td> {{ $product->specification }} </td>
                        <td> {{ $product->category->name }} </td>
                        
                      </tr> 
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end mt-3 ">
                {{ $products->links() }}
            </div>
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
    

