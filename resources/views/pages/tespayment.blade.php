@extends('layouts.app', ['activePage' => 'tespay', 'titlePage' => __('Tes Pembayaran')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- tes -->
                <div class="card" style="border: 1px;">
                    <div class="card-header" style="padding-bottom: 0px;">
                        <h4 class="card-title text-center">Metode Pembayaran{}</h4>
                        <div class="category text-left">
                            <div style="display:inline-flex">
                                <p style="margin-bottom: 0px;">Order ID {}</p>
                                <p style="margin-left: 10px;margin-bottom: 0px;">Invoice {}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="padding-bottom: 0px;">
                        <div style="display:inline-flex">
                           <img style="max-width: 100px;" src="{{ asset('img') }}/bri.jpeg" alt="gambar produk">
                            <h4 style="margin-left: 15px; padding-block-start: 35px;">BRI VA</h4>
                        </div>
                    </div>
                    <div class="card-footer" style="padding-bottom: 0px;">
                        <div class="text-muted text-right">
                            Total: <span class="text-primary">Rp. 99.999{}</span>
                        </div>
                        <div class="text-right">
                          <form method="POST" action="{{ route('tespay_va_bri') }}">
                            <button type="submit" class="btn btn-primary">{{ __('Bayar') }}</button>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('cssscope')
  <style type="text/css">

  </style>
@endpush

@push('js')
  <script>
    $(document).ready(function() {
        md.initDashboardPageCharts();
        
   });
  </script>
@endpush