<div class="card-body">
    <div class="form-group mb-8">
        <div class="alert alert-custom alert-default" role="alert">
            <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
            <div class="alert-text">
                Here are examples of <code>.form-control</code> applied to each textual HTML5 input type:
            </div>
        </div>
    </div>


    <div class="form-group row">
        <label class="col-2 col-form-label">Social Name</label>
        <div class="col-10">
            <input id="kt_maxlength_1" name="name" class="form-control" type="text" maxlength="25"
                value="{{$social->name}}" id="example-text-input" />
        </div>
    </div>

    <div class="form-group row">
        <label class="col-2 col-form-label">Social Link</label>
        <div class="col-10">
            <input id="kt_maxlength_1" name="link" class="form-control" type="text" maxlength="25"
                value="{{$social->link}}" id="example-text-input" />
        </div>
    </div>


</div>
<div class="card-footer">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-10">
            <button type="submit" class="btn btn-success mr-2">{{$button}}</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
    </div>
</div>