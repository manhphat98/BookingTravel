<nav class="menunav">
    <ul class="ulwap-mainmenu" style="display: flex; justify-content: center; align-items: center;">
       <li class="" style="border-color:white; padding: 9.5px"><a href="{{ route('index') }}" class=""><i class="fa-solid fa-house fa-xl"></i></a></li>

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
            <a href="#" class="">Tin tức</a>
       </li>

        <li class="" style="border-color:white">
            <a href="{{ route('vehicle') }}" class="">Thuê xe</a>
        </li>

        <li class="" style="border-color:white">
            <a href="{{route('residence')}}" class="">Lưu trú</a>
        </li>

       <li class="" style="border-color:white">
            <a href="{{ route('introduce') }}" class="">Giới thiệu</a>
       </li>
    </ul>
 </nav>
 <div class="line-menu"></div>
