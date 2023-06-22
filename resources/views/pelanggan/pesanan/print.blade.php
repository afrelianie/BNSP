<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prin Berkas</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
     

    <div class="container">
        
        <div id="printTable" class="card">
            <!---- Content/isi dari Printan ------>
            <div class="row justify-content-center">
                <div class="col-md-11">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group"> <br><br>
                                    <strong><center>Tempat Destinasi</center></strong>
                                    <hr>
                                    <center>
                                        <img class="image" width="70%" height="70%" src="{{ asset($pesanan->destinasi[0]->foto_destinasi) }}" alt="image">
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                         <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Nama Pengguna</strong>
                                    <p class="text-muted">{{ $pesanan->user->name }}</p>
                                    <hr>

                                    <strong>Email</strong>
                                    <p class="text-muted">{{ $pesanan->user->email }}</p>
                                    <hr>

                                    <strong>Contact</strong>
                                    <p class="text-muted">{{ $pesanan->user->no_hp }}</p>
                                    <hr>
                                </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <strong>Nama Destinasi</strong>
                                <p class="text-muted">{{ $pesanan->destinasi[0]->nama_destinasi }}</p>
                                <hr>

                                <strong>Kode Pesanan</strong>
                                <p class="text-muted">{{ $pesanan->kode_pesanan }}</p>
                                <hr>

                                <strong>Tanggal Boking Tempat</strong>
                                <p class="text-muted">{{ $pesanan->tanggal_pesanan }}</p>
                                <hr>
                              </div>
                            </div>
                         </div> 
                    </div>

                </div>
            </div>
            <!---- Content/isi dari Printan ------>
        </div>

        <br>
        <div class="col-auto d-flex align-items-center">
            <div class="ms-1">
                <a href="{{ url('pengguna/pesanan') }}" class="btn btn-success">Kembali</a>
                <button id="printButton" onclick="print()" class="btn btn-info"
                    type="button"><span class="fas fa-file-pdf me-1"> </span>Download PDF</button>
            </div>
            <div class="position-relative">&nbsp;
                <a href="#"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-cog text-primary ms-1 me-1"></i></button></a>
            </div>
        </div> 

    </div>
    <br><br><br>


    <script type="text/javascript">
        window.jsPDF = window.jspdf.jsPDF;
        var docPDF = new jsPDF();

        function print() {
            var elementHTML = document.querySelector("#printTable");
            docPDF.html(elementHTML, {
                callback: function(docPDF) {
                    docPDF.save('Bukti_Bayar.pdf');
                },
                x: 15,
                y: 15,
                width: 180,
                windowWidth: 500
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
