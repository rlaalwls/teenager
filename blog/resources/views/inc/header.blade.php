<body>
    <div id="container">
        <span class="respon_menu_aside"></span>
        <div id="header">
            <img src="/img/sub_bar.png" alt="" class="sub_bar">
            <h1><a href="/"><img src="/img/logo.png" alt=""></a></h1>
            <div class="respon_menu">
                <img src="/img/close_btn.png" alt="" class="close_btn">
                <div class="respon_top">
                    <img src="/img/sub_menu_ic.png" alt="" class="down_ic">
                    <p>THE YOUTH GUIDANCE REARING CONFERENCE</p>
                </div>       
                <div class="sub_menu_box">
                    <div class="s_m">
                        <p>
                            <a href="javascript:void(0);">
                                <img src="/img/sub_menu_ic01.png" alt="">위원회 소개
                            </a>
                            <img src="/img/m_down_ic.png" alt="" class="down_ic">
                        </p>                    
                        <ul>
                            <li class="poppins"><a href="/introduction/greeting">인사말</a></li>
                            <li class="poppins"><a href="/introduction/history">연혁</a></li>
                            <li class="poppins"><a href="/introduction/organization">조직도 및 임원단</a></li>
                            <li class="poppins"><a href="/introduction/member">자문단 및 지역 본·지부</a></li>
                        </ul>
                    </div>
                    <div class="s_m">
                        <p>
                            <a href="javascript:void(0);">
                                <img src="/img/sub_menu_ic02.png" alt="">위원회 활동
                            </a>
                            <img src="/img/m_down_ic.png" alt="" class="down_ic">
                        </p>                    
                        <ul>
                            <li class="poppins"><a href="/activity/gallery">활동사진 갤러리</a></li>
                            <li class="poppins"><a href="/activity/counseling">청소년 상담센터</a></li>
                        </ul>
                    </div>
                    <div class="s_m">
                        <p>
                            <a href="javascript:void(0);">
                                <img src="/img/sub_menu_ic03.png" alt="">알림마당
                            </a>
                            <img src="/img/m_down_ic.png" alt="" class="down_ic">
                        </p>                    
                        <ul>
                            <li class="poppins"><a href="/noti/news">위원회 소식</a></li>
                            <li class="poppins"><a href="/noti/sponsor">후원안내</a></li>
                        </ul>
                    </div>
                </div>         
            </div>
        </div>
        <script>
            $(function(){
                /* 모바일메뉴 */
                    $('#header .sub_bar').click(function(){
                            $(this).siblings('.respon_menu').addClass('active');
                            $('body').css({position:'fixed'});
                            $('body').addClass('body_bg');
                        });
    
                    $('#header .respon_menu .close_btn').click(function(){
                        $(this).closest('.respon_menu').removeClass('active');
                        $('body').css({position:''});
                        $('body').removeClass('body_bg');
                    });
    
                    $('#header .s_m p').click(function(){
                        $(this).siblings('ul').slideToggle();
                        $(this).toggleClass('on');
                    });
    
            });
        </script>