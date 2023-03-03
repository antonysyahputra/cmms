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
        <div class="col-lg-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $title }} Form</h4>
                <form class="forms-sample" action="{{ route('products') }}" method="POST">
                  @csrf
                  <div class="form-group"> 
                    <label for="category_id">Category</label>
                    {{-- <input type="text" class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id" placeholder="category"> --}}
                    <select class="form-control form-control-sm" name="category_id" id="category_id">
                      <option value="#"></option>
                      @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->code }} - {{ $category->name }}</option>
                      @endforeach
                    </select>
                    @error('category_id')
                    <div id="" class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name">
                  @error('name')
                  <div id="" class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                
                <div class="form-group"> 
                  <label for="brand">Brand</label>
                  <input type="text" class="form-control @error('brand') is-invalid @enderror" name="brand" id="brand" placeholder="brand">
                  @error('brand')
                  <div id="" class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group"> 
                  <label for="specification">Specification</label>
                  <input type="text" class="form-control @error('specification') is-invalid @enderror" name="specification" id="specification" placeholder="specification">
                  @error('specification')
                  <div id="" class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group"> 
                  <label for="code">Code</label>
                  <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" id="code" placeholder="Code">
                  @error('code')
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
        <div class="col-lg-9 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Products</h4>
              <div class="d-flex justify-content-end">
                <a href="{{ route('products') }}/create" class="btn btn-gradient-primary mb-3 btn-fw">Tambah</a>
              </div>
              
              @unless (count($categories) == 0)
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
                        <td> {{ $product->code }} </td>
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
              @else
                <h3 class="text-danger">Data category not created yet..!!</h3>
                <p class="text-danger">Please create category...</p>
              @endunless
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
    

