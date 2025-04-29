<form action="{{ route('job.apply.store', $jobVacancy) }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="cover_letter">Cover Letter (PDF, DOCX)</label>
    <input type="file" name="cover_letter" id="cover_letter" placeholder="Cover Letter" accept=".pdf,.docx">
    <br>

    <label for="cv_link">CV Link (URL)</label>
    <input type="url" name="cv_link" id="cv_link" placeholder="Enter your CV link" required>
    <br>

    <button type="submit">Apply Now</button>
</form>

{{-- Display job details --}}
