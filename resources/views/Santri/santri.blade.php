@extends('layout.main')

@section('content')
<style>
  .container {
    margin-top: 80px;
  }
</style>
<div class="container">
  <div class="card">
  <div class="card-body">
  <h1 class="mx-2">Data Santri</h1>
  <a href="{{route('tambahSantri')}}" type="button" class="btn btn-success  ">Tambah +</a>
  <a href="Santri/export/" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
  <div class="row">
      <table class="table mx-4">
          <thead>
              <tr>
                  <td scope="col">#</td>
                  <td scope="col">Nama Lengkap</td>
                  <td scope="col">nik</td>
                  <td scope="col">alamat</td>
                  <td scope="col">Jenis Kelamin</td>
                  <td scope="col">Tempat lahir</td>
                  <td scope="col">action</td>
              </tr>   
          </thead>
          <tbody>
            @php
            $no = 1;
              @endphp
              <tr>
                  @foreach ($data as $index => $row)
                  <th scope="row">{{ $index + $data->firstItem() }}</th>
                  <td>{{$row -> nama_lengkap}}</td>
                  <td>{{$row -> nik}}</td>
                  <td>{{$row -> alamat}}</td>
                  <td>{{$row -> jenis_kelamin}}</td>
                  <td>{{$row -> tempat_lahir}}</td>
                  <td class="d-flex">
                      <form action="/deletedata/{{$row->id}}" method="POST">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-warning">Delete</button>
                      </form>
                     <a href="/tampilandata/{{$row->id}}" type="submit" class="btn btn-danger ml-2">Edit</a>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
       {{ $data->links() }}
  </div>
  </div>
</div>
</div>
</div>
    </tbody>
  </table>
@endsection