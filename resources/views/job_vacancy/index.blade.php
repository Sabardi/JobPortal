@forelse ($jobVacancies as $jobVacancy)
    <p>{{ $jobVacancy->title }}</p>
    <a href="{{ route('job.edit', $jobVacancy->id) }}">edit</a>
    <form action="{{ route('job.destroy', $jobVacancy->id) }}" method="post">
        @csrf
        @method('delete')
        
        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus lowongan ini?')">Hapus</button>
    </form>
@empty
    <p>Tidak ada lowongan ditemukan</p>
    silahkan <a href="{{ route('job.create') }}">buat lowongan baru</a>
@endforelse
