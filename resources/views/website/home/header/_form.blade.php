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
        <label  class="col-2 col-form-label">Fisr Paragraph</label>
        <div  class="col-10">
         <input id="kt_maxlength_1" name="paragraph1" class="form-control" type="text" maxlength="25" value="{{$header->paragraph1}}" id="example-text-input"/>
        </div>
       </div>
       <div class="form-group row">
        <label  class="col-2 col-form-label">Title</label>
        <div  class="col-10">
         <input id="kt_maxlength_1" name="title" class="form-control" type="text" maxlength="25" value="{{$header->title}}" id="example-text-input"/>
        </div>
       </div>
       
       <div class="form-group row">
           <label for="example-search-input" class="col-2 col-form-label">Second Paragraph</label>
           <div class="col-10" style="position: relative;">
            <textarea name="paragraph2" class="form-control" id="kt_maxlength_5_modal" maxlength="50" placeholder="" rows="6">{{$header->paragraph2}}</textarea>
        </div>
    </div>

    <div class="form-group row">
        <label  class="col-2 col-form-label">Silder</label>
        <div  class="col-10">
            <input id="kt_maxlength_1" name="slider" class="form-control" type="text" maxlength="25" value="{{$header->slider}}" id="example-text-input"/>
        </div>
    </div>

    <div class="form-group row">
        <label  class="col-2 col-form-label">External Video</label>
        <div  class="col-10">
            <input id="kt_maxlength_1" name="video_url1" class="form-control" type="file" maxlength="25" value="{{$header->video1}}" id="example-file-input"/>
        </div>
    </div>

    <div class="form-group row">
        <label  class="col-2 col-form-label">Poster For Enternal Video </label>
        <div class="image-input" id="kt_image_2">
            <div class="image-input-wrapper" style="background-image: url({{asset('media/users/blank.png')}})"></div>
           
            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
             <i class="fa fa-pen icon-sm text-muted"></i>
             <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/>
             <input type="hidden" name="profile_avatar_remove"/>
            </label>
        </div>
            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
             <i class="ki ki-bold-close icon-xs text-muted"></i>
            </span>
           </div>
    <div class="form-group row">
        <label  class="col-2 col-form-label">Inernal Video</label>
        <div  class="col-10">
            <input id="kt_maxlength_1" name="video_url2" class="form-control" type="file" maxlength="25" value="{{$header->video2}}" id="example-file-input"/>
        </div>
    </div>
       
    
   <div class="card-footer">
    <div class="row">
     <div class="col-2">
     </div>
     <div class="col-10">
      <button type="submit" class="btn btn-success mr-2">Submit</button>
      <button type="reset" class="btn btn-secondary">Cancel</button>
     </div>
    </div>
   </div>