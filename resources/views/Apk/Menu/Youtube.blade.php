@php
    $yt = [
        [
            'id' => 'YT-1',
            'label' => '1 Bulan',
            'price' => 5000,
        ],
        [
            'id' => 'YT-3',
            'label' => '3 Bulan',
            'price' => 10000,
        ],
        [
            'id' => 'YT-6',
            'label' => '6 Bulan',
            'price' => 15000,
        ],
    ];
@endphp
<div class="form-group mb-2">
    <label for="durasi">
        Pilih Durasi
    </label>
    <select name="durasi" id="durasi" class="form-control" required>
        <option value="" data-price="0">-- Pilih Durasi --</option>
        @forelse ($yt as $item)
            <option value="{{ $item['id'] }}" data-price="{{ $item['price'] }}">{{ $item['label'] }}</option>
        @empty
            <option value="" disabled>Produk Belum Tersedia</option>
        @endforelse
    </select>
</div>

@section('script')
    <script>
        $('#btn-beli').attr('disabled', 'disabled');
        $('#btn-beli').attr('title', 'Silahkan pilih durasi');

        const rupiah = (number) => {
            return new Intl.NumberFormat("id-ID", {
                style: "currency",
                currency: "IDR",
                maximumFractionDigits: 0,
                minimumFractionDigits: 0,
            }).format(number);
        }

        $('#durasi').on('change', function() {
            if ($(this).children('option:selected').data('price') !== 0) {
                $('#label-harga').empty();
                $('#label-harga').html(rupiah($(this).children('option:selected').data('price')));
                $(this).children('option:first').prop('disabled', true);
                $('#btn-beli').removeAttr('disabled');
                $('#btn-beli').removeAttr('title');
            } else {
                $('#label-harga').html("Pilih Durasi");
                $('#btn-beli').attr('disabled', 'disabled');
                $('#btn-beli').attr('title', 'Silahkan pilih durasi');
            }

        });
    </script>
@endsection
