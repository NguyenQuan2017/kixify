@extends('admin/layouts/master')
@section('content')

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
                  <a href="{{route('product-add')}}" id="add_product" class="btn btn-default"><i class="fa fa-plus"></i>&nbsp;ADD</a>
                     <table class="table convert-data-table table-bordered table-hover"  >
                        <thead>
                           <tr>
                              <th>
                                 STT
                              </th>
                              <th>
                                 NAME PRODUCT
                              </th>
                              <th>
                                 PRICE
                              </th>
                               <th>
                                 RELEASE DATE
                              </th>
                               <th>
                                 RELEASE STYLE
                              </th>
                               <th>
                                 STYLE CODE
                              </th>
                               <th>
                                 DESCRIPTION
                              </th>
                               <th>
                                 CONTENT
                              </th>
                              <th>IMAGE</th>
                              <th style="width:150px">
                                 ACTION
                              </th>
                           
                           </tr>
                        </thead>
                        <tbody>
                        <?php $stt=1 ?>
                        @foreach($products as $item)
                           <tr>
                              <td>{{$stt++}}</td>
                              <td>{{$item['name_product']}}</td>
                              <td>{{$item['price']}}</td>
                              <td>{{$item['release_date']}}</td>
                              <td>{{$item['release_style']}}</td>
                              <td>{{$item['style_code']}}</td>
                              <td>{{$item['description']}}</td>
                              <td>{{$item['content']}}</td>
                              <td> <img src="{{url('public/images/products/'.$item['image'])}}" alt="" style="width: 100px; height: 100px"  > </td>
                             
                              <td>
                              <a href="{{route('category-edit',$item['id'])}}" class="btn btn-primary" style="margin:5px auto" ><i class="fa fa-pencil"></i>&nbsp;EDIT</a>
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