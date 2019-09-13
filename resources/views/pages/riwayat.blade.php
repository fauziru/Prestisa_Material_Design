@extends('layouts.app', ['activePage' => 'riwayat', 'titlePage' => __('Riwayat')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- tes fetch data-->
                <div id="isi"> 
                  
                </div>
                <!--load data-->
                @include('components.bt_MB_load')
                <div id="error-pesan"></div>
            </div>
        </div>
    </div>
</div>
@include('components.modal_po_detail')
@include('components.modal_po_lacak')
@endsection

@push('cssscope')
  <style type="text/css">
    

    
  </style>
@endpush

@push('js')
  <script>
    $(document).ready(function() {
        md.initDashboardPageCharts();
        var pageNumber = 2;
        $('#empty-state-modal-lacak').hide();
          $.ajax({
                type : 'GET',
                url: "/components/json/cardpo",
                success : function(data){
                  if(data.html.length == 0){
                    // jika tidak ada riwayat order
                    $('#loader').hide();
                  }else{
                    $('#isi').append(data.html);
                    $('#loader').hide();
                    $('#muat-banyak').show();
                  }
                },error: function(data){
                  //        
                },
          });
        //modal_detail
        $('body').on('click','#modal-detail', function(){
            //id togle modal set true
            var po_id = $(this).data('id');
            $.get('riwayat/' + po_id, function (data){
              $('#detailModal').modal('show');
              $('#ModalLabeldetail').html('PO Id ' + po_id);
              $('#order-number').html('Order Number : ' + data[0]['order_number']);
            })
        });

        //modal_lacak
        $('body').on('click','#modal-lacak', function(){
            //id togle modal set true
            $('#empty-state-modal-lacak').hide();
            $('#isi-modal-lacak').show();
            var po_id = $(this).data('poid');
            $('#tgl').html('');
            $('#user').html('');
            $('#status').html('');
            $.get('riwayat/' + po_id, function (data){
              if(data[0]['status_log']){
                var stat_json = JSON.parse(data[0]['status_log']);
                $('#ModalLabellacak').html('PO Id ' + po_id);
                $('#user').append(stat_json[0]['user']);
                stat_json.forEach(item => $('#status').append('<p>' + item.status + '</p>'));
                stat_json.forEach(item => $('#tgl').append('<p>' + item.date + '</p>'));
              }else{
                //jika status log sama dengan kosong
                $('#empty-state-modal-lacak').show();
                $('#isi-modal-lacak').hide();
              }
                $('#lacakModal').modal('show');
            }); 
        });

        $('#muat-banyak').on('click', function(){
          console.log('#tes lm');
          $('#muat-banyak').hide();
          $('#loader').show(); 
          $.ajax({
                type : 'GET',
                url: "/components/json/cardpo?page=" +pageNumber,
                success : function(data){
                    pageNumber +=1;
                        if(data.html.length == 0){
                            // jika tidak ada lagi riwayat order
                          $('#loader').hide();
                        }else{
                            $('#isi').append(data.html);
                            $('#muat-banyak').show(); 
                            $('#muat-banyak').html("Memuat");
                            $('.main-panel').perfectScrollbar('update');
                            $('#loader').hide();
                        }
                },error: function(data){
                  $('#error-pesan').val("Error Error!");        
                },
            })
        })
    });
  </script>
@endpush