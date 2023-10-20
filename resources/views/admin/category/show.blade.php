@extends('template.admin.header')
@section('judul','Bride Story | Sistem Informasi Paket Prewedding')
@section('sub_judul','Artikel')
@section('content')




    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img width="95%" src="{{ asset($category-> image)}}"
                                            >
                                    </div>
                                        <h4 class="profile-username text-center">{{ $category->name }}</h4>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>{{ $category->content }}</b>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-body">


                                        <div class="tab-pane" id="settings">
                                            <form action="{{ url('admin/category/update', $category->id) }}"
                                                class="form-horizontal" method="post" enctype="multipart/form-data">
                                                @csrf
                                                
                                                <div class="form-group row">
                                                    <label for="inputName" class="col-sm-2 col-form-label">Nama Artikel</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputName"
                                                            placeholder="Nama" name="name" value="{{ $category->name }}">
                                                        @error('name')
                                                        <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputExperience" class="col-sm-2 col-form-label">Content</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" id="inputName1" placeholder="Content"
                                                            name="content">{{ $category->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputSkills" class="col-sm-2 col-form-label">Gambar</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control" id="" name="image">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="offset-sm-2 col-sm-10">
                                                        <button type="submit" class="btn btn-success">Simpan</button>
                                                        <a href="{{ url('admin/category') }}" class="btn btn-secondary">Kembali</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.tab-pane -->



                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        
            </div>
        </div>
    </div>








@endsection
