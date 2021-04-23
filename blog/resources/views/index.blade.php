@include('/inc/head')
@include('/inc/header')
    <div id="main">
        <div class="main_img">
            <div class="inner">
                <p>
                    <b>청소년 선도위원회</b>에 오신 <br>
                    청소년과 관계자 여러분들을 
                </p>
                <h4>진심으로 환영합니다!</h4>
            </div>
        </div>
        <ul class="main_dep01">
            <li class="main_dep01_li">
                <div class="dep01_inner">
                    <div class="li_v">
                        <a href="/introduction/greeting" class="mo_block">
                            <img src="/img/li_ic01.png" alt="">
                            <h2>위원회 소개</h2>
                            <p>
                                건전한 청소년 육성과 선도를<br>
                                주된 목적으로 설립
                            </p>
                        </a>
                    </div>    
                    <div class="sub_menu">
                        <h3>위원회 소개</h3>
                        <ul>
                            <li><a href="/introduction/greeting">
                                <h4>인사말</h4>
                                <img src="/img/li_arrow.png" alt="">    
                            </a></li>
                            <li><a href="/introduction/history">
                                <h4>연혁</h4>
                                <img src="/img/li_arrow.png" alt="">    
                            </a></li>
                            <li><a href="/introduction/organization">
                                <h4>조직도 및 임원단</h4>
                                <img src="/img/li_arrow.png" alt="">    
                            </a></li>
                            <li><a href="/introduction/member">
                                <h4>자문단 및 지역 본·지부</h4>
                                <img src="/img/li_arrow.png" alt="">    
                            </a></li>
                        </ul>
                    </div>           
                </div>                
            </li>
            <li class="main_dep01_li">
                <div class="dep01_inner">
                    <div class="li_v">
                        <a href="/activity/gallery" class="mo_block">
                            <img src="/img/li_ic02.png" alt="">
                            <h2>위원회 활동</h2>
                            <p>
                                대한민국 청소년과 함께<br>
                                여러 활동 모음
                            </p>
                        </a>
                    </div>    
                    <div class="sub_menu">
                        <h3>위원회 활동</h3>
                        <ul>
                            <li><a href="/activity/gallery">
                                <h4>활동사진 갤러리</h4>
                                <img src="/img/li_arrow.png" alt="">    
                            </a></li>
                            <li><a href="/activity/counseling">
                                <h4>청소년 상담센터</h4>
                                <img src="/img/li_arrow.png" alt="">    
                            </a></li>
                        </ul>
                    </div>           
                </div>       
            </li>
            <li class="main_dep01_li">
                <div class="dep01_inner">
                    <div class="li_v">
                        <a href="/noti/news" class="mo_block">
                            <img src="/img/li_ic03.png" alt="">
                            <h2>알림마당</h2>
                            <p>
                                위원회 모든 소식과<br>
                                후원안내 알림
                            </p>
                        </a>
                    </div>    
                    <div class="sub_menu">
                        <h3>알림마당</h3>
                        <ul>
                            <li><a href="/noti/news">
                                <h4>위원회 소식</h4>
                                <img src="/img/li_arrow.png" alt="">    
                            </a></li>
                            <li><a href="/noti/sponsor">
                                <h4>후원안내</h4>
                                <img src="/img/li_arrow.png" alt="">    
                            </a></li>
                        </ul>
                    </div>           
                </div>       
            </li>
        </ul>
    </div>

@include('/inc/footer')
<script>
    var $subMenu = $('#main .main_dep01 .main_dep01_li .dep01_inner');
    
    $subMenu.hover(function(){
        $(this).toggleClass('on');
    });
</script>