@extends('layout.main')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1 class="mx-auto text-center">Data User</h1>
            <div class="row">
                <a href="{{route('tambahuser')}}" type="button" class="btn btn-success mt-2 mb-4">Tambah +</a>
               
                <div style="overflow-x: scroll;;">
                    <table class="table mt-4 table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">nipd</th>
                            <th scope="col">Email</th>
                            <th scope="col">password</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        <tr>
                            @foreach ($data as $index => $row)
                            <th scope="row">{{ $index + $data->firstItem() }}</th>
                            <td>{{$row ->name}}</td>
                            <td>{{$row ->nipd}}</td>
                            <td>{{$row ->email}}</td>
                            <td>{{$row ->password}}</td>
                            {{-- <td>{{$row ->expired}}</td> --}}
                            <td>{{$row ->role}}</td>
                            <td class="d-flex">
                                <a href="#" class="btn btn-danger m-2 delete" data-id="{{$row->id}}"  data-nama="{{$row->name}}">Delete</a>
                            <a href="/tampilanuser/{{$row->id}}" type="submit"class="btn btn-warning m-2">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                    @if ($data->count() == 0)
                            <div class="alert alert-danger" role="alert">
                                Tidak Ada Data Peminjam!
                            </div>
                        @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</html>
@endsection