<div class="container" id="form-search">
    <div class="row">
       <div class="w100 fl bx-wap-form-search">
        <form method="GET" action="{{ route('index') }}" accept-charset="UTF-8" class="">
             <div class="col-md-10 col-xs-12 bx-fr-left">

                <!-- Tìm kiếm từ khóa -->
                <div class="form-group col-md-4 col-xs-12">
                    <input type="text" class="form-control" name="keyword" placeholder="Tìm kiếm tour..." value="{{ request('keyword') }}">
                </div>

                <!-- Lọc theo danh mục -->
                <div class="form-group col-dk-2 col-md-4 col-xs-12">
                    <select class="form-control loaitourchose" name="tour-type">
                        <option value="" class="text-center">Lọc theo Danh mục</option>
                        @foreach ($categories as $key => $category)
                            @if ($category->parent_id == 0)
                                <option class="text-uppercase font-weight-bold" value="{{ $category->id }}" {{ request('tour-type') == $category->id ? 'selected' : '' }}>{{ $category->title }}</></option>
                                @foreach ($categories as $key => $sub_category)
                                    @if ($sub_category->parent_id == $category->id)
                                        <option value="{{ $sub_category->id }}" {{ request('tour-type') == $sub_category->id ? 'selected' : '' }}>-- {{ $sub_category->title }}</option>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </select>
                </div>

                <!-- Lọc theo khuyến mãi -->
                <div class="form-group col-dk-2 col-md-4 col-xs-12">
                   <select class="form-control" name="promotion">
                      <option value="" class="text-center">Giảm giá</option>
                      <option value="yes" {{ request('promotion') == 'yes' ? 'selected' : '' }}>Có</option>
                      <option value="no" {{ request('promotion') == 'no' ? 'selected' : '' }}>Không</option>
                   </select>
                </div>

                <!-- Lọc theo giá -->
                <div class="form-group col-dk-2 col-md-4 col-xs-12">
                   <select class="form-control" name="price">
                      <option value="" class="text-center">Lọc theo giá</option>
                      <option value="0-1" {{ request('price') == '0-1' ? 'selected' : '' }}> < 1 Triệu</option>
                      <option value="1-2" {{ request('price') == '1-2' ? 'selected' : '' }}> 1-2 Triệu</option>
                      <option value="2-4" {{ request('price') == '2-4' ? 'selected' : '' }}> 2-4 Triệu</option>
                      <option value="4-6" {{ request('price') == '4-6' ? 'selected' : '' }}> 4-6 Triệu</option>
                      <option value="6-10" {{ request('price') == '6-10' ? 'selected' : '' }}> 6-10 Triệu</option>
                      <option value="10-200" {{ request('price') == '10-200' ? 'selected' : '' }}> > 10 Triệu</option>
                   </select>
                </div>

             </div>

             <div class="col-md-2 col-xs-12 bx-fr-right">
                <button type="submit" class="btn btn-red">Tìm kiếm</button>
             </div>

          </form>
       </div>
    </div>
 </div>
