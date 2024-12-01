<div class="container" id="form-search">
    <div class="row">
       <div class="w100 fl bx-wap-form-search">
          <form method="GET" action="" accept-charset="UTF-8" class="">
             <div class="col-md-10 col-xs-12 bx-fr-left">
                <div class="form-group col-dk-2 col-md-4 col-xs-12">
                   <select class="form-control loaitourchose" name="tour-type" required="">
                      <option value="">Loại Tour</option>
                      <option value="trongnuoc" >Tour nội địa</option>
                      <option value="ngoainuoc" >Tour Quốc tế</option>
                   </select>
                </div>
                <div class="form-group col-dk-2 col-md-4 col-xs-12" style="display: none;">
                   <select class="form-control" name="place_departure_category_id">
                      <option value="">Điểm khởi hành</option>
                      <option value="83" >Khởi hành từ Hà Nội</option>
                      <option value="84" >Khởi hành từ Đà Nẵng</option>
                      <option value="82" >TP. Hồ Chí Minh</option>
                      <option value="70" >Khởi hành từ Hải Phòng</option>
                      <option value="34" >Khởi hành từ Quảng Ninh</option>
                      <option value="72" >Khởi hành từ Lào Cai</option>
                      <option value="85" >Khởi hành từ Lai Châu</option>
                      <option value="62" >Khởi hành từ Ninh Bình</option>
                      <option value="3" >Khởi hành từ Thanh Hóa</option>
                      <option value="4" >Khởi hành từ Nghệ An</option>
                      <option value="74" >Khởi hành từ Huế</option>
                      <option value="71" >Khởi hành từ Nha Trang</option>
                      <option value="89" >Khởi hành từ Hà Nội - TP.HCM</option>
                      <option value="91" >Hà Nội - Đà Nẵng - TP.HCM</option>
                      <option value="92" >Khởi hành 63 tỉnh/TP</option>
                   </select>
                </div>
                <div class="form-group col-dk-2 col-md-4 col-xs-12">
                   <select name="" class="form-control show-select" id="chose-option-diemden-empty">
                      <option value="0">Nơi đến</option>
                   </select>
                   <select name="category_id_nd" class="form-control hidden-select" id="chose-option-diemden-nd">
                      <option value="">Nơi đến</option>
                      <option value="3" >Du lịch Hạ Long Cát Bà</option>
                      <option value="4" >Du lịch Hà Nội Sapa 2018</option>
                      <option value="34" >Du lịch Hà Nội Hạ Long Sapa</option>
                      <option value="62" >Du lịch Quy Nhơn Phú Yên</option>
                      <option value="66" >Du lịch Đà Nẵng Hội An Huế</option>
                      <option value="85" >Du lịch Nha Trang Đà Lạt</option>
                      <option value="69" >Du Lịch Vũng Tàu Côn Đảo</option>
                      <option value="67" >Du lịch đảo ngọc Phú Quốc</option>
                      <option value="70" >Du lịch Sài Gòn và Miền Tây</option>
                      <option value="71" >Du lịch Đông Tây Bắc 2018</option>
                      <option value="72" >Du lịch Phan Thiết 2018</option>
                      <option value="73" >Du lịch Cửa Lò Làng sen</option>
                      <option value="89" >Du lịch Ban Mê Thuột</option>
                      <option value="164" >63 tỉnh thành phố</option>
                   </select>
                   <select name="category_id_qt" class="form-control hidden-select" id="chose-option-diemden-qt">
                      <option value="">Nơi đến</option>
                      <option value="137" >Du lịch Thái Lan</option>
                      <option value="143" >Du lịch Campuchia</option>
                      <option value="156" >Du lịch Singapore Malaysia</option>
                      <option value="160" >Du lịch Myanmar</option>
                      <option value="144" >Du lịch Trung Quốc</option>
                      <option value="142" >Du lịch Hồng Kông</option>
                      <option value="154" >Du lịch Lào</option>
                      <option value="139" >Du lịch Hàn Quốc</option>
                      <option value="145" >Du lịch Châu Âu</option>
                      <option value="158" >Du Lịch Úc</option>
                      <option value="140" >Du lịch Nhật Bản</option>
                      <option value="157" >Du lịch Dubai</option>
                      <option value="141" >Du lịch Đài Loan</option>
                      <option value="161" >Du lịch Maldives</option>
                   </select>
                </div>
                <div class="form-group col-dk-2 col-md-4 col-xs-12">
                   <input id="start_date" class="form-control" type="text" name="start_date" value="" placeholder="Ngày khởi hành">
                </div>
                <div class="form-group col-dk-2 col-md-4 col-xs-12" style="display: none">
                   <input id="end_date" class="form-control" type="text" name="end_date" value="" placeholder="Ngày về">
                </div>
                <div class="form-group col-dk-2 col-md-4 col-xs-12">
                   <select class="form-control" name="promotion">
                      <option value="">Giảm giá</option>
                      <option value="yes" >Có</option>
                      <option value="no" >Không</option>
                   </select>
                </div>
                <div class="form-group col-dk-2 col-md-4 col-xs-12">
                   <select class="form-control" name="price">
                      <option value="">Giá</option>
                      <option value="0-1" > < 1 Triệu</option>
                      <option value="1-2" > 1-2 Triệu</option>
                      <option value="2-4" > 2-4 Triệu</option>
                      <option value="4-6" > 4-6 Triệu</option>
                      <option value="6-10" > 6-10 Triệu</option>
                      <option value="10-200" > > 10 Triệu</option>
                   </select>
                </div>
             </div>
             <div class="col-md-2 col-xs-12 bx-fr-right">
                <button type="submit" class="btn btn-red">Xem giá</button>
             </div>
          </form>
       </div>
    </div>
 </div>
