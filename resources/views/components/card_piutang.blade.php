@foreach($data_pu as $i)
<div class="card hml">
    <div class="card-header" style="padding-bottom: 0px;{{ StatHDPay($i->payment_status) }}">
        <h4 class="card-title text-center" style="color: #ffffff;">Status Pembayaran: {{ $i->payment_status }}</h4>
    </div>
    <div class="card-header" style="padding-top: 5px;padding-bottom: 0px;">
        <div class="category text-left">
            <div style="display:inline-flex">
                <p style="margin-bottom: 0px;">Order Number {{ $i->order_number }}</p>
                <p class="garis-v"></p>
                <p style="margin-bottom: 0px;">Status {{ $i->status }}</p>
            </div>
        </div>
    </div>
    <div class="card-body" style="padding-bottom: 0px;">
        <div class="text-left">
            Cashback: <span class="text-primary">Rp. {{ $i->cashback }}</span>
            Total: <span class="text-primary">Rp. {{ $i->total }}</span>
        </div>
    </div>
    <div class="card-footer" style="padding-bottom: 0px; border-top-width:1px solid black">
        <div></div>
        <div class="text-right">
            <button href="javascript:void(0);" class="btn btn-primary" style="{{ StatBTPay($i->payment_status) }}" data-id="{{ $i->id }}" id="modal-bayar">{{ __('Bayar') }}</button>
        </div>
    </div>
</div>
@endforeach