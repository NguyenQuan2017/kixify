@extends('admin/layouts/master')
@section('content')
@include('admin/categories/add')
<div id="content" class="ui-content ui-content-aside-overlay">
   @include('admin/layouts/page-header/page-header')
   @include('admin/notification/errors')
   @include('admin/notification/success')
   @include('admin/notification/warning')
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
                  <div class="panel-body table-responsive">
                  <button href="" id="add_category" class="btn btn-default"><i class="fa fa-plus"></i>&nbsp;ADD</button>
                     <table class="table convert-data-table table-bordered table-hover">
                        <thead>
                           <tr>
                              <th>
                                 STT
                              </th>
                              <th>
                                 NAME CATEGORY
                              </th>
                              <th>
                                 PARENT CATEGORY
                              </th>
                              <th style="width:200px">
                                 ACTION
                              </th>
                           
                           </tr>
                        </thead>
                        <tbody>
                        <?php $stt=1 ?>
                        @foreach($categories as $item)
                           <tr>
                              <td>{{$stt++}}</td>
                              <td>{{$item['name_cate']}}</td>
                              <td>
                              @if($item['parent_cat']==0)
                              {{'None'}}
                              @else
                              <?php $parent_cate=DB::table('categories')->where('id',$item['parent_cat'])->first();
                                    echo $parent_cate->name_cate;
                               ?>
                               @endif
                              </td>
                              <td>
                              <a href="{{route('category-edit',$item['id'])}}" class="btn btn-primary"><i class="fa fa-pencil"></i>&nbsp;EDIT</a>
                              <a href="{{route('delete-category',$item['id'])}}" class="btn btn-danger confirm"><i class="fa fa-trash"></i> DELETE</a>
                              </td>
                            
                           </tr>
                          @endforeach
                        </tbody>
                     </table>
                  </div>
               </section>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection