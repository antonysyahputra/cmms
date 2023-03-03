@extends('layouts/layout')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> {{ $title }} </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">{{ $title }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }} tables</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        
        <div class="col-lg-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $title }} Form</h4>
                <form class="forms-sample" action="{{ route('inventories') }}" method="POST">
                    @csrf
                  <div class="form-group">
                    <label for="product_id">Product</label>
                    {{-- <input type="text" class="form-control @error('name') is-invalid @enderror" name="product_id" id="product_id" placeholder="product_id"> --}}
                    <select name="product_id" id="product_id" class="form-control form-control-sm">
                      <option value=""></option>
                      @foreach ($products as $product)
                          <option class="product" value="{{ $product->id }}">{{ $product->code . ' = ' . $product->name }}</option>
                      @endforeach
                    </select>
                    @error('product_id')
                    <div id="" class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="room_id">Room</label>
                    {{-- <input type="text" class="form-control @error('name') is-invalid @enderror" name="room_id" id="room_id" placeholder="room_id"> --}}
                    <select name="room_id" id="room_id" class="form-control">
                      <option value=""></option>
                      @foreach ($rooms as $room)
                          <option value="{{ $room->id }}">{{ $room->name }}</option>
                      @endforeach
                    </select>
                    @error('room_id')
                    <div id="" class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="purchased_in">Purchased In</label>
                    <input type="date" class="form-control @error('name') is-invalid @enderror" name="purchased_in" id="purchased_in" placeholder="purchased_in">
                    @error('purchased_in')
                    <div id="" class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="code_inventory">Code inventory</label>
                    <input type="text" class="form-control @error('code_inventory') is-invalid @enderror" name="code_inventory" id="code_inventory" placeholder="Code_inventory">
                    @error('code_inventory')
                    <div id="" class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                </form>
              </div>
            </div>
        </div> 
        <div class="col-lg-8 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">{{ $title }}</h4>
              <div class="d-flex justify-content-end">
                {{-- <button type="button" class="btn btn-gradient-primary mb-3 btn-fw ">ADD</button> --}}
                <a href="{{ route('inventories') }}/create" class="btn btn-sm btn-outline-primary mb-3 btn-fw">Tambah</a>
              </div>
              
              <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Code</th>
                        <th>product</th>
                        <th>Purchased In</th>
                        <th>Room</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @php
                $i = 1;
            @endphp
            {{-- @dd($inventories) --}}
            @unless (count($inventories) == 0)
            @foreach ($inventories as $inventory)
                <tr>
                    <td class="table-item">{{ $i++ }}</td>
                    <td class="table-item">{{ $inventory->code_inventory }}</td>
                    <td class="table-item">{{ $inventory->product->name }}</td>
                    <td class="table-item">{{ $inventory->purchased_in }}</td>
                    <td class="table-item">{{ $inventory->room->name }}</td>
                    <td class="table-item">
                      <div class="input-group-prepend">
                        <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">View</a>
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Delete</a>
                          <div role="separator" class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Other</a>
                        </div>
                      </div>
                    </td>
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



