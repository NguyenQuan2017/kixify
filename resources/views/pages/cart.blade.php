@extends('pages/layouts/master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 remove-padding" id="content-container-wrapper">
   <a id="main-content"></a>
   <div id="content-center-wrapper">
      <div id="cart-form-pane">
         <form action="/cart" accept-charset="UTF-8" method="post" id="uc-cart-view-form" class="form-horizontal ">
         {{csrf_field()}}
            <div>
               <div class="uc-default-submit"><input type="submit" name="update-cart" id="edit-update" value="Update cart" class="btn btn-default form-submit"></div>
               <div id="cart-form-products">
                  <div class="panel panel-default">
                      
                 
                     <table width="100%" class="table ">
                        <thead>
                           <tr>
                              <th>Products</th>
                              <th>Qty</th>
                              <th>Price</th>
                              <th>Total</th>
                              <th></th>
                           </tr>
                        </thead>
                        <tbody>
                        @if((Cart::count())==0)
                        <tr> <td class="price"><span class="uc-price">Uh-oh. Your cart is empty</span></td></tr>
                        @else
                        @foreach($content as $item)
                           <tr valign="top" class="odd">
                              <td class="desc">
                                 <div class="col-xs-4 col-sm-3 col-md-3 clear-padding"><a href="/product/air-jordan-8-cool-grey-1"><img src="{{url('public/images/products/'.$item->options->img)}}" alt="" title="" class="img-responsive imagecache imagecache-uc_thumbnail"></a></div>
                                 <div class="col-xs-8 col-sm-9 col-md-9 clear-padding">
                                    <a href="/product/air-jordan-8-cool-grey-1">{{$item->name}}</a>
                                    <div class="item-list">
                                       <ul class="product-description">
                                          <li class="first last">Size: {{$item->options->size}}</li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="clearfix"></div>
                              </td>
                              <td class="qty">
                                 <div class="form-group form-item form-item-markup form-item-indent" id="edit-items-0-qty-wrapper">
                                    <div class="col-xs-12 col-sm-8 col-md-8"> <input type="text" maxlength="6" name="" id="edit-items-0-qty" size="5" value="{{$item->qty}}" class="form-control form-text quantity required"></div>
                                 </div>
                              </td>
                              <td class="price"><span class="uc-price">${{$item->price}}</span></td>
                              <td class="price"><span class="uc-price">${{$item->price * $item->qty}}</span></td>
                              <td align="center" class="remove">
                               <a href="" id="{{$item->rowId}}"   class="edit-update" ><i class="fa fa-refresh"></i></a>
                                  <a href="{{route('delete-cart',$item->rowId)}}" class="btn btn-default form-submit btn-danger">X</a></td>
                           </tr>
                        @endforeach 
                        @endif
                         <tr class="even">
                              <td colspan="5" class="subtotal"><span id="subtotal-title">Subtotal:</span> <span class="uc-price">${{$total}}</span></td>
                           </tr>
                        </tbody>
                     </table>

                     <input type="hidden" name="items[0][data]" id="edit-items-0-data" value="a:3:{s:10:&quot;attributes&quot;;a:1:{i:6;s:2:&quot;99&quot;;}s:9:&quot;shippable&quot;;s:1:&quot;1&quot;;s:6:&quot;module&quot;;s:10:&quot;uc_product&quot;;}">
                     <input type="hidden" name="items[0][cart_item_id]" id="edit-items-0-cart-item-id" value="13264886">
                    
                  </div>
               </div>
               <div id="cart-form-buttons">
                  <div id="continue-shopping-button"> <a href="{{route('trangchu')}}" class="btn btn-default">Continue shopping</a></div>
                  <div id="update-checkout-buttons">

                     <input type="submit" name="op" id="edit-checkout" value="Checkout" class="btn btn-default form-submit  btn-kixify">
                   <!--   <input type="hidden" name="form_build_id" id="form-QR5AgU3oatmYXk7T0tDsx5F1ZLfoO_GqJMJaaqd8sXk" value="form-QR5AgU3oatmYXk7T0tDsx5F1ZLfoO_GqJMJaaqd8sXk">
                     <input type="hidden" name="form_token" id="edit-uc-cart-view-form-form-token" value="b577c1057c1948c868e64aafae54680d"> -->
                   <!--   <input type="hidden" name="form_id" id="edit-uc-cart-view-form" value="uc_cart_view_form"> -->
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection