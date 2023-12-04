<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newTrainerModal">Add New Trainer
</button>

<!-- Modal -->
<div class="modal fade" id="newTrainerModal" tabindex="-1" aria-labelledby="newTrainerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newTrainerModalLabel">New Trainer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="alName" class="form-label">Trainer Name</label>
            <input type="text" class="form-control" id="t_name" name="t_name">
          </div>
          <div class="mb-3">
            <label for="tracks" class="form-label">Hometown</label>
            <input type="text" class="form-control" id="home" name="home">
          </div>
           <div class="mb-3">
            <label for="tracks" class="form-label">Profile Pic</label>
            <input type="text" class="form-control" id="t_url" name="t_url">
          </div>
           <input type="hidden" name="actionType" value="Add">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
