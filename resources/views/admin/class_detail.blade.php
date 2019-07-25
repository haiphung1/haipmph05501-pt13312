@foreach ($classes as $item)
    @if ($item->id === 3)
    <tr>
        Thong tin sinh vien co id =3 ;
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->teacher_name}}</td>
        <td>{{$item->major}}</td>
        <td>{{$item->max_student}}</td>
    </tr>
   
    @endif
@endforeach