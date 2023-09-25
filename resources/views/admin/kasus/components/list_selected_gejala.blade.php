<div class="selected-content">
    @foreach ($post as $value)
        <div class="select-box">
            {{ $value->gejala_detail->name }}
            <div class="action">
                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="#" id="deleteGejala_{{ $value->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"><i class="fas fa-times"></i></button>
                </form>
            </div>
        </div>
    @endforeach
</div>
<script>
    @foreach ($post as $value)
        $("#deleteGejala_{{ $value->id }}").on('submit', function(e) {
            e.preventDefault()

            $.ajax({
                data: $("#deleteGejala_{{ $value->id }}").serialize(),
                url: "{{ route('kasus.destroy', $value->id) }}",
                type: "POST",
                success: () => {
                    toastr.success('Gejala berhasil dihapus')

                    reload_list_gejala()
                    reload_list_selected_gejala()
                },
                error: (error) => {
                    toastr.error('Gagal menghapus gejala, coba lagi!')
                }
            })
        })
    @endforeach
</script>
