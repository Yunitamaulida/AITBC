@foreach ($gejalas as $gejala)
    <div class="boxes">
        <div>
            <form action="#" id="tambahGejala_{{ __($gejala->kode) }}" method="post">
                @csrf
                <input type="hidden" name="penyakit" value="{{ $penyakits->kode }}">
                <input type="hidden" name="gejala" value="{{ $gejala->kode }}">
                <button class="btn btn-plus" type="submit"><i class="fas fa-plus"></i></button>
            </form>
        </div>
        <span>{{ $gejala->name }}</span>
    </div>
@endforeach
<script>
    @foreach ($gejalas as $gejala)
        $("#tambahGejala_{{ $gejala->kode }}").on('submit', function(e) {
            e.preventDefault()

            $.ajax({
                url: "{{ route('kasus.store') }}",
                type: "POST",
                data: $("#tambahGejala_{{ $gejala->kode }}").serialize(),
                success: function(data) {
                    toastr.success('Berhasil menambahkan gejala!')

                    reload_list_gejala()
                    reload_list_selected_gejala()
                },
                error: function(error) {
                    toastr.error('Gagal menambahkan gejala, coba lagi!')
                }
            })
        })
    @endforeach
</script>
