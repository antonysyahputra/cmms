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
        <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                  <h4 class="card-title">{{ $title }} Form</h4>
                  <form class="forms-sample" action="{{ route('inventories') }}" method="POST">
                      @csrf
                    <div class="form-group">
                      <label for="product_id">Product</label>
                      {{-- <input type="text" class="form-control @error('name') is-invalid @enderror" name="product_id" id="product_id" placeholder="product_id"> --}}
                      <select name="product_id" id="product_id" class="form-control">
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
    

