@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Home')])

@section('content')
<div class="content">
    <div class="col-md-12">
        <!--profileSEction-->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title ">Selamat Datang, <b>{{auth()->user()->name}}</b>
                </h4>
                <div class="text-right">
                    <img class="icon" src="{{ asset('icon') }}/iconpngcolor/Ecommerce-03.png"></img>
                    <p>Point {{auth()->user()->points}}</p>
                </div>
            </div>
            <div id="menu-konten" class="card-body">
                <!--menu-->

            </div>
            <!--car body/-->
        </div>
        <!--card/-->
        <!--profileSection/-->
        <!--menuSection-->
        <div class="pb" id="tes" style="width: 1106px;">
            <div id="loader" class="loader menu-bar">
                <div id="loader-dc"></div>  
            </div>
        </div>
        <!--menuSection  -->

        @include('components.carousel')
        <!--kategori bunga 1-->
        <div class="row" style="padding-top: 30px;">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Kategori 1</h4>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Kategori 2</h4>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
        <!--carousel/-->
        @include('components.carousel2')
    </div>
    <!--col 12 md/-->
</div>
<!--content/-->
@endsection
@push('cssscope')
<style type="text/css">
	
	.menu-titel{
		padding-top: 15px;
	}
	.card{
		margin-top: 0px;
		margin-bottom: : 0px;
	}
	#menu-konten{
		padding-top: 0px;
		padding-bottom: 0px;
	}
	.mb{
		padding-right: 0px !important;
	}
	.pb{
		display: inline-flex;
		max-width: 107% !important;
        margin-left: -15px !important;
	}
	#tes{
  		position: relative;
  		overflow: auto;
	}
</style>
@endpush

@push('js')
  <script>
    $(document).ready(function() {

        md.initDashboardPageCharts();
        //const tes = document.querySelector('#tes');
		//const ps = new PerfectScrollbar(tes);
        $('#tes').perfectScrollbar();
        $.ajax({

                type : 'GET',
                url: "components/json/mB",
                success : function(data){
                    $('#tes').append(data.html);
                    $('#tes').perfectScrollbar('update');
                    $('#loader').hide();
                },error: function(data){
                //error        
                },
            })
        $('.ps-scrollbar-y-rail').hide();
   });
  </script>
@endpush