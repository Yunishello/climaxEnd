<!-- modal Calls -->
        <!-- Edit Modal -->
        <div class="modal fade" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLiveLabel">Edit | Computer</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                  <label for="">Title:</label>
                  <input type="text" class="form-control" value=<?php echo $title ?> name="" id="">
                  <br>
                  <label for="">Description:</label>
                  <textarea name="" id="" class="form-control" cols="30" rows="10"><?php echo $_SESSION['textContent'] ?></textarea>
                  <br>
                  <label for="">Introduction:</label>
                  <textarea name="" id="" class="form-control" cols="30" rows="10"><?php echo $_SESSION['intro'] ?></textarea>
                </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div>
        </div>
      </div>

      <!-- View Modal -->
      <div class="modal fade" id="view" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLiveLabel">Viewing | Computer</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                  <div>
                    <b>Title:</b>
                    <br>
                    <?php echo $_SESSION['title'] ?>
                  </div>
                  <br>
                  <div>
                    <b>Description:</b>
                    <br>
                    <p><?php echo $_SESSION['textContent'] ?></p>
                  </div>
                  <br>
                  <div>
                    <b>Introduction:</b>
                    <br> 
                    <p><?php echo $_SESSION['intro'] ?></p>
                  </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn btn-secondary">Close</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Delete Modal -->

      <div class="modal fade" id="delete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLiveLabel">Delete? You sure about this?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Delete  <b for=""><?php echo $title ?></b>
            </div>
            <div class="modal-footer">
            <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn btn-secondary">Cancel</button>
              <form action="api_calls/delete.php" method="post">
                <input type="text" name="id" id="" style="display:none" value=<?php echo $id ?>>
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </div>
          </div>
        </div>
      </div>