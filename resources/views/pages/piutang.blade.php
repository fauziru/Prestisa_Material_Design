@extends('layouts.app', ['activePage' => 'piutang', 'titlePage' => __('Piutang')])

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
@include('components.modal_bayar_piutang')
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
          $.ajax({
                type : 'GET',
                url: "components/json/cardpiutang",
                success : function(data){
                  if(data.html.length == 0){
                    // jika tidak ada riwayat order
                    $('#loader').hide();
                  }else{
                    console.log('tes load data piutang')
                    $('#isi').append(data.html);
                    $('#loader').hide();
                    $('#muat-banyak').show();
                  }
                },error: function(data){
                  //        
                },
          });
        //modal bayar piutang
        $('body').on('click','#modal-bayar', function(){
            //id togle modal set true
            var order_id = $(this).data('id');
            $.get('piutang/' + order_id, function (data){
              console.log(data)
              $('#paypiutangModal').modal('show');
              $('#ModalLabeldetail').html('Ordder Id ' + order_id);
              $('#order-number').html('Order Number : ' + data[0]['order_number']);
            })
        });


        $('#muat-banyak').on('click', function(){
          console.log('#tes lm');
          $('#muat-banyak').hide();
          $('#loader').show(); 
          $.ajax({
                type : 'GET',
                url: "/components/json/cardpiutang?page=" +pageNumber,
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