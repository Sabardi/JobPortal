<div class="container">
    <h1>Job Vacancies and Applications</h1>

    <!-- Displaying Job Vacancies -->


    <!-- Displaying Applications for Job Vacancies -->
    <table>
        <thead>
            <th>Nama</th>
            <th>Pekerjaan aply</th>
            <th>cover latter</th>
            <th>link cv</th>
            <th>status</th>
        </thead>
        <tbody>
            <tr>
                @forelse ($applications as $application)
                    <td>{{ $application->jobVacancy->title }}</td>
                    <td>{{ $application->user->name }}</td>
                    <td><a href="{{ Storage::url($application->cover_letter) }}" target="_blank">download</a></td>
                    <td><a href="{{ $application->cv_link }}"></a></td>
                    <td>{{ $application->status }}</td>
                    <td>

                        @if($application->status == 'pending')
                        <form action="{{ route('job.apply.confirm', $application) }}" method="post">
                            @csrf
                            @method('put')
                            <label for="status-accepted">accepted</label>
                            <input type="radio" name="status" id="status-accepted" value="accepted">

                            <label for="status-rejected"></label>
                            <input type="radio" name="status" id="status-rejected" value="rejected">

                            <button type="submit">konfirmasi</button>
                        </form>
                        @else
                        <button>{{$application->status}}</button>
                        @endif
                        {{-- <a href="{{ route('job.apply.confirm', $application) }}">Konfirmasi</a> --}}
                    </td>
                @empty
                    <p>No applications received yet.</p>
                @endforelse
            </tr>
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>

{{--
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
<canvas id="pdf-canvas"></canvas>

<script>
    const url = "{{ Storage::url($application->cover_letter ) }}"; // PDF file URL

    // Fetch and render the PDF
    pdfjsLib.getDocument(url).promise.then(function (pdf) {
        pdf.getPage(1).then(function (page) {
            const canvas = document.getElementById('pdf-canvas');
            const context = canvas.getContext('2d');
            const viewport = page.getViewport({ scale: 1 });
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            // Render the page
            page.render({
                canvasContext: context,
                viewport: viewport
            });
        });
    });
</script> --}}
