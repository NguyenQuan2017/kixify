@extends('admin/layouts/master')
@section('content')
<div id="content" class="ui-content">
@include("admin/layouts/page-header/page-header")
@include('admin/notification/errors')
<div class="ui-content-body">
   <div class="ui-container">
      <div class="row">
         <div class="col-md-12">
            <div class="panel">
               <header class="panel-heading">
                  Default Form Validation
                  <span class="tools pull-right">
                  <a class="refresh-box fa fa-repeat" href="javascript:;"></a>
                  <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                  <a class="close-box fa fa-times" href="javascript:;"></a>
                  </span>
               </header>
               <div class="panel-body">
                  <form class="cmxform form-horizontal " method="post" action="{{route('post-product-add')}}" enctype= "multipart/form-data">
                     {{csrf_field()}}
                     <div class="col-md-6">
                        <div class="form-group ">
                           <label for="lastname" class="control-label col-lg-3">Name Product</label>
                           <div class="col-lg-9">
                              <input class=" form-control"  name="name_product" type="text" />
                           </div>
                        </div>
                        <div class="form-group ">
                           <label for="lastname" class="control-label col-lg-3">Title</label>
                           <div class="col-lg-9">
                              <input class=" form-control"  name="title" type="text" />
                           </div>
                        </div>
                        <div class="form-group ">
                           <label for="lastname" class="control-label col-lg-3">Price</label>
                           <div class="col-lg-9">
                              <input class=" form-control"  name="price" type="text" />
                           </div>
                        </div>
                        <div class="form-group ">
                           <label for="lastname" class="control-label col-lg-3">Release date</label>
                           <div class="col-lg-9">
                              <input class=" form-control js-datepicker"  name="release_date" type="text" />
                           </div>
                        </div>
                        <div class="form-group ">
                           <label for="lastname" class="control-label col-lg-3">Release Style</label>
                           <div class="col-lg-9">
                              <input class=" form-control"  name="release_style" type="text" />
                           </div>
                        </div>
                        <div class="form-group ">
                           <label for="lastname" class="control-label col-lg-3">Style Code</label>
                           <div class="col-lg-9">
                              <input class=" form-control"  name="style_code" type="text" />
                           </div>
                        </div>
                        <div class="form-group ">
                           <label for="lastname" class="control-label col-lg-3">Description</label>
                           <div class="col-lg-9">
                              <input class=" form-control"  name="description" type="text" />
                           </div>
                        </div>
                        <div class="form-group ">
                           <label for="lastname" class="control-label col-lg-3">Content</label>
                           <div class="col-lg-9">
                              <input class=" form-control"  name="content" type="text" />
                           </div>
                        </div>
                        <div class="form-group ">
                           <label for="firstname" class="control-label col-lg-3">Name Parent Category</label>
                           <div class="col-lg-9">
                              <select class="form-control selectpicker " name="cate[]" multiple="">
                                 @foreach ($cates as $item)
                                 <option value="{{$item['id']}}">{{$item['name_cate']}}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                        <div class="form-group ">
                           <label for="firstname" class="control-label col-lg-3">Size</label>
                           <div class="col-lg-9">
                              <select class="form-control selectpicker " name="size[]" multiple="">
                                 @foreach($sizes as $size)
                                 <option value="{{$size['id']}}" >{{$size['size']}}</option>
                                 @endforeach   
                              </select>
                           </div>
                        </div>
                        <div class="form-group ">
                           <label for="lastname" class="control-label col-lg-3">Image</label>
                           <div class="col-lg-9">
                              <input class=" form-control"  name="image" type="file" />
                           </div>
                        </div>
                     </div>
                     <div class="col-md-1"></div>
                     <div class="col-md-6">
                     @for($i=1;$i<=6;$i++)
                        <div class="form-group ">
                           <label for="lastname" class="control-label col-lg-3">Image Detail</label>
                           <div class="col-lg-9">
                              <input class=" form-control"  name="productimage[]" type="file" />
                           </div>
                        </div>
                     @endfor
                     </div>
                     <div class="col-md-12 col-md-offset-4">
                        <button type="submit" class="btn btn-info" > ADD PRODUCT</button>
                       
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection

 