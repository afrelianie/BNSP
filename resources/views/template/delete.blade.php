     <!-- Button trigger modal -->
     <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal1">
          <i class="fa fa-trash"></i>
     </button>
                                   
     <!-- Modal -->
     <form action="{{ $url }}" class="form-horizontal" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                    <div class="modal-content">
                         <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                              Apakah anda yakin akan menghapus data ?
                         </div>
                         <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                              <button class="btn btn-danger">Hapus</button>
                         </div>
                    </div>
               </div>
          </div>
     </form>
  