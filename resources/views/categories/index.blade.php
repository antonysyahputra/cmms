@extends('layouts/layout')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">{{ $title }}</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }} tables</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-lg-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $title }} Form</h4>
                <form class="forms-sample" action="{{ route('categories') }}" method="POST">
                    @csrf
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
        <div class="col-lg-8 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">{{ $title }} Table</h4>
              <div class="d-flex justify-content-end">
                {{-- <button type="button" class="btn btn-gradient-primary mb-3 btn-fw ">ADD</button> --}}
                <a href="{{ route('categories') }}/create" class="btn btn-gradient-primary mb-3 btn-fw">Tambah</a>
              </div>
              
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th> # </th>
                    <th>Name</th>
                    <th>Code</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $key => $category)
                    <tr>
                        <td>1</td>
                        <td> {{ $category->name }} </td>
                        <td> {{ $category->code }} </td>
                      </tr> 
                    @endforeach
                </tbody>
            </table>
            {{-- <div class="d-flex justify-content-end mt-3 ">
                {{ $products->links() }}
            </div> --}}
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
    

