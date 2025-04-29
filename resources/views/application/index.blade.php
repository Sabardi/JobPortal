<div class="container">
    <h1>Job Vacancies and Applications</h1>

    <!-- Displaying Job Vacancies -->


    <!-- Displaying Applications for Job Vacancies -->
    <div class="mb-4">
        <h3>Applications</h3>
        @forelse ($applications as $application)
            <div class="application">
                <p><strong>Applicant:</strong> {{ $application->user->name }}</p>
                <p><strong>Job Vacancy:</strong> {{ $application->jobVacancy->title }}</p>
                <p>
                    <strong>Cover Letter:</strong>
                    <a href="{{ route('embed') }}">download</a>
                    {{-- @if ($application->cover_letter)
                        <a href="{{ Storage::url($application->cover_letter) }}" target="_blank">download</a>
                    @else
                        No cover letter uploaded
                    @endif
                </p> --}}
                <p><strong>Status:</strong> {{ ucfirst($application->status) }}</p>
            </div>
        @empty
            <p>No applications received yet.</p>
        @endforelse
    </div>
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
