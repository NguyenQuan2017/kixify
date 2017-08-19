@extends('pages/layouts/master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 remove-padding" id="content-container-wrapper">
   <a id="main-content"></a>
   <h1 class="title " id="page-title">Contact</h1>
   <div id="content-center-wrapper">
      <form action="/contact-us"  accept-charset="UTF-8" method="post" id="contact-mail-page" class="form-horizontal ">
         <div>
            <input type="hidden" name="form_build_id" id="form-b8AlYu5tjkHuRzjArYq7ZyDvnWdmeDYuFkp83c8GTqk" value="form-b8AlYu5tjkHuRzjArYq7ZyDvnWdmeDYuFkp83c8GTqk"  />
            <input type="hidden" name="form_id" id="edit-contact-mail-page" value="contact_mail_page"  />
            <div class="form-group form-item form-item-select form-item-inline" id="edit-cid-wrapper">
               <label class="col-xs-12 col-sm-4 col-md-4 control-label" for="edit-cid"><span class="form-required" title="This field is required.">*</span> Category</label>
               <div class="col-xs-12 col-sm-8 col-md-8">
                  <select name="cid" class="form-control form-select required" id="edit-cid" >
                     <option value="0">- Please choose -</option>
                     <option value="6">- General Question</option>
                     <option value="11">- Business Request</option>
                     <option value="16">- Support</option>
                     <option value="21">-- Account Suspension</option>
                     <option value="26">-- Billing & Invoice</option>
                     <option value="31">-- Order Cancellation</option>
                     <option value="36">-- Terminate Account</option>
                     <option value="41">-- Report Seller/Order</option>
                     <option value="46">-- Report a Site Bug</option>
                     <option value="51">-- Other (Support)</option>
                     <option value="56">- Suggestions</option>
                     <option value="61">- Press</option>
                     <option value="66">- Other</option>
                  </select>
               </div>
            </div>
            <div class="form-group form-item form-item-textfield form-item-inline" id="edit-ordernumber-wrapper">
               <label class="col-xs-12 col-sm-4 col-md-4 control-label" for="edit-ordernumber"> Order Number</label>
               <div class="col-xs-12 col-sm-8 col-md-8"> <input type="text" maxlength="20" name="ordernumber" id="edit-ordernumber" size="60" value="" class="form-control form-text" /></div>
            </div>
            <div class="form-group form-item form-item-textfield form-item-inline" id="edit-name-wrapper">
               <label class="col-xs-12 col-sm-4 col-md-4 control-label" for="edit-name"><span class="form-required" title="This field is required.">*</span> Username</label>
               <div class="col-xs-12 col-sm-8 col-md-8"> <input type="text" maxlength="255" name="name" id="edit-name" size="60" value="" class="form-control form-text required" /></div>
            </div>
            <div class="form-group form-item form-item-textfield form-item-inline" id="edit-mail-wrapper">
               <label class="col-xs-12 col-sm-4 col-md-4 control-label" for="edit-mail"><span class="form-required" title="This field is required.">*</span> Your e-mail address</label>
               <div class="col-xs-12 col-sm-8 col-md-8"> <input type="text" maxlength="255" name="mail" id="edit-mail" size="60" value="" class="form-control form-text required" /></div>
            </div>
            <div class="form-group form-item form-item-textfield form-item-inline" id="edit-subject-wrapper">
               <label class="col-xs-12 col-sm-4 col-md-4 control-label" for="edit-subject"><span class="form-required" title="This field is required.">*</span> Subject</label>
               <div class="col-xs-12 col-sm-8 col-md-8"> <input type="text" maxlength="255" name="subject" id="edit-subject" size="60" value="" class="form-control form-text required" /></div>
            </div>
            <div class="form-group form-item form-item-textarea form-item-inline" id="edit-message-wrapper">
               <label class="col-xs-12 col-sm-4 col-md-4 control-label" for="edit-message"><span class="form-required" title="This field is required.">*</span> Message</label>
               <div class="col-xs-12 col-sm-8 col-md-8"> <textarea cols="60" rows="5" name="message" id="edit-message"  class="form-control form-textarea resizable required"></textarea></div>
            </div>
            <div class="captcha">
               <input type="hidden" name="captcha_sid" id="edit-captcha-sid" value="9582891"  />
               <input type="hidden" name="captcha_token" id="edit-captcha-token" value="d8aa28aa070d9d23ee876828d4431375"  />
               <div class="form-group form-item form-item-textfield form-item-inline" id="edit-captcha-response-wrapper">
                  <label class="col-xs-12 col-sm-4 col-md-4 control-label" for="edit-captcha-response"><span class="form-required" title="This field is required.">*</span> Math question</label>
                  <div class="col-xs-12 col-sm-8 col-md-8"> <span class="field-prefix">6 + 5 = </span> <input type="text" maxlength="2" name="captcha_response" id="edit-captcha-response" size="4" value="" class="form-control form-text required" />
                     <span class="help-block">Solve this simple math problem and enter the result. E.g. for 1+3, enter 4.</span>
                  </div>
               </div>
            </div>
            <div class="form-group form-item form-item-textfield form-item-inline">
               <div class="col-xs-12 col-sm-12 col-md-12 ">Having issues with this form? Email <a href="mailto:support@kixify.com">support@kixify.com</a>.</div>
               <div class="clearfix"></div>
            </div>
            <input type="submit" name="op" id="edit-submit" value="Send e-mail"  class="btn btn-default form-submit"/>
         </div>
      </form>
   </div>
</div>
<div class="clearfix"></div>
@endsection