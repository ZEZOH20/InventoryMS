
<div class="row d-flex justify-content-center col-lg-12">
  <div class="col-md-8 ">
    <div class="card shadow-0 border" style="background-color: #f0f2f5;">
      <div class="card-body p-4">
        <form class="form-outline mb-4" wire:submit.prevent='addComment()'>
         @error('newComment') <span class="text-danger">{{ $message }}</span> @enderror
          <input
            type="text"
            id="addANote"
            class="form-control"
            placeholder="Type comment..."
            wire:model.lazy="newComment"
          />
          <button class='btn btn-primary' type='submit'>add Comment</button>
          <label class="form-label" for="addANote">+ Add a note</label>
        </form>


  @foreach ( $comments as $comment )
        <div class="card mb-4">
          <div class="card-body">
            
            <p>{{$comment->comment}}</p>

            <div class="d-flex justify-content-between">
              <div class="d-flex flex-row align-items-center">
                <img
                  src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp"
                  alt="avatar"
                  width="25"
                  height="25"
                />
                <p class="small mb-0 ms-2">Martha</p>
              </div>
              <div class="d-flex flex-row align-items-center">
                <p class="small text-muted mb-0">Upvote?</p>
                <i
                  class="far fa-thumbs-up mx-2 fa-xs text-black"
                  style="margin-top: -0.16rem;"
                ></i>
                <p class="small text-muted mb-0">3</p>
              </div>
            </div>
          </div>
        </div>
@endforeach
        

          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>