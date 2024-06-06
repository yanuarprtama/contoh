@extends("sidebar")
@section("head")
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>LABSIMPOLTEKBANG | Peminjaman Alat</title>
    <link rel="shortcut icon" href="assets/img/plane-icon.jpg">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="assets/plugins/fontawesome-free-6.5.2-web/css/all.min.css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css" />
</head>
@endsection
@section("content")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Alat</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Peminjaman Alat</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Peminjaman Alat</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.transaksi.store') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="id_daftar">Daftar Makanan Minuman</label>
                                                <select class="form-control" id="id_daftar">
                                                    @foreach ($daftars as $daftar)
                                                        <option value="{{ $daftar->id_daftar }}" data-nama="{{ $daftar->nama }}"
                                                            data-harga="{{ $daftar->harga }}" data-id="{{ $daftar->id_daftar }}">
                                                            {{ $daftar->nama }} (
                                                            Rp.<?= number_format($daftar->harga) ?> )</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="">&nbsp;</label>
                                                <button class="btn btn-primary d-block" type="button" onclick="tambahItem()">Tambah
                                                    Item</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 table-responsive">
                                            <table class="table table-hover table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Quantity</th>
                                                        <th>Harga</th>
                                                        <th>#</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="transaksiItem">

                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th colspan="2">Jumlah</th>
                                                        <th class="quantity">0</th>
                                                        <th class="totalHarga">0</th>
                                                        <th></th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="hidden" name="total_harga" value="0">
                                            <button class="btn btn-success">Simpan Transaksi</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
@section("footer")
<footer class="main-footer">
    <div class="float-right d-none d-sm-block"><b>Version</b> 3.2.0</div>
    <strong>Copyright &copy; 2014-2021
        <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jszip/jszip.min.js"></script>
<script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
    $(function() {
        $("#example1")
            .DataTable({
                responsive: true,
                lengthChange: false,
                autoWidth: false,
                buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
            })
            .buttons()
            .container()
            .appendTo("#example1_wrapper .col-md-6:eq(0)");
        $("#example2").DataTable({
            paging: true,
            lengthChange: false,
            searching: false,
            ordering: true,
            info: true,
            autoWidth: false,
            responsive: true,
        });
    });
</script>
</body>

</html>
@endsection
@section('js')
                        <script>
                            var totalHarga = 0;
                            var quantity = 0;
                            var listItem = [];

                            function tambahItem() {
                                updateTotalHarga(parseInt($('#id_daftar').find(':selected').data('harga')))
                                var item = listItem.filter(el => el.id_daftar === $('#id_daftar').find(':selected').data('id'));
                                if (item.length > 0) {
                                    item[0].quantity += 1
                                } else {
                                    var item = {
                                        id_daftar: $('#id_daftar').find(':selected').data('id'),
                                        nama: $('#id_daftar').find(':selected').data('nama'),
                                        harga: $('#id_daftar').find(':selected').data('harga'),
                                        quantity: 1
                                    }
                                    listItem.push(item)
                                }
                                updateQuantity(1)
                                updateTable()
                            }

                            function deleteItem(index) {
                                var item = listItem[index]
                                if (item.quantity > 1) {
                                    listItem[index].quantity -= 1;
                                    updateTotalHarga(-(item.harga))
                                    updateQuantity(-1)
                                } else {
                                    listItem.splice(index, 1)
                                    updateTotalHarga(-(item.harga * item.quantity))
                                    updateQuantity(-(item.quantity))
                                }
                                updateTable()
                            }

                            function updateTable() {
                                var html = ''
                                listItem.map((el, index) => {
                                    var harga = formatRupiah(el.harga.toString())
                                    var quantity = formatRupiah(el.quantity.toString())
                                    html += `
                                    <tr>
                                        <td>${index + 1}</td>
                                        <td>${el.nama}</td>
                                        <td>${quantity}</td>
                                        <td>${harga}</td>
                                        <td>
                                            <input type="hidden" name="id_daftar[]" value="${el.id_daftar}">
                                            <input type="hidden" name="quantity[]" value="${el.quantity}">
                                            <button type="button" onclick="deleteItem(${index})" class="btn btn-link"><i class="fas fa-fw fa-trash text-danger"></i></button>
                                        </td>
                                    </tr>
                                    `
                                })
                                $('.total')
                                $('.transaksiItem').html(html)
                            }

                            function updateTotalHarga(nom) {
                                totalHarga = totalHarga + nom;
                                $('[name=total_harga]').val(totalHarga)
                                $('.totalHarga').html(formatRupiah(totalHarga.toString()))
                            }

                            function updateQuantity(nom) {
                                quantity = quantity + nom;
                                $('.quantity').html(formatRupiah(quantity.toString()))
                            }

                            function emptyTable() {
                                $('.transaksiItem').html(`
                                    <tr>
                                        <td colspan="4">Belum ada item, silahkan tambahkan</td>
                                    </tr>
                                `)
                            }

                            $(document).ready(function() {
                                emptyTable()
                            })
                        </script>
@endsection