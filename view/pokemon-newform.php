<!-- Button trigger modal -->
<button type="button" class="addNewTrainer" data-bs-toggle="modal" data-bs-target="#newPokemonrModal">Add New Pokemon
</button>

<!-- Modal -->
<div class="modal" id="newTrainerModal" tabindex="-1" aria-labelledby="newPokemonModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title" id="newTrainerModalLabel">New Pokemon</p>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="t_id" class="form-label">Type ID:</label>
            <input type="text" class="form-control" id="t_id" name="t_id">
          </div>
          <div class="mb-3">
            <label for="p_name" class="form-label">Pokemon Name:</label>
            <input type="text" class="form-control" id="p_name" name="p_name">
          </div>
           <div class="mb-3">
            <label for="p_name" class="form-label">Pokemon Name:</label>
            <input type="text" class="form-control" id="p_name" name="p_name">
          </div>
             <div class="mb-3">
            <label for="p_url" class="form-label">Pokemon Pic:</label>
            <input type="text" class="form-control" id="p_url" name="p_url">
          </div>
             <div class="mb-3">
            <label for="evol" class="form-label">Evolution:</label>
            <input type="text" class="form-control" id="evol" name="evol">
          </div>
             <div class="mb-3">
            <label for="hp" class="form-label">Profile Pic:</label>
            <input type="text" class="form-control" id="hp" name="hp">
          </div>
             <div class="mb-3">
            <label for="atk" class="form-label">Profile Pic:</label>
            <input type="text" class="form-control" id="atk" name="atk">
          </div>
             <div class="mb-3">
            <label for="def" class="form-label">Profile Pic:</label>
            <input type="text" class="form-control" id="def" name="def">
          </div>
             <div class="mb-3">
            <label for="sp_atk" class="form-label">Profile Pic:</label>
            <input type="text" class="form-control" id="sp_atk" name="sp_atk">
          </div>
             <div class="mb-3">
            <label for="sp_def" class="form-label">Profile Pic:</label>
            <input type="text" class="form-control" id="sp_def" name="sp_def">
          </div>
             <div class="spd">
            <label for="t_url" class="form-label">Profile Pic:</label>
            <input type="text" class="form-control" id="spd" name="spd">
          </div>
          </div>
             <div class="total">
            <label for="t_url" class="form-label">Profile Pic:</label>
            <input type="text" class="form-control" id="total" name="total">
          </div>
           <input type="hidden" name="actionType" value="Add">
          <button type="submit" class="btn-save">Save</button> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
