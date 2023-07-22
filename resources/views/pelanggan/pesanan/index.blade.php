@extends('template.pelanggan.header')
@section('content')


<!-- table history pesanan section start -->
<section class="" id="">

<h1 class="heading">
    <span>r</span>
    <span>i</span>
    <span>w</span>
    <span>a</span>
    <span>y</span>
    <span>a</span>
    <span>t</span>
    <span class="space"></span>
    <span>p</span>
    <span>e</span>
    <span>s</span>
    <span>a</span>
    <span>n</span>
    <span>a</span>
    <span>n</span>
</h1>


<main class="table">
    <section class="table__header">
        <!-- <h1>Riwayat Pesanan</h1> 
        <div class="input-group">
            <input type="search" placeholder="Search Data...">
            <i class="fas fa-search" id="search-btn"></i>
        </div> -->
       
    </section>
    <section class="table__body">
    <table>
                              <thead>
                                   <tr>
                                        <th width="20px">No</th>
                                        <th>Nama Destinasi</th>
                                        <th>Kode Pesanan</th>
                                        <th>Tanggal Boking</th>
                                        <th>Harga</th>
                                        <th>Status</th>
                                        <th width="90px"><center>Action</center></th>
                                   </tr>
                               </thead>
                               <tbody>
                                   @foreach ($list_data as $pesanan)
                                   <tr>
                                        <td> {{ $loop->iteration }} </td>
                                        <td> {{ $pesanan->destinasi->nama_destinasi }} </td>
                                        <td> {{ $pesanan->kode_pesanan }} </td>
                                        <td> {{ $pesanan->tanggal_pesanan }} </td>
                                        <td> {{ $pesanan->destinasi->harga }} </td>
                                        <td> {{ $pesanan->status }} </td>
                                        <td>
                                             <a href="{{ url('pelanggan/pesanan/show', $pesanan->id) }}" class="btn btn-success"><i class="fa fa-eye"></i></a>&nbsp;
                                        </td>
                                   </tr>
                                   @endforeach
                               </tbody>
                         </table> 
    </section>
</main>
</section>

<!-- <table>
                              <thead>
                                   <tr>
                                        <th width="20px">No</th>
                                        <th>Nama Destinasi</th>
                                        <th>Kode Pesanan</th>
                                        <th>Tanggal Boking</th>
                                        <th>Harga</th>
                                        <th>Status</th>
                                        <th width="90px"><center>Action</center></th>
                                   </tr>
                               </thead>
                               <tbody>
                                   @foreach ($list_data as $pesanan)
                                   <tr>
                                        <td> {{ $loop->iteration }} </td>
                                        <td> {{ $pesanan->destinasi->nama_destinasi }} </td>
                                        <td> {{ $pesanan->kode_pesanan }} </td>
                                        <td> {{ $pesanan->tanggal_pesanan }} </td>
                                        <td> {{ $pesanan->destinasi->harga }} </td>
                                        <td> {{ $pesanan->status }} </td>
                                        <td>
                                             <a href="{{ url('pelanggan/pesanan/show', $pesanan->id) }}" class="btn btn-success"><i class="fa fa-eye"></i></a>&nbsp;
                                        </td>
                                   </tr>
                                   @endforeach
                               </tbody>
                         </table>  -->

<!-- table history pesanan section end --> 



@endsection