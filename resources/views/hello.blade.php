@extends('css')

<div class="container">
    <br>
    <h1>Thông tin</h1>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$hienthi['name']}}</td>
                    <td>{{$hienthi['diachi']}}</td>
                    <td>{{$hienthi['sdt']}}</td>
                    <td>{{$hienthi['email']}}</td>
                </tr>
                 
             </tbody>
        </table>
</div>