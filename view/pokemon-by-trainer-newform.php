<!-- Button trigger modal -->
<button type="button" class="addNewTrainer" data-bs-toggle="modal" data-bs-target="#newPokemonTrainerModal">Catch Pokemon
</button>

<!-- Modal -->
<div class="modal" id="newPokemonTrainerModal" tabindex="-1" aria-labelledby="newPokemonTrainerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title" id="newPokemonTrainerModalLabel">Catch Pokemon</p>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="t_id" class="form-label">Trainer ID:</label>
            <input type="text" class="form-control" id="t_id" name="t_id">
          </div>
          <div class="mb-3">
            <label for="p_id" class="form-label">Pokemon ID:</label>
            <input type="text" class="form-control" id="p_id" name="p_id">
          </div>
           <div class="mb-3">
            <label for="poke" class="form-label">Poke Ball:</label>
            <input type="text" class="form-control" id="poke" name="poke">
          </div>
           <input type="hidden" name="actionType" value="Add">
          <button type="submit" class="btn-save">Save</button> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
