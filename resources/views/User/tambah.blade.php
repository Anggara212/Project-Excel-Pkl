@extends('layout.main')


@section('content')
<div class="container">
    <h1 class="text-center mb-4 pt-4">Tambah User</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body" style="width: 90%">
                    <form method="POST" action="/insertuser/" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" name="name" id="" class="form-control 
                            @error('name')
                                is-invalid
                            @enderror" aria-describedby="emailHelp">
                            @error('name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nipd</label>
                            <input type="text" name="nim" id="nim" class="form-control 
                            @error('nipd')
                                is-invalid
                            @enderror" aria-describedby="emailHelp">
                            @error('nipd')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" name="email" id="email" class="form-control 
                            @error('email')
                                is-invalid
                            @enderror" aria-describedby="emailHelp">
                            @error('email')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="text" name="Password" id="Password" class="form-control 
                            @error('Password')
                                is-invalid
                            @enderror" aria-describedby="emailHelp">
                            @error('Password')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
                          