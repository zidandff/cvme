<x-app>
    @slot('styles')
        <link rel="stylesheet" href="/css/glide.min.css">
        <link rel="stylesheet" href="/css/index.css">
    @endslot
    <div class="container">
        <div class="row ">
            <div class="col-lg-6 col-md-10 mx-auto mx-lg-0">
                <!-- === === === NAVBAR === === === -->
                <x-navbar>
                    @auth
                        <div class="dropdown">
                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Halo {{ auth()->user()->name }}
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="btn dropdown-item" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path><path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path></svg>
                                        Logout
                                    </button>
                                </form>
                            </ul>
                        </div>
                    @else
                        <a href="/login">LOGIN</a>
                    @endauth
                </x-navbar>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-6 col-md-10 mx-auto mx-lg-0">
                <!-- === === === HEADER === === === -->
                <header>
                    <h1>Buat CV Profesional Dengan Cepat Dan Mudah!</h1>
                    <p class="mt-3 mb-5">Gak perlu bingung lagi kalau perlu CV untuk lamar kerja, Dengan pembuat CV online kami, siapa saja bisa membuat CV profesional dengan mudah dan cepat.</p>
                    <a href="/resumes" class="btn btn-custom mb-4">Buat CV</a>
                </header>
                <!-- === === === STEPS === === === -->
                <div class="steps row my-5">
                    <div class="step-item col-4">
                        <div class="step-icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M29.3333 2.66667V8H2.66667V2.66667H29.3333ZM29.3333 0H2.66667C1.95942 0 1.28115 0.280951 0.781048 0.781048C0.280951 1.28115 0 1.95942 0 2.66667V8C0 8.70724 0.280951 9.38552 0.781048 9.88562C1.28115 10.3857 1.95942 10.6667 2.66667 10.6667H29.3333C30.0406 10.6667 30.7189 10.3857 31.219 9.88562C31.719 9.38552 32 8.70724 32 8V2.66667C32 1.95942 31.719 1.28115 31.219 0.781048C30.7189 0.280951 30.0406 0 29.3333 0Z" fill="#BDA249"/><path d="M8 16V29.3333H2.66667V16H8ZM8 13.3333H2.66667C1.95942 13.3333 1.28115 13.6143 0.781048 14.1144C0.280951 14.6145 0 15.2928 0 16V29.3333C0 30.0406 0.280951 30.7188 0.781048 31.2189C1.28115 31.719 1.95942 32 2.66667 32H8C8.70724 32 9.38552 31.719 9.88562 31.2189C10.3857 30.7188 10.6667 30.0406 10.6667 29.3333V16C10.6667 15.2928 10.3857 14.6145 9.88562 14.1144C9.38552 13.6143 8.70724 13.3333 8 13.3333Z" fill="#BDA249"/><path d="M29.3333 16V29.3333H16V16H29.3333ZM29.3333 13.3333H16C15.2927 13.3333 14.6145 13.6143 14.1144 14.1144C13.6143 14.6145 13.3333 15.2928 13.3333 16V29.3333C13.3333 30.0406 13.6143 30.7188 14.1144 31.2189C14.6145 31.719 15.2927 32 16 32H29.3333C30.0406 32 30.7188 31.719 31.2189 31.2189C31.719 30.7188 32 30.0406 32 29.3333V16C32 15.2928 31.719 14.6145 31.2189 14.1144C30.7188 13.6143 30.0406 13.3333 29.3333 13.3333Z" fill="#BDA249"/></svg>
                        </div>
                        <span>Pilih Tema/Template</span>
                    </div>

                    <div class="step-item col-4">
                        <div class="step-icon">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.4807 5.53243L28.4676 9.51741L24.4807 5.53243ZM27.0445 2.0218L16.2642 12.8021C15.7071 13.3584 15.3273 14.0671 15.1724 14.8389L14.1766 19.8234L19.1611 18.8257C19.9329 18.6714 20.6407 18.293 21.1979 17.7358L31.9782 6.9555C32.3022 6.63155 32.5591 6.24696 32.7344 5.8237C32.9098 5.40044 33 4.94679 33 4.48865C33 4.03051 32.9098 3.57686 32.7344 3.1536C32.5591 2.73034 32.3022 2.34575 31.9782 2.0218C31.6542 1.69785 31.2697 1.44088 30.8464 1.26556C30.4231 1.09024 29.9695 1 29.5113 1C29.0532 1 28.5996 1.09024 28.1763 1.26556C27.753 1.44088 27.3685 1.69785 27.0445 2.0218V2.0218Z" stroke="#BDA249" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M29.2356 23.5881V29.2353C29.2356 30.2337 28.8389 31.1913 28.1329 31.8973C27.4269 32.6034 26.4693 33 25.4708 33H4.76474C3.76627 33 2.80869 32.6034 2.10267 31.8973C1.39664 31.1913 1 30.2337 1 29.2353V8.52916C1 7.53069 1.39664 6.57311 2.10267 5.86709C2.80869 5.16106 3.76627 4.76442 4.76474 4.76442H10.4119" stroke="#BDA249" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <span>Sesuaikan CV-mu</span>
                    </div>

                    <div class="step-item col-4">
                        <div class="step-icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.05733 13.9447C7.87086 13.7582 7.74387 13.5206 7.69241 13.262C7.64096 13.0034 7.66735 12.7353 7.76825 12.4917C7.86915 12.248 8.04003 12.0398 8.25928 11.8933C8.47853 11.7467 8.7363 11.6685 9 11.6685H14.6667V1.33333C14.6667 0.979711 14.8071 0.640573 15.0572 0.390525C15.3072 0.140476 15.6464 0 16 0C16.3536 0 16.6928 0.140476 16.9428 0.390525C17.1929 0.640573 17.3333 0.979711 17.3333 1.33333V11.6683H23C23.2637 11.6683 23.5216 11.7465 23.7408 11.8931C23.9601 12.0396 24.131 12.2479 24.2319 12.4915C24.3328 12.7352 24.3592 13.0033 24.3077 13.262C24.2562 13.5206 24.1292 13.7582 23.9427 13.9447L16.9427 20.943C16.6926 21.193 16.3536 21.3334 16 21.3334C15.6464 21.3334 15.3074 21.193 15.0573 20.943L8.05733 13.9447ZM30.6667 18.6667C30.313 18.6667 29.9739 18.8071 29.7239 19.0572C29.4738 19.3072 29.3333 19.6464 29.3333 20V29.3333H2.66667V20C2.66667 19.6464 2.52619 19.3072 2.27614 19.0572C2.02609 18.8071 1.68696 18.6667 1.33333 18.6667C0.979711 18.6667 0.640573 18.8071 0.390525 19.0572C0.140476 19.3072 0 19.6464 0 20V29.3333C0.000794036 30.0403 0.282001 30.7181 0.781926 31.2181C1.28185 31.718 1.95967 31.9992 2.66667 32H29.3333C30.0403 31.9992 30.7181 31.718 31.2181 31.2181C31.718 30.7181 31.9992 30.0403 32 29.3333V20C32 19.6464 31.8595 19.3072 31.6095 19.0572C31.3594 18.8071 31.0203 18.6667 30.6667 18.6667Z" fill="#BDA249"/></svg>
                        </div>
                        <span>Download ke PDF</span>
                    </div>
                </div>

            </div>

            <div class="py-4">
                &copy;2021 CVme is created by <a href="https://github.com/zidandff">Zidan</a>
            </div>
        
        </div>
    </div>
    <div class="background-right d-none d-lg-block">

        <div class="glide-home">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides">
                <li class="glide__slide">
                    <img src="/images/ats.jpg" alt="">
                </li>
                <li class="glide__slide">
                    <img src="/images/simple.jpg" alt="">
                </li>
                <li class="glide__slide">
                    <img src="/images/modern.jpg" alt="">
                </li>
              </ul>
            </div>
        </div>

    </div>

    @slot('scripts')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <script src="/js/glide.min.js"></script>
        <script src="/js/glide_instance.js"></script>
    @endslot
</x-app>