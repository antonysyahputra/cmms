@extends('layouts/layout')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> {{ $title }} </h3>
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
              <div class="d-flex justify-content-end">
                {{-- <button type="button" class="btn btn-gradient-primary mb-3 btn-fw ">ADD</button> --}}
                <a href="{{ route('inventories') }}/create" class="btn btn-gradient-primary mb-3 btn-fw">Tambah</a>
              </div>
              
              <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>product</th>
                        <th>Purchased In</th>
                        <th>Room</th>
                    </tr>
                </thead>
                @php
                $i = 1;
            @endphp
            
            @unless (count($inventories) || count($products) == 0)
            @foreach ($inventories as $inventory)
                <tr>
                    <td class="table-item">{{ $i++ }}</td>
                    <td class="table-item">{{ $inventory->code_inventory }}</td>
                    <td class="table-item">{{ $inventory->product->name }}</td>
                    <td class="table-item">{{ $inventory->purchased_in }}</td>
                    <td class="table-item">{{ $inventory->room->name }}</td>
                </tr>
                @endforeach
            @else
            <h3>no inventories found</h3>
            @endunless
            </table>
            <div class="d-flex justify-content-end mt-3 ">
                {{-- {{ $products->links() }} --}}
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
@endsection()



