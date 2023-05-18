@php
    $yt = [
        [
            'id' => 'MAN-1',
            'label' => 'QRIS',
            'type' => 'manual',
            'fee' => 0,
        ],
        [
            'id' => 'MAN-2',
            'label' => 'BNI',
            'type' => 'manual',
            'fee' => 0,
        ],
        [
            'id' => 'MAN-3',
            'label' => 'Dana',
            'type' => 'manual',
            'fee' => 0,
        ],
        [
            'id' => 'MAN-4',
            'label' => 'GoPay',
            'type' => 'manual',
            'fee' => 0,
        ],
        [
            'id' => 'MAN-5',
            'label' => 'ShopeePay',
            'type' => 'manual',
            'fee' => 0,
        ],
    ];
@endphp
<div class="form-group mb-2">
    <label for="payment">
        Pilih Pembayaran
    </label>
    <select name="payment" id="payment" class="form-control" required>
        @forelse ($yt as $item)
            <option value="{{ $item['id'] }}" data-fee="{{ $item['fee'] }}">{{ $item['label'] }} -
                {{ Str::ucfirst($item['type']) }}</option>
        @empty
            <option value="" disabled>Pembayaran Belum Tersedia</option>
        @endforelse
    </select>
    <p class="mb-0" style="color:#d3d3d3 !important;">
        Manual (dicek dan dikirim manual), Otomatis (dicek dan dikirim otomatis)
    </p>
</div>

@section('script')
@endsection
