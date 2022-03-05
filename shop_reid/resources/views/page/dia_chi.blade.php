@extends('master')
@section('content')
    <div class="breadcrumbs_area other_bread">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{route('trangchu')}}">Trang chủ</a></li>
                            <li>/</li>
                            <li>Địa chỉ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>

    <div class="contact_area">
        <div class="container">   
            <div class="row">
                <div class="col-lg-6 col-md-12">
                   <div class="contact_message content">
                        <h3>Địa chỉ liên hệ</h3>    
                         <p>
                         	Chúng tôi rất vui và sẵn lòng khi nhận được những chia sẻ và phản hồi từ khách hàng. Những góp ý của Quý khách sẽ giúp chúng tôi nâng cao chất lượng dịch vụ và đáp ứng nhu cầu của Quý khách ngày càng tốt hơn.</br> Để đóng góp ý kiến, Quý khách vui lòng điền theo biểu mẫu dưới đây.
                         </p>   
                        <ul>
                            <li><i class="fa fa-fax"></i> Địa chỉ :<a href="https://goo.gl/maps/uY2XMVmfvHBjS29n8"> Khu Cộng Hòa, Thị trấn Thanh Nê, Kiến Xương, Thái Bình</a></li>
                            <li><i class="fa fa-phone"></i> Số điện thoại: <a href="tel:+(+84)63836224">0963836224</a></li>
                            <li><i class="fa fa-envelope-o"></i> Email: <a href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"> dangngoctoanhauk18@gmail.com</a></li>
                        </ul>             
                    </div> 
                </div>
                <div class="col-lg-6 col-md-12">
                   <div class="contact_message form">
                        <h3>Phản hồi và góp ý</h3>   
                        <form action="{{route('diachi')}}" method="post" id="contact-form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <p>  
                               <label> Họ và tên *</label>
                                <input name="name" placeholder="Vui lòng nhập họ và tên của bạn" type="text"> 
                            </p>
                            <p>       
                               <label>Email *</label>
                                <input name="email" placeholder="Vui lòng nhập địa chỉ Email của bạn" type="email">
                            </p>   
                            <div class="contact_textarea">
                                <label>Nội dung phản hồi</label>
                                <textarea placeholder="Nội dung" name="note"  class="form-control2" ></textarea>     
                            </div>   
                            <button type="submit">Gửi đi</button>  
                            <p class="form-messege"></p>
                        </form> 

                    </div> 
                </div>
            </div>
        </div>    
    </div>

    <div class="contact_map">
       <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                   <div class="map-area">
                      <div id="googleMap">
                      	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29919.586761492566!2d106.42370198996957!3d20.38501955456915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1632817025866!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                      </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection