@if(Session::has('warning'))
	
	<div class="alert alert-warning fade in">
   <button data-dismiss="alert" class="close"></button>
   <i class="fa-fw fa fa-times"></i>
   <strong>Warning!</strong>
   <span ng-bind-html="Message">{{Session::get('warning')}}</span>
</div>

@endif