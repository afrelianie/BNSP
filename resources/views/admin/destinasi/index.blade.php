@extends('template.admin.header')
@section('judul','Bride Story | Sistem Informasi Paket Prewedding')
@section('sub_judul','Paket Prewedding')
@section('content')





<div class="row justify-content-center">
    <div class="col-md-11">

        <div class="card">

          <div class="card-header">
              <div class="card-title">
                  <h5 class="mx-4 pt-2">
                      Tabel Paket Prewedding
                  </h5>
              </div>
              <div class="float-right">
                      <!-- Button Modal -->
                  <button type="button" class="btn btn-danger float-end mt-2 mb-2" data-bs-toggle="modal"
                      data-bs-target="#exampleModal"><i class="fa fa-file-import"></i> Import To Excel
                  </button>
                  <a href="{{ url('admin/destinasi/create')}}"
                      class="float-end btn btn-dark mt-2 mb-2 mx-3">Tambah Data &nbsp;<i class="fa fa-plus"></i></a>
              </div>
          </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Import Data Prewedding</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{url('admin/destinasi/import')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="file" name="file" required="required">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- akhir Modal -->





          <div class="card-body p-2">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="20px">No</th>
                    <th width="90px">Action</th>
                    <th>Nama Tempat</th>
                    <th>Harga</th>
                    <th>Alamat</th>
                  </tr>
                </thead>
                <tbody>
                   
                    @foreach ($data_destinasi as $destinasi)
                    <tr>
                         <td> {{ $loop->iteration }} </td>
                         <td>
                            <div class="btn btn-group">

                                   <a href="{{ url('admin/destinasi/show', $destinasi->id) }}" 
                                        class="btn btn-success"><i class="fa fa-eye"> </i></a> &nbsp;
                                   <a href="{{ url('admin/destinasi', $destinasi->id) }}/edit" 
                                        class="btn btn-warning"><i class="fa fa-edit"> </i></a> &nbsp;
                                          
                                    @include('template.delete', [
                                      'id'=> $destinasi->id,
                                    'url' => url('admin/destinasi/destroy', $destinasi->id),
                                ])
                            </div>
                         </td>
                         <td> {{ $destinasi->nama_destinasi }} </td>
                         <td> {{ $destinasi->harga}} </td>
                         <td> {{ $destinasi->alamat_destinasi }} </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
</div>

@endsection