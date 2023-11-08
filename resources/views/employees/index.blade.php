@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-6">
        <table class="mt-3 table table-bordered">
            <thead>
              <tr>
                <th class="col-1">Id</th>
                <th class="col">Name</th>
                <th class="col">Email</th>
                <th class="col">Designation</th>
                <th class="col-3">Action</th>
              </tr>
            </thead>
            <tbody id="employeeTable">
            
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <div class="d-flex justify-content-between">
                      <a href="" type="submit" class="btn btn-primary btn-small mx-1">Details</a>
                      <a href="" type="submit" class="btn btn-success btn-small mx-1">Edit</a>
                      <a href="" type="submit" class="btn btn-danger btn-small mx-1">Delete</a>
                    </div>
                  </td>
                </tr>
            
            </tbody>
          </table>
    </div>
    <div class="col-6">
        <form id="employeeForm">
            <div class="form-group mb-2">
              <label for="employeeName">Name</label>
              <input type="text" class="form-control" id="employeeName" name="employeeName" placeholder="Name">
              {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
            </div>
            <div class="form-group mb-2">
              <label for="employeeEmail">Email</label>
              <input type="email" class="form-control" id="employeeEmail" placeholder="Email">
              {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
            </div>
            <div class="form-group mb-2">
              <label for="employeeDesignation">Designation</label>
              <input type="text" class="form-control" id="employeeDesignation" placeholder="Designation">
            </div>
            <button type="submit" id="btnEmployeeSubmit" class="btn btn-primary mt-1">Submit</button>
          </form>
    </div>
</div>






@endsection


@section('customJs')
    <script src="{{ asset('js/employee/employee.js') }}"></script>
@endsection