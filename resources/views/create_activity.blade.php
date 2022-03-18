

<form action="/create-activity" method="post">
    @csrf
    <div class="mb-3">
        <label for="activity_name" class="form-label">Activity Name</label>
        <input type="text" class="form-control" id="activity_name" name="activity_name" required >
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="status" name="status">
        <label class="form-check-label" for="status">Activity Status</label>
    </div>
    <button class="btn btn-danger" type="submit">Create</button>

</form>
