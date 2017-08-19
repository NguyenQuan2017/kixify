<div class="modal fade" id="show_add_category" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
         </div>
         <form class="cmxform form-horizontal " method="post" action="{{route('category-add-post')}}">
          {{csrf_field()}}
            <div class="modal-body">
               <div class="form-group ">
                  <label for="firstname" class="control-label col-lg-3">Name Parent Category</label>
                  <div class="col-lg-6">
                     <select class="form-control selectpicker " name="parent_cate">
                        <option value="0" >Please choise Category</option>
                        <?php cate_parent($parent) ?>
                     </select>
                  </div>
               </div>
               <div class="form-group ">
                  <label for="lastname" class="control-label col-lg-3">Name Category</label>
                  <div class="col-lg-6">
                     <input class=" form-control"  name="name_cate" type="text" />
                  </div>
               </div>
            </div>
            <div class="modal-footer">
             <button type="submit" class="btn btn-info" > Change Update</button>
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
         </form>
      </div>
   </div>
</div>
@section('script')
<script>
   $(document).ready(function(){
       $("#add_category").click(function(){
           $("#show_add_category").modal();
       });
   });
</script>
@endsection