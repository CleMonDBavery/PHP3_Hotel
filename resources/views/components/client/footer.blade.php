<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class=" col-md-4">
                    <h3>Liên Hệ </h3>
                    <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Ninh Kiều, Cần Thơ</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> +84 364911491</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> demo@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Trang</h3>
                    <ul class="link_menu">
                        <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home') }}">Trang chủ</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('about') }}">Giới thiệu</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('room') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('room') }}">Phòng</a>
                        </li>
                        {{--                                <li class="nav-item {{ request()->routeIs('gallery') ? 'active' : '' }}">--}}
                        {{--                                    <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>--}}
                        {{--                                </li>--}}
                        <li class="nav-item {{ request()->routeIs('blog') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('blog') }}">Bài viết</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('contact') }}">Liên hệ</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('account') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('account') }}">Tài khoản</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Đăng kí nhận thông tin</h3>
                    <form class="bottom_form">
                        <input class="enter" placeholder="Email" type="text" name="Email">
                        <button class="sub_btn">Đăng kí</button>
                    </form>
                    <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">

                        <p>
                            © 2024 Keto
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
