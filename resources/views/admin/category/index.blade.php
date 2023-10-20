@extends('template.admin.header')
@section('judul','Bride Story | Sistem Informasi Paket Prewedding')
@section('sub_judul','Artikel')
@section('content')




<div class="row justify-content-center">
  <div class="col-md-11">


    <div class="card">
        <div class="container">
          <div class="row card-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="col-6">
                <h5 class="card-header">Tabel Artikel</h5>
            </div>
            <div class="col-6">
              <!-- Modal -->
              <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Tambah Artikel
              </button>
            </div>
          </div>
        </div>


      <div class="card-body p-2">
        <div class="table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                  <th width="20px"> No </th>
                  <th> Action </th>
                  <th> Nama Artikel </th>
                  <th> Konten </th>
              </tr>
            </thead>

            <tbody>
            
              @foreach ($category as $hasil)
                <tr>
                  <td> {{ $loop->iteration }} </td>
                  <td>
                    <div class="btn btn-group">
                        <a href="{{ url('admin/category/show', $hasil->id) }}" 
                          class="btn btn-success"><i class="fa fa-eye"> </i></a> &nbsp;
                      
                          @include('template.delete', [
                            'id'=> $hasil->id,
                            'url' => url('admin/category/destroy', $hasil->id), 
                          ])
                    </div>
                  </td>
                  <td> {{$hasil-> name}} </td>
                  <td> {{$hasil-> content}} </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>


    <!-- Modal Tambah Kategori -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Tambah Artikel</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">


                            <!-- ============================================================== -->
                            <!-- basic form  -->
                            <!-- ============================================================== -->
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <form action="{{ url('admin/category/store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Nama Arikel</label>
                                                    <input id="inputText3" type="text" class="form-control" placeholder="Nama Artikel" name="name">
                                                </div>
                                                <div class="form-group">
                                                  <label for="inputText3" class="col-form-label">Gambar</label>
                                                  <input type="file" name="image" id="" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Konten</label>
                                                    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Isi Konten"></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                                    <button class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>

                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end basic form  -->
                            <!-- ============================================================== -->

          </div>
        </div>
      </div>
    </div>

  </div>
</div>



@endsection
