@extends('layout.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Data Petugas Sanggar</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/admin/updatedata/{{$data->email}}" method="POST" enctype="multipart/form-data">
              @csrf 
              <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" value="{{$data->nama}}" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama lengkap anda" name="nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Email</label>
                  <input type="email" value="{{$data->email}}" name="email" class="form-control" id="email" placeholder="Enter email" disabled>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Whatsapp</label>
                    <input type="number" value="{{$data->no_wa}}" name="no_wa" class="form-control" id="no_wa" placeholder="Nomor Whatsapp Aktif">
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                   <input name="alamat" value="{{$data->alamat}}" name="alamat" id="exampleInputEmail1" cols="30" rows="10" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Alamat Rumah anda" >
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Foto</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="gambar" name="image" value="{{$data->image}}" disabled>
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">password</label>
                    <input type="password" value="{{$data->password}}" name="password" class="form-control" id="email" placeholder="Enter email">
                </div>
              <!-- /.card-body -->
        
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </div><!-- /.container-fluid -->
    </div>
</div>    
@endsection

