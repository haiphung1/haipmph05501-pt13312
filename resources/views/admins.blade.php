@extends('layout.master')
@section('title')
    Admin Page
@endsection


<div class="container">
        <h1>
            @section('table_name')
                Admin
            @endsection
        </h1>
        @section('table')
            <table class="table table-striped">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Name</th>
                 
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                   
                  </tr>
               
                </tbody>
            </table>
        @endsection
      
    </div>

    
    
