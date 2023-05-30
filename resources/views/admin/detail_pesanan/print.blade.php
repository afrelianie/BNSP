<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unduh Bukti Pesanan</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="col-auto d-flex align-items-center">
            <div class="ms-1">
                <a href="{{ url('admin/umkm') }}" class="btn btn-success">Kembali</a>
                <button id="printButton" onclick="print()" class="btn text-info btn-falcon-default btn-sm me-1 mb-2 mb-sm-0"
                    type="button"><span class="fas fa-file-pdf me-1"> </span>Download PDF</button>
            </div>
            <div class="position-relative">&nbsp;
                <a href="#"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-cog text-primary ms-1 me-1"></i></button></a>
            </div>
        </div>

        <div id="printTable" class="card">
            <!---- Content/isi dari Printan ------>
            <div class="row justify-content-center">
                <div class="col-md-11">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong><i class="fas fa-user-alt mr-1"></i> Nama Pengguna</strong>
                                    <p class="text-muted">{{ $data->name }}</p>
                                    <hr>

                                    <strong><i class="fas fa-solid fa-envelope"></i> Email</strong>
                                    <p class="text-muted">{{ $data->email }}</p>
                                    <hr>

                                    <strong><i class="fas fa-solid fa-phone"></i> Contact</strong>
                                    <p class="text-muted">{{ $data->no_hp }}</p>
                                    <hr>

                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">    
                                    <strong><i class="fas fa-users"></i> Kode Pesanan</strong>
                                    <p class="text-muted">{{ $data->kode_pesanan }}</p>
                                    <hr>

                                    <strong><i class="fas fa-map mr-1"></i> Nama Tempat</strong>
                                    <p class="text-muted">{{ $data->nama_destinasi }}</p>
                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
                                    <p class="text-muted">{{ $data->alamat }}</p>
                                    <hr>
                                </div>
                            </div>
                
                        </div>
                    </div>
                </div>
            </div>
            <!---- Content/isi dari Printan ------>
        </div>
    </div>


    <script type="text/javascript">
        window.jsPDF = window.jspdf.jsPDF;
        var docPDF = new jsPDF();

        function print() {
            var elementHTML = document.querySelector("#printTable");
            docPDF.html(elementHTML, {
                callback: function(docPDF) {
                    docPDF.save('Surat_Pengajuan_Absensi.pdf');
                },
                x: 15,
                y: 15,
                width: 170,
                windowWidth: 650
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
