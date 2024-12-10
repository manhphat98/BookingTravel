<nav class="menunav">
    <ul class="ulwap-mainmenu">
       <li><a href="{{route('index')}}" class="mn-home"><i class="fa-solid fa-house"></i></a></li>
       @foreach ($categories as $key => $category)
               @if ($category->parent_id == 0)
               <li class="megamenusub" style="border-color:white">
                   <a href="{{route('tour', [$category->slug])}}" class=" 'active' ">
                   {{ $category->title}}
                   </a>
                   <ul>
                       @foreach ($categories as $key => $sub_category)
                           @if ($sub_category->parent_id == $category->id)
                           <li class="" style="border-color:white">
                               <a href="{{route('tour', [$sub_category->slug])}}" class="">
                               <i class="fa fa-map-marker"></i>
                               <span>{{$sub_category->title}}</span>
                               </a>
                           </li>
                           @endif
                       @endforeach
                   </ul>
                   </li>
               @endif
           @endforeach

       <li class="" style="border-color:white">
          <a href="{{route('tour', ['kieu-tour'])}}" class=" 'active' ">
          Kiểu tour du lịch
          </a>
          <ul>
             <li class="" style="border-color:white">
                <a href="/vi/loai-tour/30-4/all.html" class="">
                <i class="fa fa-map-marker"></i>  Tour Hè 2003
                </a>
             </li>
             <li class="" style="border-color:white">
               <a href="#" class="">
                   <i class="fa fa-map-marker"></i>  Tour các lễ hội ở Việt Nam
                </a>
             </li>
             <li class="" style="border-color:white">
               <a href="#" class="">
                   <i class="fa fa-map-marker"></i>  Tour du lịch xuyên Việt
                </a>
             </li>
                <a href="#" class="">
                   <a href="#" class="">
                       <i class="fa fa-map-marker"></i>  Du lịch tuần trăng mật
                </a>
             </li>
             <li class="" style="border-color:white">
               <a href="#" class="">
                   <i class="fa fa-map-marker"></i>  Tour du lịch cuối tuần
                </a>
             </li>
             <li class="" style="border-color:white">
               <a href="#" class="">
                   <i class="fa fa-map-marker"></i>  Du lịch Team Building
                </a>
             </li>
             <li class="" style="border-color:white">
               <a href="#" class="">
                   <i class="fa fa-map-marker"></i>  Chùm tour du lịch Biển
                </a>
             </li>
          </ul>
       </li>
       <li class="" style="border-color:white">
          <a href="{{route('tour', ['lich-khoi-hanh'])}}" class=" 'active' ">
          Lịch khởi hành
          </a>
          <ul>
             <li class="" style="border-color:white">
                <a href="{{route('tour', ['du-lich-trong-nuoc'])}}" class="">
                <i class="fa fa-map-marker"></i>  Tour trong nước
                </a>
             </li>
             <li class="" style="border-color:white">
                <a href="{{route('tour', ['du-lich-nuoc-ngoai'])}}" class="">
                <i class="fa fa-map-marker"></i>  Tour nước ngoài
                </a>
             </li>
          </ul>
       </li>

       <li class="" style="border-color:white">
          <a href="{{route('tour', ['cam-nang-du-lich'])}}" class="">
          Cẩm nang du lịch
          </a>
       </li>
       <li class="" style="border-color:white">
          <a href="{{route('tour', ['dich-vu'])}}" class=" 'active' ">
          Dịch vụ
          </a>
          <ul>
             <li class="" style="border-color:white">
                <a href="/vi/danh-sach-xe-cho-thue.html" class="">
                <i class="fa fa-map-marker"></i>  Thuê xe
                </a>
             </li>
             <li class="" style="border-color:white">
               <a href="#" class="">
                   <i class="fa fa-map-marker"></i>  Dịch Vụ Khách sạn
                </a>
             </li>
          </ul>
       </li>
       <li class="" style="border-color:white">
          <a href="{{route('tour', ['gioi-thieu'])}}" class="">
          Giới thiệu
          </a>
       </li>
    </ul>
 </nav>
 <div class="line-menu"></div>
