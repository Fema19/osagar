@extends('layouts.app')
@section('content')
    <form action="{{ route('karyawan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6>Formulir Tambah karyawan</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="number" class="form-control" name="nip">
                        </div>  
                   
                    
                      <div class="form-group">
                          <label>Nama Karyawan</label>
                          <input type="text" class="form-control" name="nama_karyawan" >
                      </div>
                      
                        <div class="form-group">
                            <label>Gaji karyawan</label>
                            <input type="number" class="form-control" name="gaji_karyawan">
                        </div>
                    
                    
                      <div class="form-group">
                          <label>Alamat</label>
                          <textarea class="form-control" name="alamat"></textarea>
                      </div>
                 
                  
                    <div class="form-group">
                        <label>Jenis kelamin</label>
                        <select name="jenis_kelamin" class="custom-select">
                          <option value="" selected disabled hidden> --pilih jenis kelamin--</option>
                          <option value="pria">pria</option>
                          <option value="wanita">wanita</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="foto">Upload Foto Karyawan</label>
                        <input type="file" class="form-control-file" id="foto" name="foto">
                    </div>
                </div>
                <div class="form-group">
                        <label>Departement</label>
                        <select name="departemen_id" class="custom-select">
                            @foreach ($departemen as $item)
                            <option value="{{ $item->id}}">{{ $item->nama_departemen}}</option>
                                
                            @endforeach
                        </select>
                </div>
                      

                  </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
