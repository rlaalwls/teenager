@include('/inc/head')
@include('/inc/header')
@include('/inc/sub_header')
<div id="sub">
    <div class="board_list inner">
        @if(request()->segment(2) == 'counseling')
            <div class="sub_top">
                <p>COUNSELING CENTER</p>
                <h3>청소년 상담센터</h3>
            </div>
        @endif
        @if(request()->segment(2) == 'news')
            <div class="sub_top">
                <p>news</p>
                <h3>위원회 소식</h3>
            </div>
        @endif
        <form action="">
            <label for="">검색창</label>
            <input type="text" class="search_txt">
            <input type="submit" class="submit" value="검색">
        </form>
        <table>
            <colgroup>
                <col width="10%">
                <col width="*">
                <col width="17%">
                <col width="20%">
            </colgroup>
            <thead>
                <th>NO.</th>
                <th>제목</th>
                <th>작성자</th>
                <th>작성일</th>
            </thead>
            <tbody>
                <tr>
                    <td>17</td>
                    <td class="td_txt"><a href="/noti/news/board_view">게시판 제목 영역입니다dddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</a></td>
                    <td>관리자</td>
                    <td>21.00.00</td>
                   
                </tr>
                <tr>
                    <td>16</td>
                    <td class="td_txt"><a href="/noti/news/board_view">게시판 제목 영역입니다</a></td>
                    <td>관리자</td>
                    <td>21.00.00</td>
                   
                </tr>
                <tr>
                    <td>15</td>
                    <td class="td_txt"><a href="/noti/news/board_view">게시판 제목 영역입니다</a></td>
                    <td>관리자</td>
                    <td>21.00.00</td>
                   
                </tr>
                <tr>
                    <td>14</td>
                    <td class="td_txt"><a href="/noti/news/board_view">게시판 제목 영역입니다</a></td>
                    <td>관리자</td>
                    <td>21.00.00</td>
                   
                </tr>
                <tr>
                    <td>13</td>
                    <td class="td_txt"><a href="/noti/news/board_view">게시판 제목 영역입니다</a></td>
                    <td>관리자</td>
                    <td>21.00.00</td>
                   
                </tr>
                <tr>
                    <td>12</td>
                    <td class="td_txt"><a href="/noti/news/board_view">게시판 제목 영역입니다</a></td>
                    <td>관리자</td>
                    <td>21.00.00</td>
                   
                </tr>
                <tr>
                    <td>11</td>
                    <td class="td_txt"><a href="/noti/news/board_view">게시판 제목 영역입니다</a></td>
                    <td>관리자</td>
                    <td>21.00.00</td>
                   
                </tr>
                <tr>
                    <td>10</td>
                    <td class="td_txt"><a href="/noti/news/board_view">게시판 제목 영역입니다</a></td>
                    <td>관리자</td>
                    <td>21.00.00</td>
                   
                </tr>
                <tr>
                    <td>9</td>
                    <td class="td_txt"><a href="/noti/news/board_view">게시판 제목 영역입니다</a></td>
                    <td>관리자</td>
                    <td>21.00.00</td>
                   
                </tr>
                <tr>
                    <td>8</td>
                    <td class="td_txt"><a href="/noti/news/board_view">게시판 제목 영역입니다</a></td>
                    <td>관리자</td>
                    <td>21.00.00</td>
                   
                </tr>
                <tr>
                    <td>7</td>
                    <td class="td_txt"><a href="/noti/news/board_view">게시판 제목 영역입니다</a></td>
                    <td>관리자</td>
                    <td>21.00.00</td>
                   
                </tr>
                <tr>
                    <td>6</td>
                    <td class="td_txt"><a href="/noti/news/board_view">게시판 제목 영역입니다</a></td>
                    <td>관리자</td>
                    <td>21.00.00</td>
                   
                </tr>
                <tr>
                    <td>5</td>
                    <td class="td_txt"><a href="/noti/news/board_view">게시판 제목 영역입니다</a></td>
                    <td>관리자</td>
                    <td>21.00.00</td>
                   
                </tr>
                <tr>
                    <td>4</td>
                    <td class="td_txt"><a href="/noti/news/board_view">게시판 제목 영역입니다</a></td>
                    <td>관리자</td>
                    <td>21.00.00</td>
                   
                </tr>
                <tr>
                    <td>3</td>
                    <td class="td_txt"><a href="/noti/news/board_view">게시판 제목 영역입니다</a></td>
                    <td>관리자</td>
                    <td>21.00.00</td>
                   
                </tr>
                <tr>
                    <td>2</td>
                    <td class="td_txt"><a href="/noti/news/board_view">게시판 제목 영역입니다</a></td>
                    <td>관리자</td>
                    <td>21.00.00</td>
                   
                </tr>
                <tr>
                    <td>1</td>
                    <td class="td_txt"><a href="/noti/news/board_view">게시판 제목 영역입니다</a></td>
                    <td>관리자</td>
                    <td>21.00.00</td>
                   
                </tr>
            </tbody>
        </table>
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
</div>

@include('/inc/footer')