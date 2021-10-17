<!-- modal popup -->
<div class="modal fade" id="createclass" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Create Class</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        
                            <form action="#" id='addSubject'>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Class name <span class="small">(required)</span></label>
                                    <input type="text" name="className" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Section name </label>
                                    <input type="text" name="sectionName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Subject name </label>
                                    <input type="text" name="subjectName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Room </label>
                                    <input type="email" name="room" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description </label>
                                    <textarea type="email" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                                </div>
                                </form>
                                
                            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="addSubject" onclick="addSubject()">Create Class</button>
        </div>
      </div>
    </div>
  </div>
	<!-- end modal popup -->