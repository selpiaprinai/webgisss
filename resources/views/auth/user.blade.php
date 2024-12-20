@extends('layout.app')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Users</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="Dashboard.html">Home</a></li>
          <li class="breadcrumb-item active">Users</li>
        </ol>
      </nav>
      <!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Pengguna</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                        </tr>
                        @forelse ($pengguna as $row )
                        <tr>
                            <td>{{$nomor++}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->email}}</td>
                            <td><a href="#" class="btn btn-sm btn-info"><i class="fa fa-edit"> </i>Ubah</a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-f3 fa-trash"></i>
                                 Hapus</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Data Belum Ada</td>
                        </tr>
                    @endforelse
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
</div>
    </div><!-- End Page Title -->
</main><!-- End #main -->