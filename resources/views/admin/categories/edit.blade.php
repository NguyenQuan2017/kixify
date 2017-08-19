@extends('admin/layouts/master')
@section('content')
@include('admin/categories/add')
<div id="content" class="ui-content ui-content-aside-overlay">
   @include('admin/layouts/page-header/page-header')
   @include('admin/notification/errors')
   @include('admin/notification/success')
   <div class="ui-content-body">
      <div class="ui-container">
         <div class="row">
            <div class="col-sm-12">
               <section class="panel">
                  <header class="panel-heading panel-border">
                     Convertable Data Table
                     <span class="tools pull-right">
                     <a class="refresh-box fa fa-repeat" href="javascript:;"></a>
                     <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                     <a class="close-box fa fa-times" href="javascript:;"></a>
                     </span>
                  </header>
                 <form class="cmxform form-horizontal " method="post" action="{{route('category-add-post')}}">
                 {{csrf_field()}}
          <input type="hidden" name="cate_id" value="{{$categories['id']}}">
            <div class="modal-body">
               <div class="form-group ">
                  <label for="firstname" class="control-label col-lg-3">Name Parent Category</label>
                  <div class="col-lg-6">
                     <select class="form-control selectpicker " name="parent_cate">
                        <option value="0" >Please choise Category</option>
                        <?php cate_parent($parent,0,"--",$categories['parent_cat']) ?>
                     </select>
                  </div>
               </div>
               <div class="form-group ">
                  <label for="lastname" class="control-label col-lg-3">Name Category</label>
                  <div class="col-lg-6">
                     <input class=" form-control"  value="{{$categories['name_cate']}}" name="name_cate" type="text" />
                  </div>
               </div>
            </div>
            <div class="modal-footer">
             <button type="submit" class="btn btn-info" > Change Update</button>
               <a href="{{route('category-list')}}" class="btn btn-default">Close</a>
            </div>
         </form>
               </section>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection