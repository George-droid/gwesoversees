@extends('be.layouts.default')

@section('content')
<div class="container-fluid">
    
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Universities</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-md-10 mb-3">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  @if(session('success'))
                      <div class="alert alert-success">
                          {{ session('success') }}
                      </div>
                  @endif
                    <form method="POST" action="{{ route('be.saveuniversities') }}">
                        @csrf
                        <div class="mb-3">
                          <label for="destination_id" class="form-label">University's Destination</label>
                          <select name="destination_id" class="form-control" id="destination_id" aria-describedby="menuHelp">
                              <option value="">Select Menu Category</option>
                              @foreach($destinations as $destination)
                                  <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                              @endforeach
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="dish_name" class="form-label">University Name</label>
                          <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input type="file" name="logo" class="form-control" id="logo">
                          </div>
                        <div class="mb-3">
                          <label for="description" class="form-label">Description</label>
                          <input type="text" name="description" class="form-control" id="description">
                        </div>
                        {{-- <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> --}}
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection