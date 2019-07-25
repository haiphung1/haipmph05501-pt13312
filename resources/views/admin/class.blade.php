@extends('admin.master')

@section('title', 'Class page')
    
@section('content')
    Bang hien thi
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th style="width: 10px">#</th>
                <th>Ten</th>
                <th>Giao Vien</th>
                <th>Nganh</th>
                <th>So sinh vien</th>
            </tr>
            
            @foreach ($classes as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->teacher_name}}</td>
                <td>{{$item->major}}</td>
                <td>{{$item->max_student}}</td>
            </tr>
            @endforeach
        
         
      
      
       
       
      </tbody>
    </table>
    @include('admin.class_detail')

@endsection