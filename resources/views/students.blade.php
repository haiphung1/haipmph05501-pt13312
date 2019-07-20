<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Adress</th>
            <th>University</th>
        </tr>
    </thead>
    <tbody>
        
           @foreach ($students as $item)
            <tr>
                <td scope="row">{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->university}}</td>
            </tr>
           @endforeach
           
        
        
    </tbody>
</table>