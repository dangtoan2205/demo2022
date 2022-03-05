@extends('admin.master')
@section('admin.content')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row" style="display: block;">

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> <i class="fa fa-list"></i> <small>Danh sách sản phẩm </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Setting 1</a>
                            <a class="dropdown-item" href="#">Setting 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="text-align: center;">STT</th>
                          <th style="text-align: center;">Ảnh</th>
                          <th style="text-align: center;">Tên sản phẩm</th>
                          <th style="text-align: center;">Loại sản phẩm</th>
                          <th style="text-align: center;">Mô tả</th>
                          <th style="text-align: center;">Giá gốc</th>
                          <th style="text-align: center;">Giá khuyến mãi</th>
                          <th style="text-align: center;">Ngày cập nhật</th>
                          <th style="text-align: center;">Sửa</th>
                          <th style="text-align: center;"> Xóa</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row" style="vertical-align: inherit;text-align: center;">1</th>
                          <td style="width:7%">
                            <img src="source/image/product/product_hv/product19.jpg" alt="" style="width: 100%">
                          </td>
                          <td style="vertical-align: inherit;text-align: center;" name="name">Giày Nike ES</td>
                          <td style="vertical-align: inherit;text-align: center;" name="type">Adidas</td>
                          <td style="vertical-align: inherit;text-align: center;" name="description">Giày mới có</td>
                          <td style="vertical-align: inherit;text-align: center;" name="unit_price">600,000 đồng</td>
                          <td style="vertical-align: inherit;text-align: center;" name="promotion_price">0 đồng</td>
                          <td style="vertical-align: inherit;text-align: center;" name="date">29/10/20211</td>
                          <td style="vertical-align: inherit;text-align: center;">
                            <a href="">
                              <i class="fa fa-pencil"></i>
                            </a>
                          </td>
                          <td style="vertical-align: inherit;text-align: center;">
                            <a href="">
                              <i class="fa fa-trash"></i> 
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection