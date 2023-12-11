@extends('layouts.app')
@section('content')
@include('layouts.header')
    
    <div class="container">
        <div class="page-title  text-center secondary-font color2 mb-5">
            <div class="hero-search">
                <img src="{{ asset('theme') }}/assets/img/3d.png" class="img-fluid">
            </div>
            <h1 class="fs-68 fw-bold mb-3">
                SEO<span class="theme-color2">AI</span>.com Chat
            </h1>
        </div>
        <div class="chat-container">
            <div class="row align-items-start g-0">
                <div class="col-md-9">
                    <div class="text-center py-4 py-md-5">
                        <img src="{{ asset('theme') }}/assets/img/chatlogo.png" />
                        <div class="fs-4 color2 fw-bold mt-3">How can i help you today?</div>
                    </div>
                    <div class="p-lg-5 p-sm-4 p-3">
                        <div class="white-content p-4 rounded-3 border-0">
                            <div class="d-flex mb-4">
                                <img src="{{ asset('theme') }}/assets/img/img3.webp" width="46" height="46"
                                    class="me-3 rounded-circle" alt="" />
                                <div>
                                    <div class="fs-5 fw-bold color-black"> You @ chfa27</div>
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                </div>
                            </div>
                            <img src="{{ asset('theme') }}/assets/img/chatlogo.png" width="160" />
                            <p>                               
                            </p>
                             
                            <div class="d-flex">
                                <button class="btn-link btn px-1" type="submit">
                                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="20" height="22"
                                        viewBox="0 0 20 22" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.75 0H8.694C6.856 0 5.4 0 4.261 0.153C3.089 0.311 2.14 0.643 1.391 1.391C0.643 2.14 0.311 3.089 0.153 4.261C1.19209e-07 5.401 0 6.856 0 8.694V14.75C2.41393e-05 15.6434 0.318936 16.5075 0.899337 17.1867C1.47974 17.8659 2.28351 18.3157 3.166 18.455C3.303 19.219 3.568 19.871 4.098 20.402C4.7 21.004 5.458 21.262 6.358 21.384C7.225 21.5 8.328 21.5 9.695 21.5H12.805C14.172 21.5 15.275 21.5 16.142 21.384C17.042 21.262 17.8 21.004 18.402 20.402C19.004 19.8 19.262 19.042 19.384 18.142C19.5 17.275 19.5 16.172 19.5 14.805V9.695C19.5 8.328 19.5 7.225 19.384 6.358C19.262 5.458 19.004 4.7 18.402 4.098C17.871 3.568 17.219 3.303 16.455 3.166C16.3157 2.28351 15.8659 1.47974 15.1867 0.899337C14.5075 0.318936 13.6434 2.41393e-05 12.75 0ZM14.88 3.021C14.7279 2.577 14.4409 2.19166 14.0589 1.91893C13.677 1.64619 13.2193 1.49971 12.75 1.5H8.75C6.843 1.5 5.489 1.502 4.46 1.64C3.455 1.775 2.875 2.029 2.452 2.452C2.029 2.875 1.775 3.455 1.64 4.461C1.502 5.489 1.5 6.843 1.5 8.75V14.75C1.49971 15.2193 1.64619 15.677 1.91892 16.0589C2.19166 16.4408 2.577 16.7279 3.021 16.88C3 16.27 3 15.58 3 14.805V9.695C3 8.328 3 7.225 3.117 6.358C3.237 5.458 3.497 4.7 4.098 4.098C4.7 3.496 5.458 3.238 6.358 3.117C7.225 3 8.328 3 9.695 3H12.805C13.58 3 14.27 3 14.88 3.021ZM5.158 5.16C5.435 4.883 5.823 4.703 6.558 4.604C7.312 4.503 8.314 4.501 9.749 4.501H12.749C14.184 4.501 15.185 4.503 15.941 4.604C16.675 4.703 17.063 4.884 17.34 5.16C17.617 5.437 17.797 5.825 17.896 6.56C17.997 7.314 17.999 8.316 17.999 9.751V14.751C17.999 16.186 17.997 17.187 17.896 17.943C17.797 18.677 17.616 19.065 17.34 19.342C17.063 19.619 16.675 19.799 15.94 19.898C15.185 19.999 14.184 20.001 12.749 20.001H9.749C8.314 20.001 7.312 19.999 6.557 19.898C5.823 19.799 5.435 19.618 5.158 19.342C4.881 19.065 4.701 18.677 4.602 17.942C4.501 17.187 4.499 16.186 4.499 14.751V9.751C4.499 8.316 4.501 7.314 4.602 6.559C4.701 5.825 4.882 5.437 5.158 5.16Z"
                                            fill="black" fill-opacity="0.43"></path>
                                    </svg>
                                </button>
                                <button class="btn-link btn px-1" type="submit">
                                    <img src="{{ asset('theme') }}/assets/img/like.svg">
                                </button>
                                <button class="btn-link btn px-1" type="submit">
                                    <img src="{{ asset('theme') }}/assets/img/dislike.svg">
                                </button>
                                <button class="btn-link btn px-1" type="submit" style="opacity: .6;">
                                    <img src="{{ asset('theme') }}/assets/img/reload.png">
                                </button>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center my-5">
                            <div
                                class="d-flex px-3 py-2 white-content fs-5 fw-bold color-black  text-uppercase rounded-3 align-items-center">
                                <img src="{{ asset('theme') }}/assets/img/idea.png" class="me-2" />
                                Little Ideas
                            </div>
                        </div>
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="white-content p-3 rounded-3">
                                    <div class="fs-5 color-black fw-bold mb-2">Brain Storm Content Ideas</div>
                                    <div>For my new podcast on urban Design</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="white-content p-3 rounded-3">
                                    <div class="fs-5 color-black fw-bold mb-2">Recommend a dish</div>
                                    <div>To impress a date who is picky eater</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="white-content p-3 rounded-3">
                                    <div class="fs-5 color-black fw-bold mb-2">Give me Ideas</div>
                                    <div>About how to plan my new Year's resolution</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="white-content p-3 rounded-3">
                                    <div class="fs-5 color-black fw-bold mb-2">Suggest Fun Activities</div>
                                    <div>To do in-doors with my High-energy dog</div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <form class="white-content pe-2 py-2 rounded-3 d-flex">
                                <input type="text" id="question" name="question" class="bg-white border-0 py-2 px-3 flex-fill"
                                    placeholder="Message" />
                                <button  id="btn" onclick="search()" class="btn rounded-3 py-2 ms-2 text-white" style="background-color: #eef3f7;">
                                    <img src="{{ asset('theme') }}/assets/img/up-arrow.png" />
                                </button>
                            </form>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <div class="d-flex px-3 py-2 white-content fs-14 rounded-3 align-items-center">
                                SEOAI can make mistake. Consider checking important details.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 chat-sidebar p-4 text-white">
                    <img src="{{ asset('theme') }}/assets/img/chatlogo2.png" />
                    <div class="my-3 d-flex fs-5 fw-bold align-items-center">
                        <img src="{{ asset('theme') }}/assets/img/explore-icon.png" class="me-2" />
                        Explore
                    </div>
                    <button class="btn btn-outline-light fs-18 w-100 py-2 fw-bold">
                        New Chat
                    </button>
                    <div class="chat-content mt-3">
                        <div class="d-flex align-items-center fs-5 text-light">
                            Yesterday
                        </div>
                        <div class="d-flex align-items-center   chat-item">
                            Flexible Work Project Names
                            <span class="ms-2">
                                <button class="btn-link btn px-1 py-0" title="Edit"><img
                                        src="{{ asset('theme') }}/assets/img/edit-icon2.png" width="15"
                                        height="15" /></button>
                                <button class="btn-link btn px-1 py-0" title="Delete"><img
                                        src="{{ asset('theme') }}/assets/img/delete.png" height="15" /></button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center fs-5 text-light">
                            Previous 7 Dayes
                        </div>
                        <div class="d-flex align-items-center  chat-item">
                            Yelmo gigante no encontrado.
                            <span class="ms-2">
                                <button class="btn-link btn px-1 py-0" title="Edit"><img
                                        src="{{ asset('theme') }}/assets/img/edit-icon2.png"
                                        width="15" /></button>
                                <button class="btn-link btn px-1 py-0" title="Delete"><img
                                        src="{{ asset('theme') }}/assets/img/delete.png" /></button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center   chat-item">
                            Fabrication del plastico
                            <span class="ms-2">
                                <button class="btn-link btn px-1 py-0" title="Edit"><img
                                        src="{{ asset('theme') }}/assets/img/edit-icon2.png"
                                        width="15" /></button>
                                <button class="btn-link btn px-1 py-0" title="Delete"><img
                                        src="{{ asset('theme') }}/assets/img/delete.png" /></button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center fs-5 text-light">
                            Previous 30 Dayes
                        </div>
                        <div class="d-flex align-items-center   chat-item">
                            Combinacions de 4 cifras
                            <span class="ms-2">
                                <button class="btn-link btn px-1 py-0" title="Edit"><img
                                        src="{{ asset('theme') }}/assets/img/edit-icon2.png"
                                        width="15" /></button>
                                <button class="btn-link btn px-1 py-0" title="Delete"><img
                                        src="{{ asset('theme') }}/assets/img/delete.png" /></button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center   chat-item">
                            Combinacions de 4 cifras
                            <span class="ms-2">
                                <button class="btn-link btn px-1 py-0" title="Edit"><img
                                        src="{{ asset('theme') }}/assets/img/edit-icon2.png"
                                        width="15" /></button>
                                <button class="btn-link btn px-1 py-0" title="Delete"><img
                                        src="{{ asset('theme') }}/assets/img/delete.png" /></button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center fs-5 text-light">
                            Visitar Malaga: Atracciones
                        </div>
                        <div class="d-flex align-items-center   chat-item">
                            Infis.p/jueqo montana
                            <span class="ms-2">
                                <button class="btn-link btn px-1 py-0" title="Edit"><img
                                        src="{{ asset('theme') }}/assets/img/edit-icon2.png"
                                        width="15" /></button>
                                <button class="btn-link btn px-1 py-0" title="Delete"><img
                                        src="{{ asset('theme') }}/assets/img/delete.png" /></button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center   chat-item">
                            Eberggia con imanes
                            <span class="ms-2">
                                <button class="btn-link btn px-1 py-0" title="Edit"><img
                                        src="{{ asset('theme') }}/assets/img/edit-icon2.png"
                                        width="15" /></button>
                                <button class="btn-link btn px-1 py-0" title="Delete"><img
                                        src="{{ asset('theme') }}/assets/img/delete.png" /></button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center   chat-item">
                            Listo para ayudar
                            <span class="ms-2">
                                <button class="btn-link btn px-1 py-0" title="Edit"><img
                                        src="{{ asset('theme') }}/assets/img/edit-icon2.png"
                                        width="15" /></button>
                                <button class="btn-link btn px-1 py-0" title="Delete"><img
                                        src="{{ asset('theme') }}/assets/img/delete.png" /></button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center   chat-item">
                            Lorem ipsum dolor sit
                            <span class="ms-2">
                                <button class="btn-link btn px-1 py-0" title="Edit"><img
                                        src="{{ asset('theme') }}/assets/img/edit-icon2.png"
                                        width="15" /></button>
                                <button class="btn-link btn px-1 py-0" title="Delete"><img
                                        src="{{ asset('theme') }}/assets/img/delete.png" /></button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center   chat-item">
                            dignissimos laborum adipisci
                            <span class="ms-2">
                                <button class="btn-link btn px-1 py-0" title="Edit"><img
                                        src="{{ asset('theme') }}/assets/img/edit-icon2.png"
                                        width="15" /></button>
                                <button class="btn-link btn px-1 py-0" title="Delete"><img
                                        src="{{ asset('theme') }}/assets/img/delete.png" /></button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center   chat-item">
                            modi ipsa commodi earum
                            <span class="ms-2">
                                <button class="btn-link btn px-1 py-0" title="Edit"><img
                                        src="{{ asset('theme') }}/assets/img/edit-icon2.png"
                                        width="15" /></button>
                                <button class="btn-link btn px-1 py-0" title="Delete"><img
                                        src="{{ asset('theme') }}/assets/img/delete.png" /></button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center   chat-item">
                            Listo para ayudar
                            <span class="ms-2">
                                <button class="btn-link btn px-1 py-0" title="Edit"><img
                                        src="{{ asset('theme') }}/assets/img/edit-icon2.png"
                                        width="15" /></button>
                                <button class="btn-link btn px-1 py-0" title="Delete"><img
                                        src="{{ asset('theme') }}/assets/img/delete.png" /></button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center   chat-item">
                            Listo para ayudar
                            <span class="ms-2">
                                <button class="btn-link btn px-1 py-0" title="Edit"><img
                                        src="{{ asset('theme') }}/assets/img/edit-icon2.png"
                                        width="15" /></button>
                                <button class="btn-link btn px-1 py-0" title="Delete"><img
                                        src="{{ asset('theme') }}/assets/img/delete.png" /></button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center   chat-item">
                            Listo para ayudar
                            <span class="ms-2">
                                <button class="btn-link btn px-1 py-0" title="Edit"><img
                                        src="{{ asset('theme') }}/assets/img/edit-icon2.png"
                                        width="15" /></button>
                                <button class="btn-link btn px-1 py-0" title="Delete"><img
                                        src="{{ asset('theme') }}/assets/img/delete.png" /></button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center   chat-item">
                            Listo para ayudar
                            <span class="ms-2">
                                <button class="btn-link btn px-1 py-0" title="Edit"><img
                                        src="{{ asset('theme') }}/assets/img/edit-icon2.png"
                                        width="15" /></button>
                                <button class="btn-link btn px-1 py-0" title="Delete"><img
                                        src="{{ asset('theme') }}/assets/img/delete.png" /></button>
                            </span>
                        </div>
                        <div class="d-flex align-items-center   chat-item">
                            Listo para ayudar
                            <span class="ms-2">
                                <button class="btn-link btn px-1 py-0" title="Edit"><img
                                        src="{{ asset('theme') }}/assets/img/edit-icon2.png"
                                        width="15" /></button>
                                <button class="btn-link btn px-1 py-0" title="Delete"><img
                                        src="{{ asset('theme') }}/assets/img/delete.png" /></button>
                            </span>
                        </div>
                    </div>
                    <div class="d-flex mt-3 align-items-center">
                        <div>
                            <a href="" class="text-decoration-none text-white"><img
                                    src="{{ asset('theme') }}/assets/img/icon-user.png" class="me-2" /> Refer a
                                friend</a>
                        </div>
                        <span style="background-color: #f2e9a6;"
                            class="rounded-3 px-2 py-1 ms-auto fs-14 color-black">
                            New
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5 text-center py-5">
            <img src="{{ asset('theme') }}/assets/img/featured-arrow.png" alt="" />
            <div class="fs-3 theme-color2 fw-800 my-4">Do you want a complete <span class="color-black">Chat</span>
                and other tools?</div>
            <a href=""
                class="custom-button px-md-5 py-3 d-inline-block px-4 fw-800 text-white text-decoration-none fs-5"
                style="transform: none; height: auto;">Register</a>
        </div>
    </div>

 
@endsection
