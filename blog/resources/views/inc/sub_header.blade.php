@php
    $dep01_title = '';
    $dep02_title = '';
    $dep03_title = '';

    $re_sg_01 = request()->segment(1);
    $re_sg_02 = request()->segment(2);
    $re_sg_03 = request()->segment(3);

    switch ($re_sg_01) {
        case 'introduction':
            $dep01_title = '위원회 소개';
            break;
        case 'activity':
            $dep01_title = '위원회 활동';
            break;
        case 'info':
            $dep01_title = '알림마당';
            break;
        default:
            $dep01_title = '';
            break;
    }

    switch ($re_sg_02) {
        case 'greeting':
            $dep02_title = '인사말';
            break;
        case 'history':
            $dep02_title = '연혁';
            break;
        case 'organization':
            $dep02_title = '조직도 및 임원단';
            break;
        case 'member':
            $dep02_title = '자문단 및 지역 본·지부';
        break;
        case 'gallery':
            $dep02_title = '활동사진 갤러리';
        break;
        case 'counseling':
            $dep02_title = '청소년 상담센터';
        break;
        case 'news':
            $dep02_title = '위원회 소식';
        break;
        case 'sponsor':
            $dep02_title = '후원안내';
        break;

        default:
            $dep01_title = '';
            break;
    }
@endphp
<div class="sub_header">
    <ul class="sub_menu ">
        <li class="s_dep01_li">
            <a href="/introduction/greeting">
                <img src="/img/sub_ic01.png" alt="">    
                <h2>위원회 소개</h2>
            </a>
            <ul class="s_dep_02">
                <li>
                    <a href="/introduction/greeting">
                        <h3>인사말</h3>
                        <img src="/img/sub01_arrow.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="/introduction/history">
                        <h3>연혁</h3>
                        <img src="/img/sub01_arrow.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="/introduction/organization">
                        <h3>조직도 및 임원단</h3>
                        <img src="/img/sub01_arrow.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="/introduction/member">
                        <h3>자문단 및 지역 본·지부</h3>
                        <img src="/img/sub01_arrow.png" alt="">
                    </a>
                </li>
            </ul>
        </li>
        <li class="s_dep01_li">
            <a href="/activity/gallery">
                <img src="/img/sub_ic02.png" alt="">    
                <h2>위원회 활동</h2>
            </a>
            <ul class="s_dep_02">
                <li>
                    <a href="/activity/gallery">
                        <h3>활동사진 갤러리</h3>
                        <img src="/img/sub02_arrow.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="/activity/counseling">
                        <h3>청소년 상담센터</h3>
                        <img src="/img/sub02_arrow.png" alt="">
                    </a>
                </li>
            </ul>
        </li>
        <li class="s_dep01_li">
            <a href="/noti/news">
                <img src="/img/sub_ic03.png" alt="">    
                <h2>알림마당</h2>
            </a>
            <ul class="s_dep_02">
                <li>
                    <a href="/noti/news">
                        <h3>위원회 소식</h3>
                        <img src="/img/sub03_arrow.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="/noti/sponsor">
                        <h3>후원안내</h3>
                        <img src="/img/sub03_arrow.png" alt="">
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="sub_banner {{request()->segment(1)}}">
        <p>
            {{$dep01_title}}
            <i class="fas"></i>
            <span>{{$dep02_title}}</span>
        </p>
    </div>
</div>
<script>
    $(function(){
        var $subMenu = $('.sub_header .sub_menu .s_dep01_li');

        $subMenu.hover(function(){
            $(this).find('.s_dep_02').stop().slideToggle();
        });
    });
</script>