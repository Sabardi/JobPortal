@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Job Vacancies and Applications</h1>

    <!-- Displaying Applications for Job Vacancies -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Nama</th>
                    <th>Pekerjaan Apply</th>
                    <th>Cover Letter</th>
                    <th>Link CV</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($applications as $application)
                    <tr>
                        <td>{{ $application->user->name }}</td>
                        <td>{{ $application->jobVacancy->title }}</td>
                        <td><a href="{{ Storage::url($application->cover_letter) }}" target="_blank" class="btn btn-primary btn-sm">Download</a></td>
                        <td><a href="{{ $application->cv_link }}" target="_blank" class="btn btn-secondary btn-sm">View CV</a></td>
                        <td>
                            <span class="badge 
                                @if($application->status == 'pending') badge-warning 
                                @elseif($application->status == 'accepted') badge-success 
                                @else badge-danger 
                                @endif">
                                {{ ucfirst($application->status) }}
                            </span>
                        </td>
                        <td>
                            @if($application->status == 'pending')
                                <form action="{{ route('job.apply.confirm', $application) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('put')
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="status-accepted" value="accepted">
                                        <label class="form-check-label" for="status-accepted">Accepted</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="status-rejected" value="rejected">
                                        <label class="form-check-label" for="status-rejected">Rejected</label>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-sm">Confirm</button>
                                </form>
                            @else
                                <button class="btn btn-info btn-sm" disabled>{{ ucfirst($application->status) }}</button>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No applications received yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection


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
