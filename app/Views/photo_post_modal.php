<!-- photo_post -->

<div class="modal fade" id="photo_post" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark text-white">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="photo_postLabel">Post</h1>
        <button type="button" class="bg-light btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <!-- form starts here  -->
        <form id="form" action="postImage" method="POST" enctype="multipart/form-data">

          <div id="postPreview" class="text-center mb-4"></div>

          <div class="form-group text-center mb-3">
            <label for="postImg" class="form-label btn btn-info" style="margin: auto">choose your post</label>
            <input type="file" class="form-control-file" id="postImg" name="postImg" style="display: none;" onchange="getpostImagePreview(event)">
          </div>


          <!-- <div class="mb-3 form-floating">
            <label for="postCommentBox" class="form-label ">Write a caption...</label>
            <textarea class="form-control" id="postCommentBox" rows="3" placeholder="caption"></textarea>
          </div> -->

          <div class="my-3 form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" name="postCommentBox" id="postCommentBox"
              rows="3"></textarea>
            <label for="postCommentBox" style="color: black">Write a caption...</label>
          </div>



          <!-- form ends here  -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Post</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- photo_post -->