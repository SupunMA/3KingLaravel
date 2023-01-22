<!-- Edit Plan -->
<div class="modal fade" id="branchEditModal-{{$bd->planID}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Update <b>{{$bd->planName}}</b> Plan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{route('admin.updatePlan')}}" method="post">
                @csrf
                
                <div class="modal-body">
                   
                    <input type="hidden" name="planID" value="{{$bd->planID}}">
                    
                    <div class="form-group">
                        <label>Name of the Plan</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-building"></i></span>
                            </div>
                            <input type="text" placeholder="Plan Name" name="planName" class="form-control"
                                value="{{$bd->planName}}">
                        </div>
                    </div>


                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>Plan Price</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                            </div>
                            <input type="text" name="planPrice" class="form-control"
                                data-inputmask='"mask": "(999) 999 9999"' data-mask placeholder="Tel Number"
                                value="{{$bd->PlanPrice}}">
                        </div>
                        <!-- /.input group -->
                    </div>


                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save changes</button>
                </div>
            </form>

        </div>
    </div>
</div>
