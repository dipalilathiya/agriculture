<nav class="shedow sticky">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-xl-4 col-lg-2 col-sm-3 d-flex h-100">
                <img src="/img/LOGO.png" class="img-fluid h-100" alt="">
                <div class="border m-4 me-2 d-xl-block d-sm-none"></div>
                <div class="d-flex flex-column d-xl-flex d-sm-none">
                    <span class="mt-4 text-white fw-bold">Need I help? Talk to an Expert</span>
                    <span class="text-white fw-bold mt-2 fw-bold text-primary">+91 8160600313</span>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-sm-0 d-sm-none d-lg-flex h-100 d-flex justify-content-end">
                <ul class="list-inline align-items-center d-flex">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('tools')}}">Tools</a></li>
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                    <li><a href="{{route('blog')}}">Blog</a></li>
                </ul>
            </div>
            <div class="col-md-9 col-sm-9 col-lg-3 h-100 align-items-center d-flex justify-content-end">
                <a href="{{route('Cart')}}"><i class="fa-solid fa-cart-shopping text-primary fs-4 hover"></i></a>
                <a href="{{route('logout')}}" class="btn bg-primary text-white fw-bold ms-5">Log Out</a>
                <img src="/img/hame.png" class="img-fluid d-none d-lg-none d-sm-block ms-5"
                style="height: 50px; width: 50px;" alt="">
            </div>
        </div>
    </div>
</nav>