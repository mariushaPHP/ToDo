<!-- Modal -->
<div class="modal fade" id="addModalA<?= $task['id'] ;?>" tabindex="-1" aria-labelledby="addModalLabelA<?= $task['id'] ;?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabelA<?= $task['id'] ;?>">Ar norite atlikti šį veiksmą?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Išjungti</button>
                <a href="/set-complete/id/<?= $task['id'] ;?>">
                    <button type="button" class="btn btn-primary">Atlikta</button>
                </a>

            </div>
        </div>
    </div>
</div>