<section class="backGroundVideo position-absolute w-100 h-100 overflow-hidden">
    <div class="position-absolute w-100 h-100" style="background-color: #000000a6;"></div>
    <video class="lightVideo" id="videoSource" src="{{ asset('uploads/') }}/{{$header->video1}}"
        autoplay loop muted></video>
    <!-- <video autoplay loop muted>
 <source class="lightVideo" id="videoSource" src="./assets/videos/header-bg-main-dark.mp4" type="video/mp4">
</video> -->
</section>

<section class="contentLayer position-absolute w-100 h-100 zIndex-40">
    <div class="contentLayerBorder w-100 h-100 position-relative" data-aos="fade">
        <a href="./index.html">
            <svg class="position-relative zIndex-60 circlePosition" xmlns="http://www.w3.org/2000/svg"
                width="27.098" height="27.098" viewBox="0 0 27.098 27.098">
                <circle class="whiteFillTheme" id="Ellipse_447" data-name="Ellipse 447" cx="13.549" cy="13.549"
                    r="13.549" fill="#fff" />
            </svg>
        </a>
        <!-- NavBar -->
        <nav class="navbar navbarPosition navbar-light d-block p-0 text-end">
            <button
                class="navbar-toggler navButton rounded-0 shadow-none position-absolute navsBtn w-51px h-51px p-0 zIndex-60"
                type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="31.406" height="23" viewBox="0 0 31.406 23">
                    <g id="Group_1791" data-name="Group 1791" transform="translate(-2674.773 3140.753)">
                        <line class="whiteStrokeTheme" id="Line_204" data-name="Line 204" x2="31.406"
                            transform="translate(2674.773 -3140.253)" fill="none" stroke="#fff"
                            stroke-width="1" />
                        <line class="whiteStrokeTheme" id="Line_205" data-name="Line 205" x2="31.406"
                            transform="translate(2674.773 -3129.253)" fill="none" stroke="#fff"
                            stroke-width="1" />
                        <line class="whiteStrokeTheme" id="Line_206" data-name="Line 206" x2="31.406"
                            transform="translate(2674.773 -3118.253)" fill="none" stroke="#fff"
                            stroke-width="1" />
                    </g>
                </svg>

            </button>
            <div class="collapse navbar-collapse fade position-absolute w-100 h-100 top-0 zIndex-50"
                id="navbarSupportedContent">
                <ul
                    class="navbar-nav me-auto mb-2 mb-lg-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                    <li class="layerActiveNav position-absolute w-100 top-0 start-0 position-relative zIndex-10">
                    </li>
                    <li
                        class="nav-item headerNavLink d-flex justify-content-center align-items-center w-100 position-relative zIndex-20">
                        <a class="nav-link p-0 fw-bolder text-uppercase w-100 h-100 d-flex justify-content-center align-items-center active"
                            aria-current="page" href="./index.html">Home</a>
                    </li>
                    <li
                        class="nav-item headerNavLink d-flex justify-content-center align-items-center w-100 position-relative zIndex-20">
                        <a class="nav-link p-0 fw-bolder text-white text-uppercase w-100 h-100 d-flex justify-content-center align-items-center"
                            href="./about.html">About</a>
                    </li>
                    <li
                        class="nav-item headerNavLink d-flex justify-content-center align-items-center w-100 position-relative zIndex-20">
                        <a class="nav-link p-0 fw-bolder text-white text-uppercase w-100 h-100 d-flex justify-content-center align-items-center"
                            href="./services.html">Services</a>
                    </li>
                    <li
                        class="nav-item headerNavLink d-flex justify-content-center align-items-center w-100 position-relative zIndex-20">
                        <a class="nav-link p-0 fw-bolder text-white text-uppercase w-100 h-100 d-flex justify-content-center align-items-center"
                            href="./clients.html">Clients</a>
                    </li>
                    <li
                        class="nav-item headerNavLink d-flex justify-content-center align-items-center w-100 position-relative zIndex-20">
                        <a class="nav-link p-0 fw-bolder text-white text-uppercase w-100 h-100 d-flex justify-content-center align-items-center"
                            href="./works.html">Works</a>
                    </li>
                    <li
                        class="nav-item headerNavLink d-flex justify-content-center align-items-center w-100 position-relative zIndex-20">
                        <a class="nav-link p-0 fw-bolder text-white text-uppercase w-100 h-100 d-flex justify-content-center align-items-center"
                            href="./contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- TextContent -->
        <div class="textContent position-absolute px-4 px-md-0">
            <div class="container">
                <p class="d-none d-md-block text-uppercase text-white fs-45px ft-Gilroy-Thin"
                    style="margin-bottom: -38px;">
                    {{{$header->paragraph1}}}</p>
                <p class="d-block d-md-none text-uppercase text-white fs-24px ft-Gilroy-Thin"
                    style="margin-bottom: -6px;">
                    {{$header->paragraph1}}</p>

                <div class="d-md-flex flex-wrap justify-content-between mb-4">
                    <p
                        class="d-none d-md-block text-uppercase text-white fs-90px mb-0 me-lg-5 ft-Gilroy-ExtraBold">
                        {{$header->title}}
                    </p>
                    <p class="d-block d-md-none text-uppercase text-white fs-41px mb-0 ft-Gilroy-ExtraBold">
                        {{$header->title}}
                    </p>
                    <div class="d-flex flex-column justify-content-end">
                        <div class="d-none d-md-block">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="fs-15px text-uppercase mb-0 text-secondary text-justify pe-md-5"
                                    style="max-width: 600px;">
                                    {{$header->paragraph2}}
                                </p>
                                <a id="aboutBtn" class="ms-5 text-decoration-none position-relative zIndex-60"
                                    href="./about.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="98.229" height="98.39"
                                        viewBox="0 0 98.229 98.39">
                                        <path id="Ellipse_377" data-name="Ellipse 377"
                                            d="M1639.161,1035.329a48.7,48.7,0,1,1-.075,8.768"
                                            transform="translate(-1638.588 -990.936)" fill="none" stroke="#fff"
                                            stroke-miterlimit="10" stroke-width="2" />
                                    </svg>
                                    <svg id="aboutBtnArrow" class="position-absolute"
                                        xmlns="http://www.w3.org/2000/svg" width="82.485" height="12.833"
                                        viewBox="0 0 82.485 12.833">
                                        <g id="Group_1799" data-name="Group 1799"
                                            transform="translate(-1609.464 -1033.531)">
                                            <path id="Path_4427" data-name="Path 4427"
                                                d="M1685.18,1033.884l6.062,6.063-6.063,6.063" fill="none"
                                                stroke="#fff" stroke-miterlimit="10" stroke-width="2" />
                                            <path id="Path_4428" data-name="Path 4428"
                                                d="M1609.464,1039.946h81.779" fill="none" stroke="#fff"
                                                stroke-miterlimit="10" stroke-width="2" />
                                        </g>
                                    </svg>
                                    <span id="aboutBtnWord"
                                        class="ft-Gilroy-bold fade fs-14px text-white text-uppercase position-absolute">about</span>
                                </a>
                            </div>
                        </div>
                        <div class="d-block d-md-none">
                            <p class="fs-10px text-uppercase mb-0 text-white text-start text-justify">
                                Laqtah for production is a company that specializes in providing high-quality
                                photography, design services including motion graphics and drawings, app
                                development, accounts management, and marketing strategies. It consists of a
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-block">
                    <svg class="playBtnOne" xmlns="http://www.w3.org/2000/svg" width="98.391" height="98.391"
                        viewBox="0 0 98.391 98.391">
                        <g id="Group_1791" data-name="Group 1791" transform="translate(-195.249 -854.217)">
                            <path id="Path_4400" data-name="Path 4400"
                                d="M107.671,168.1a.555.555,0,0,0-.591-.035.6.6,0,0,0-.3.528v17.915a.6.6,0,0,0,.305.528.55.55,0,0,0,.268.069.558.558,0,0,0,.323-.1l12.61-8.957a.6.6,0,0,0,.25-.493Zm.25,17.278,4.758-1.946,6.261-5.881Z"
                                transform="translate(132.396 727.857)" fill="#fff" />
                            <g id="Group_1785" data-name="Group 1785"
                                transform="translate(1230.885 846.474) rotate(180)">
                                <circle id="Ellipse_377" data-name="Ellipse 377" cx="48.695" cy="48.695"
                                    r="48.695" transform="translate(937.745 -105.634)" fill="none" stroke="#fff"
                                    stroke-miterlimit="10" stroke-width="1" />
                            </g>
                        </g>
                    </svg>

                    <a class="text-decoration-none d-inline-block position-absolute" style="left: 12px;"
                        type="button" data-bs-toggle="modal" data-bs-target="#aboutUsVideo">
                        <div class="d-flex justify-content-center align-items-center">
                            <div
                                class="d-flex justify-content-center align-items-center playBtnTwo  border border-2 border-white rounded-circle w-98px h-98px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13.756" height="19.109"
                                    viewBox="0 0 13.756 19.109">
                                    <path id="Path_4400" data-name="Path 4400"
                                        d="M107.671,168.1a.555.555,0,0,0-.591-.035.6.6,0,0,0-.3.528v17.915a.6.6,0,0,0,.305.528.55.55,0,0,0,.268.069.558.558,0,0,0,.323-.1l12.61-8.957a.6.6,0,0,0,.25-.493Zm.25,17.278,4.758-1.946,6.261-5.881Z"
                                        transform="translate(-106.775 -168)" fill="#fff" />
                                </svg>
                            </div>
                            <span class="ft-Gilroy-bold fs-20px text-white ps-2 text-uppercase">Play</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Languages -->
        <div class="languagesConverter position-absolute d-flex flex-column border border-white">
            <a class=" w-100 h-100 d-flex justify-content-center align-items-center text-decoration-none ft-Gilroy-ExtraBold langActive"
                href="">
                A
            </a>
            <a class=" w-100 h-100 d-flex justify-content-center align-items-center text-decoration-none ft-Gilroy-ExtraBold"
                href="">
                <svg id="Group_929" data-name="Group 929" xmlns="http://www.w3.org/2000/svg" width="6.655"
                    height="10.999" viewBox="0 0 6.655 10.999">
                    <path id="Path_4416" data-name="Path 4416"
                        d="M-368.188-1437.652a4.354,4.354,0,0,1-6.255-2.83,2.542,2.542,0,0,1,.943-2.785,2.926,2.926,0,0,1-1.258-1.8c-.583-2.707,1.955-3.6,4.572-2.784l.371,1.774c-1.787-.618-3.033-.09-2.8,1.055a1.511,1.511,0,0,0,1.684,1.2h1.6l.414,1.943h-2.28c-.909,0-1.528.438-1.325,1.393.268,1.257,2.347,1.864,3.964,1.079Z"
                        transform="translate(374.843 1448.142)" fill="#fff" />
                </svg>
            </a>
        </div>

        <!-- laqtaFor -->
        <div class="laqtaFor d-none d-lg-block position-absolute">
            <p class="mb-0 fs-15px text-uppercase">{{$header->slider}}</p>
        </div>

        <!-- ScrollDown -->
        <a href="#secondSetion">
            <svg class="scrollIcon d-none d-md-block" xmlns="http://www.w3.org/2000/svg" width="46" height="50"
                viewBox="0 0 45.901 64.852">
                <g id="Group_945" data-name="Group 945" transform="translate(-1791.448 2233.84)">
                    <g id="Group_850" data-name="Group 850">
                        <g id="Group_849" data-name="Group 849">
                            <path id="Path_4344" data-name="Path 4344"
                                d="M1814.4-2233.84a23.156,23.156,0,0,0-22.948,23.307v18.56a22.951,22.951,0,0,0,22.915,22.985,22.949,22.949,0,0,0,22.985-22.914v-18.631A23.155,23.155,0,0,0,1814.4-2233.84Zm18.631,41.939a18.633,18.633,0,0,1-18.364,18.9,18.635,18.635,0,0,1-18.9-18.365c0-.2,0-.4,0-.606v-18.56a18.636,18.636,0,0,1,18.271-18.993,18.633,18.633,0,0,1,18.992,18.27q.008.362,0,.723Z"
                                fill="#fff" />
                        </g>
                    </g>
                    <g id="Group_852" data-name="Group 852">
                        <g id="Group_851" data-name="Group 851">
                            <path id="Path_4345" data-name="Path 4345"
                                d="M1814.392-2216a2.158,2.158,0,0,0-2.158,2.158h0v7.553a2.159,2.159,0,0,0,2.155,2.161,2.157,2.157,0,0,0,2.161-2.154v-7.56A2.158,2.158,0,0,0,1814.392-2216Z"
                                fill="#fff" />
                        </g>
                    </g>
                </g>
            </svg>
        </a>
        <div class="d-block d-md-none position-absolute container px-4" style="bottom: 50px;">
            <svg style="left: 30px;
     transform: translateX(30px);" class="playBtnOne" xmlns="http://www.w3.org/2000/svg" width="60.92"
                height="60.92" viewBox="0 0 60.92 60.92">
                <g id="Group_1799" data-name="Group 1799" transform="translate(20124.75 -16945.334)">
                    <g id="Group_1785" data-name="Group 1785"
                        transform="translate(-20064.33 17005.754) rotate(180)">
                        <circle id="Ellipse_377" data-name="Ellipse 377" cx="29.96" cy="29.96" r="29.96"
                            fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1" />
                    </g>
                    <path id="Path_4400" data-name="Path 4400"
                        d="M107.287,168.06a.318.318,0,0,0-.338-.02.344.344,0,0,0-.174.3v10.245a.343.343,0,0,0,.175.3.314.314,0,0,0,.153.04.319.319,0,0,0,.185-.059l7.211-5.122a.346.346,0,0,0,.143-.282Zm.143,9.88,2.721-1.113,3.581-3.363Z"
                        transform="translate(-20204.012 16802.33)" fill="#fff" />
                </g>
            </svg>
            <a class="text-decoration-none d-inline-block position-absolute" type="button" data-bs-toggle="modal"
                data-bs-target="#aboutUsVideo" style="left: 30px;transform: translateX(30px);">
                <div class="d-flex justify-content-center align-items-center">
                    <div
                        class="d-flex justify-content-center align-items-center playBtnTwo  border border-2 border-white rounded-circle w-60px h-60px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7.865" height="10.928"
                            viewBox="0 0 7.865 10.928">
                            <path id="Path_4400" data-name="Path 4400"
                                d="M107.287,168.06a.318.318,0,0,0-.338-.02.344.344,0,0,0-.174.3v10.245a.343.343,0,0,0,.175.3.314.314,0,0,0,.153.04.319.319,0,0,0,.185-.059l7.211-5.122a.346.346,0,0,0,.143-.282Zm.143,9.88,2.721-1.113,3.581-3.363Z"
                                transform="translate(-106.775 -168)" fill="#fff" />
                        </svg>

                    </div>
                    <span class="ft-Gilroy-bold fs-10px text-white ps-2 text-uppercase">Play</span>
                </div>
            </a>
        </div>
    </div>
</section>