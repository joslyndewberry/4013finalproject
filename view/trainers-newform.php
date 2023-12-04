<!-- Button trigger modal -->
<button type="button" class="addNewTrainer" data-bs-toggle="modal" data-bs-target="#newTrainerModal">Add New Trainer
</button>

<!-- Modal -->
<div class="modal" id="newTrainerModal" tabindex="-1" aria-labelledby="newTrainerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title fs-5" id="newTrainerModalLabel">New Trainer</p>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="t_name" class="form-label">Trainer Name:</label>
            <input type="text" class="form-control" id="t_name" name="t_name">
          </div>
          <div class="mb-3">
            <label for="home" class="form-label">Hometown:</label>
            <input type="text" class="form-control" id="home" name="home">
          </div>
           <div class="mb-3">
            <label for="t_url" class="form-label">Profile Pic:</label>
            <input type="text" class="form-control" id="t_url" name="t_url">
          </div>
           <input type="hidden" name="actionType" value="Add">
          <button type="submit" class="btn btn-primary">Save</button> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
