@include('/inc/head')
@include('/inc/header')
@include('/inc/sub_header')
    <div id="sub" class="gallery">
        <div class="inner">
            <div class="sub_top">
                <p>GALLERY</p>
                <h3>활동사진 갤러리</h3>
            </div>
            <div class="sub_content">
                <ul>
                    <li>
                        <img src="/img/gall.jpg" data-lightbox="/img/gall.jpg" alt="" class="gall_img">
                        <img src="/img/popup_ic.png" alt="" class="popup_ic">
                    </li>
                    <li>
                        <img src="/img/gall.jpg" data-lightbox="/img/gall.jpg" alt="" class="gall_img">
                        <img src="/img/popup_ic.png" alt="" class="popup_ic">
                    </li>
                    <li>
                        <img src="/img/gall.jpg" data-lightbox="/img/gall.jpg" alt="" class="gall_img">
                        <img src="/img/popup_ic.png" alt="" class="popup_ic">
                    </li>
                    <li>
                        <img src="/img/gall.jpg" data-lightbox="/img/gall.jpg" alt="" class="gall_img">
                        <img src="/img/popup_ic.png" alt="" class="popup_ic">
                    </li>
                    <li>
                        <img src="/img/gall.jpg" data-lightbox="/img/gall.jpg" alt="" class="gall_img">
                        <img src="/img/popup_ic.png" alt="" class="popup_ic">
                    </li>
                    <li>
                        <img src="/img/gall.jpg" data-lightbox="/img/gall.jpg" alt="" class="gall_img">
                        <img src="/img/popup_ic.png" alt="" class="popup_ic">
                    </li>
                    <li>
                        <img src="/img/gall.jpg" data-lightbox="/img/gall.jpg" alt="" class="gall_img">
                        <img src="/img/popup_ic.png" alt="" class="popup_ic">
                    </li>
                    <li>
                        <img src="/img/gall.jpg" data-lightbox="/img/gall.jpg" alt="" class="gall_img">
                        <img src="/img/popup_ic.png" alt="" class="popup_ic">
                    </li>
                    <li>
                        <img src="/img/gall.jpg" data-lightbox="/img/gall.jpg" alt="" class="gall_img">
                        <img src="/img/popup_ic.png" alt="" class="popup_ic">
                    </li>
                    <li>
                        <img src="/img/gall.jpg" data-lightbox="/img/gall.jpg" alt="" class="gall_img">
                        <img src="/img/popup_ic.png" alt="" class="popup_ic">
                    </li>
                    <li>
                        <img src="/img/gall.jpg" data-lightbox="/img/gall.jpg" alt="" class="gall_img">
                        <img src="/img/popup_ic.png" alt="" class="popup_ic">
                    </li>
                    <li>
                        <img src="/img/gall.jpg" data-lightbox="/img/gall.jpg" alt="" class="gall_img">
                        <img src="/img/popup_ic.png" alt="" class="popup_ic">
                    </li>
                </ul>
                <div class="pagination">
                    <div class="page-item">
                        <a class="page-link" href="#"><img src="/img/prev_add_n.png" alt="" class="img_m2" /></a>
                    </div>
                    <div class="page-item">
                        <a class="page-link" href="#"><img src="/img/prev_ic_n.png" alt="" /></a>
                    </div>
                    <div class="num">
                        <div class="page-item on"><a class="page-link" href="#">1</a></div>
                        <div class="page-item"><a class="page-link" href="#">2</a></div>
                        <div class="page-item"><a class="page-link" href="#">3</a></div>
                        <div class="page-item"><a class="page-link" href="#">4</a></div>
                        <div class="page-item"><a class="page-link" href="#">5</a></div>
                        <div class="page-item"><a class="page-link" href="#">6</a></div>
                    </div>
                    <div class="page-item">
                        <a class="page-link" href="#"><img src="/img/next_ic_n.png" alt="" class="img_m2" /></a>
                    </div>
                    <div class="page-item">
                        <a class="page-link" href="#"><img src="/img/next_add_n.png" alt="" /></a>
                    </div>
                </div>    
            </div>
            <div id="lightbox-overlay">
                <img src="" alt="Lightbox image" id="lightbox-image" />
            </div>
        </div>
    </div>
@include('/inc/footer')

<script>
    $(function(){
        var $image = $('.gallery ul .popup_ic');
        var $lightbox = $('#lightbox-overlay');
        var $lightboximg = $('#lightbox-image');

        $image.click(function(){
            var $lightboximgsrc =$(this).siblings('.gall_img').attr('data-lightbox');

            $lightbox.addClass('visible');
            $lightboximg.attr('src',$lightboximgsrc);
        });
        $lightbox.click(function(){
            $(this).removeClass('visible');
        });


    });
</script>