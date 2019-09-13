@extends('layouts.app', ['activePage' => 'testabel', 'titlePage' => __('Tes Tabel')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!--#-->
                <div class="card">
                    <div class="card-header" style="background-color: ">
                        <h4 class="card-title">Tabel Contoh</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Name</th>
                                    <th>Job Position</th>
                                    <th>Since</th>
                                    <th class="text-right">Salary</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td rel="tooltip" data-toggle="tooltip" data-placement="bottom" title="Alamat: Rumah nanas Umur: - Pekerjaan: memasak kraby patty">Andrew Mike</td>
                                    <td>Develop</td>
                                    <td>2013</td>
                                    <td class="text-right">&euro; 99,225</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                                            <i class="material-icons">person</i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-success">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-danger">
                                            <i class="material-icons">close</i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                                            Tooltip on bottom
                                        </button>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="card">
                    <div class="card-header" style="background-color: ">
                        <h4 class="card-title">Tabel Purchase</h4>
                    </div>
                    <div class="card-body">
                        <table class="table" id="purchase">
                            <thead>
                                <tr>
                                    <th>Order Number</th>
                                    <th class="text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" style="background-color: ">
                        <h4 class="card-title">Tabel Order</h4>
                    </div>
                    <div class="card-body">
                        <table class="table" id="order">
                            <thead>
                                <tr>
                                    <th>Diubah Tanggal</th>
                                    <th class="text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
  <script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();
        $('#purchase').DataTable({
            processing: true,
            serverSide: true,
            //"scrollX": true,
            ajax: "{{ url('getdata/purchase') }}",
            columns: [
                { data: 'order_number', name: 'order_number' },                      
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
        $('#purchase').on('draw.dt', function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
        $('#order').DataTable({
            processing: true,
            serverSide: true,
            //"scrollX": true,
            ajax: "{{ url('getdata/order') }}",
            columns: [
                { data: 'updated_at', name: 'updated_at' },                      
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
        $('#order').on('draw.dt', function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
        //click button modal
        $('#modalTes').on('click', function(){
            //id togle modal set true

            //pass data detail ke modal

            // tampilkan data modal
            
        });

    });
  </script>
@endpush