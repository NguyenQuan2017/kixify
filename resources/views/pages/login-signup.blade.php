@extends('pages/layouts/master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 remove-padding" id="content-container-wrapper">
   <a id="main-content"></a>
   <h1 class="title " id="page-title">Login / Sign Up</h1>
   <div id="content-center-wrapper">
      <div class="signup-pane social-connect col-xs-12 col-sm-12 col-md-12">
         <div class="panel panel-default">
            <div class="panel-heading">
               <h4 class="title"><i class="fa fa-rocket"></i>&nbsp;EXPRESS LOGIN / SIGN UP</h4>
            </div>
            <div class="panel-body">
               <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="pull-right clear-xs-pull">
                     <center>
                        <a id="fb-login-btn" class="btn btn-info btn-xs-block  btn-lg">
                           <i class="fa fa-facebook-square fa-large"></i> Sign in with Facebook                            
                           <fb:login-button id="fb-original-btn" size="large" onlogin="facebook_onlogin_ready();" class="row btn-block"  background="dark" v="2"></fb:login-button>
                        </a>
                     </center>
                     <div class="hidden">
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="pull-left clear-xs-pull">
                     <center>
                        <a href="/twitter/redirect" class="tw-sign-in-button btn btn-info btn-xs-block btn-lg"><i class="fa fa-twitter-square"></i> Sign in with Twitter</a>                    
                     </center>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="signup-pane login col-xs-12 col-sm-6 col-md-6">
         <form action="/user/register"  accept-charset="UTF-8" method="post" id="user-login" class="form-horizontal ">
            <div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="title"><i class="fa fa-sign-in"></i>&nbsp;LOGIN</h4>
                  </div>
                  <div class="panel-body">
                     <div class="form-group form-item form-item-textfield form-item-inline" id="edit-name-wrapper">
                        <label class="col-xs-12 col-sm-4 col-md-4 control-label" for="edit-name"><span class="form-required" title="This field is required.">*</span> Username or e-mail address</label>
                        <div class="col-xs-12 col-sm-8 col-md-8"> <input type="text" maxlength="60" name="name" id="edit-name" size="60" value="" class="form-control form-text required" /></div>
                     </div>
                     <div class="form-group form-item form-item-password form-item-inline" id="edit-pass-wrapper">
                        <label class="col-xs-12 col-sm-4 col-md-4 control-label" for="edit-pass"><span class="form-required" title="This field is required.">*</span> Password</label>
                        <div class="col-xs-12 col-sm-8 col-md-8"> <input type="password" name="pass" id="edit-pass"  maxlength="128"  size="60"  class="form-control form-text required" /></div>
                     </div>
                     <input type="hidden" name="form_build_id" id="form-fhk4fO2Ej91TILIOUyVpaVhXse20f5u1h1QIRjf_ec4" value="form-fhk4fO2Ej91TILIOUyVpaVhXse20f5u1h1QIRjf_ec4"  />
                     <input type="hidden" name="form_id" id="edit-user-login" value="user_login"  />
                     <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-4 col-md-offset-4 clear-padding">
                           <div  class="forgotten-pass pull-left"><a href="/user/password">Forgot your password?</a></div>
                           <div class="pull-right"><input type="submit" name="op" id="edit-submit" value="Log in"  class="btn btn-default form-submit btn-kixify"/></div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
         </form>
      </div>
      <div class="signup-pane register col-xs-12 col-sm-6 col-md-6">
         <form action="/user/register"  accept-charset="UTF-8" method="post" id="user-register" class="form-horizontal ">
            <div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="title"><i class="fa fa-pencil"></i>&nbsp;SIGNUP</h4>
                  </div>
                  <div class="panel-body">
                     <div class="form-group form-item form-item-textfield form-item-inline" id="edit-name-1-wrapper">
                        <label class="col-xs-12 col-sm-4 col-md-4 control-label" for="edit-name-1"><span class="form-required" title="This field is required.">*</span> Username</label>
                        <div class="col-xs-12 col-sm-8 col-md-8"> <input type="text" maxlength="60" name="name" id="edit-name-1" size="60" value="" class="form-control form-text required" /></div>
                     </div>
                     <input type="hidden" name="form_build_id" id="form-7k0n3A63d6sXFXlA0M2WNOhpnl3uH-scrPRYPlcLeeY" value="form-7k0n3A63d6sXFXlA0M2WNOhpnl3uH-scrPRYPlcLeeY"  />
                     <input type="hidden" name="form_id" id="edit-user-register" value="user_register"  />
                     <div class="form-group form-item form-item-password_confirm form-item-indent" id="edit-pass-1-wrapper">
                        <div class="form-group form-item form-item-password form-item-inline" id="edit-pass-pass1-wrapper">
                           <label class="col-xs-12 col-sm-4 col-md-4 control-label" for="edit-pass-pass1"><span class="form-required" title="This field is required.">*</span> Password</label>
                           <div class="col-xs-12 col-sm-8 col-md-8"> <input type="password" name="pass[pass1]" id="edit-pass-pass1"  maxlength="128"  size="25"  class="form-control form-text required password-field" /></div>
                        </div>
                        <div class="form-group form-item form-item-password form-item-inline" id="edit-pass-pass2-wrapper">
                           <label class="col-xs-12 col-sm-4 col-md-4 control-label" for="edit-pass-pass2"><span class="form-required" title="This field is required.">*</span> Confirm password</label>
                           <div class="col-xs-12 col-sm-8 col-md-8"> <input type="password" name="pass[pass2]" id="edit-pass-pass2"  maxlength="128"  size="25"  class="form-control form-text required password-confirm" /></div>
                        </div>
                     </div>
                     <div class="form-group form-item form-item-textfield form-item-inline" id="edit-mail-wrapper">
                        <label class="col-xs-12 col-sm-4 col-md-4 control-label" for="edit-mail"><span class="form-required" title="This field is required.">*</span> E-mail address</label>
                        <div class="col-xs-12 col-sm-8 col-md-8"> <input type="text" maxlength="64" name="mail" id="edit-mail" size="60" value="" class="form-control form-text required" /></div>
                     </div>
                     <div class="signup-pane-form-footer col-xs-12 col-sm-8 col-md-8 col-sm-offset-4 col-md-offset-4">
                        <div class="form-group form-item form-item-checkbox form-item-indent" id="edit-terms-of-use-wrapper">
                           <label class="option" for="edit-terms-of-use"><input type="checkbox" name="terms_of_use" id="edit-terms-of-use" value="1"   class="form-checkbox required" /> <a href="/terms-use" target="_blank">I agree with the terms of service.</a></label>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="pull-right"><input type="submit" name="op" id="edit-submit-1" value="Create new account"  class="btn btn-default form-submit btn-kixify"/></div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
         </form>
      </div>
      <div class="clearfix"></div>
   </div>
</div>
<div class="clearfix"></div>
@endsection