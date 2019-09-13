@foreach($data_po as $i)
<div class="card hml">
    <div class="card-header" style="padding-bottom: 0px;{{ StatWarna($i->status) }}">
        <h4 class="card-title text-center" style="color: #ffffff">Status Pemesanan: {{ $i->status }}</h4>
    </div>
    <div class="card-header" style="padding-top: 5px;padding-bottom: 0px;">
        <div class="category text-left">
            <div style="display:inline-flex">
                <p style="margin-bottom: 0px;">Order Number {{ $i->order_number }}</p>
                <p class="garis-v"></p>
                <p style="margin-bottom: 0px;">Tanggal Pengiriman {{ $i->shipped_date }}</p>
            </div>
        </div>
    </div>
    <div class="card-body" style="padding-bottom: 0px;">
        <div style="display:inline-flex">
            <img style="max-width: 100px;" src="{{ asset('img') }}/sample300x300.jpg"
                alt="gambar produk">
        <h4 style="margin-left: 15px; padding-block-start: 35px;">{{ $i->product_name }}/{{ $i->product_code }}</h4>
        </div>
    </div>
    <div class="card-footer" style="padding-bottom: 0px; border-top-width:1px solid black">
        <div class="text-muted text-right">
            Total: <span class="text-primary">Rp. {{ $i->total }}</span>
        </div>
        <div class="text-right">
        <button href="javascript:void(0);" class="btn btn-primary" id="modal-lacak" data-poid="{{ $i->id }}">{{ __('Lacak') }}</button>

        <button href="javascript:void(0);" class="btn btn-primary" id="modal-detail" data-id="{{ $i->id }}">{{ __('Rinci') }}</button>
        </div>
    </div>
</div>
@endforeach