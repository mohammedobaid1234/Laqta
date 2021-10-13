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
     <label  class="col-2 col-form-label">Rule name</label>
     <div class="col-10">
      <input name="name" class="form-control" type="text" value="{{$rule->name ?? ''}}" id="example-text-input"/>
     </div>
    </div>

    @foreach (config('abilities') as $key=>$value)
    <div class="form-group row">
      <label class="col-3 col-form-label">{{$value}}</label>
      <div class="col-lg-9 col-md-9 col-sm-12">
        <input data-switch="true" type="checkbox" name="abilities[]" value="{{$key}}" @if(in_array($key , $rule->abilities ?? [])) checked="checked" @endif />
      </div>
    </div>
    
   @endforeach
      
    
    <div class="form-group row">
        <label class="col-3 col-form-label">State</label>
        <div class="col-9 col-form-label">
            <div class="radio-inline">
                <label class="radio radio-danger">
                    <input type="radio" value="Active" name="status" checked="checked"/>
                    <span></span>
                    Active
                </label>
                <label class="radio radio-danger">
                    <input type="radio" value="Draft" name="status"  />
                    <span></span>
                    Draft
                </label>
                
            </div>
           
        </div>
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


