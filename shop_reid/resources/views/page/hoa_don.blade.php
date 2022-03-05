@extends('master')
@section('content')
    <div class="breadcrumbs_area other_bread">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">Trang Chủ</a></li>
                            <li>/</li>
                            <li>Hóa đơn</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    
    <div class="shopping_cart_area">
        <div class="container">
            @if(Session::has('thongbao'))
            <div class="alert alert-success">{{Session::get('thongbao')}}</div>
            @endif
            <form action="{{route('hoadon')}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_thumb">Ảnh sản phẩm</th>
                                            <th class="product_name">Tên sản phẩm</th>
                                            <th class="product-price">Đơn giá</th>
                                            <th class="product_quantity">Số lượng</th>
                                            <th class="product_total">Tổng tiền</th>
                                            <th class="product_remove">Xóa</th>
                                        </tr>
                                    </thead>
                                    @if(Session::has('cart'))
                                    <tbody>
                                        @foreach($product_cart_item as $product_item)
                                        <tr>
                                            <td class="product_thumb">
                                                <a href="{{route('chitietsanpham',$product_item['item']['id'])}}"><img src="source/image/product/product/{{$product_item['item']['image']}}" alt=""></a>
                                            </td>
                                            <td class="product_name">
                                                <a href="#">{{$product_item['item']['name']}}</a>
                                            </td>
                                            <td class="product-price" style="text-transform: none;min-width: 173px;">
                                                @if($product_item['item']['promotion_price']==0){{number_format($product_item['item']['unit_price'])}}  
                                                @else {{number_format($product_item['item']['promotion_price'])}}
                                                @endif đồng
                                            </td>
                                            <td class="product_quantity">
                                                {{$product_item['qty']}}
                                            </td>
                                            <td class="product_total" style="min-width: 229px;text-transform: none;">
                                                {{$product_item['qty']}} x 
                                                {{number_format($product_item['price'])}} đồng
                                            </td>
                                            <td class="product_remove">
                                                <a href="{{route('xoagiohang',$product_item['item']['id'])}}">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                           </td>
                                        </tr> 
                                        @endforeach
                                    </tbody>
                                    @endif
                                </table>   
                            </div>    
                        </div>
                    </div>
                </div>
                
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3>Hình thức thanh toán ( Thanh toán trực tiếp )</h3>
                                <div class="coupon_inner">   
                                    <p>
                                    	Shop sẽ gửi tới địa chỉ của bạn, bạn vui lòng kiểm tra và thanh toán tiền cho nhân viên giao hàng </br>( Vui lòng điền vào đầy đủ các thông tin sau: )
                                    </p>       

                                    <div class="col-lg-6 col-md-6" style="width: inherit;">
                    					<div class="account_form">
                            				<p style="display: flex;">   
                                				<label for="name" style="width: 30%;line-height: 2;">
                                					Họ và tên
                                					<span>*</span>
                                				</label>
                                				<input type="text" name="name" placeholder="Nhập họ và tên của bạn" required>
                             				</p>

                             				<p style="display: flex;">
                             					<label for="address" style="width: 30%;line-height: 2;">
                             						Địa chỉ
                             						<span>*</span>
                             					</label>
                             					<input type="text" name="address" placeholder="Nhập địa chỉ nơi bạn muốn nhận hàng" required>
                             				</p>

                             				<p style="display: flex;">
                             					<label for="phone" style="width: 30%;line-height: 2;">
                             						Số điện thoại
                             						<span>*</span>
                             					</label>
                             					<input type="text" name="phone" placeholder="Nhập số điện thoại của bạn" required>
                             				</p>

                             				<p style="display: flex;">
                             					<label for="notes" style="width: 21%;line-height: 2;">
                             						Ghi chú
                             						<span>*</span>
                             					</label>
                             					<textarea name="notes" style="height: 10em;width: 75%;"></textarea>
                             				</p>	
                     					</div>    
                					</div>
                                </div>    
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Giỏ hàng</h3>
                                <div class="coupon_inner">
                                   <div class="cart_subtotal">
                                        <p>Tổng tiền :</p>
                                        <p class="cart_amount">
                                            @if(Session::has('cart')){{number_format($totalPrice)}} @else 0 @endif đồng
                                        </p>
                                   </div>
                                   <a href="#"></a>


                                   <div class="checkout_btn">
                                        <button type="submit">
                                            Đặt hàng
                                        </button>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>       
            </form> 
        </div>     
    </div>
@endsection
