<table class="table" border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Teacher Name</th>
            <th>Major</th>
            <th>Max Student</th>
        </tr>
    </thead>
    <tbody>
        
            {{-- @if($item->id % 2 ==0)
                <tr style="backgroud: green">
                    <td scope="row"></td>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->teacher_name}}</td>
                    <td>{{$item->major}}</td>
                    <td>{{$item->max_student}}</td>
                </tr>
            @else
            <tr style="backgroud: red">
                <td scope="row"></td>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->teacher_name}}</td>
                <td>{{$item->major}}</td>
                <td>{{$item->max_student}}</td>
            </tr>
            @endif --}}
        @foreach ($classes as $item)
            <tr style="background: {{$item->id % 2 ? 'red' : 'green'}}">
               
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->teacher_name}}</td>
                <td>{{$item->major}}</td>
                <td>{{$item->max_student}}</td>
            </tr>
  
        @endforeach
       
      
    </tbody>
</table>