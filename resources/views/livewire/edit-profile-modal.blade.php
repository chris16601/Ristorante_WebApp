<div>
    <div class="modal fade" id="profile_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modifica Profilo</h5>
              <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li
                        class="list-group-item border-0 ps-0 text-dark font-weight-semibold pt-0 pb-1 text-sm">
                        <span class="text-secondary">Nome:</span> &nbsp;
                        <input class="form-control" type="text" id="nome" name="nome" wire:model="nome">
                    </li>
                    <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm">
                        <span class="text-secondary">Cognome:</span> &nbsp;
                        <input class="form-control" type="text" id="cognome" name="cognome" wire:model="cognome">
                    </li>
                    <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm">
                        <span class="text-secondary">Email:</span> &nbsp;
                        <input class="form-control" type="email" id="email" name="email" wire:model="email">
                    </li>
                    <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm">
                        <span class="text-secondary">Telefono:</span> &nbsp;
                        <input class="form-control" type="text" id="tel" name="tel" wire:model="tel">
                    </li>
                    <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm">
                        <span class="text-secondary">Ruolo:</span> &nbsp;
                        <input class="form-control" type="text" id="role" name="role" wire:model="ruolo">
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-white" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-dark" wire:click="save()">Save changes</button>
            </div>
          </div>
        </div>
    </div>
</div>
