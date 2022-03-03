@extends('pages.layouts.app')
<!-- navigation left -->
<nav class="navigation scroll-bar">
    <div class="container ps-0 pe-0">
        <div class="p-3 bg-white theme-dark-bg">
            <a href="#" class="bg-primary-gradiant p-3 w-100 btn-block border-0 rounded-3 text-white text-center fw-500 font-xsss"><i class="feather-edit me-2"></i> Write Message</a>
            <ul class="mt-3">
                <li class="mt-1 mb-1"><a href="#" class="bg-white theme-dark-bg p-2 w-100 border-0 rounded-3 text-dark text-grey-900 text-left fw-600 font-xsss d-flex align-items-center"><i class="feather-mail font-md btn-round-sm me-2 p-0"></i> Inbox <span class="ms-auto font-xssss text-grey-500">233</span></a></li>
                <li class="mt-1 mb-1"><a href="#" class="bg-white theme-dark-bg p-2 w-100 border-0 rounded-3 text-dark text-grey-600 text-left fw-600 font-xsss d-flex align-items-center"><i class="feather-star font-md btn-round-sm me-2 p-0"></i> Starred <span class="ms-auto font-xssss text-grey-500">1235</span></a></li>
                <li class="mt-1 mb-1"><a href="#" class="bg-white theme-dark-bg p-2 w-100 border-0 rounded-3 text-dark text-grey-600 text-left fw-600 font-xsss d-flex align-items-center"><i class="feather-send font-md btn-round-sm me-2 p-0"></i> Sent <span class="ms-auto font-xssss text-grey-500">54</span></a></li>
                <li class="mt-1 mb-1"><a href="#" class="bg-white theme-dark-bg p-2 w-100 border-0 rounded-3 text-dark text-grey-600 text-left fw-600 font-xsss d-flex align-items-center"><i class="feather-file font-md btn-round-sm me-2 p-0"></i> Draft <span class="ms-auto font-xssss text-grey-500">66</span></a></li>
                <li class="mt-1 mb-1"><a href="#" class="bg-white theme-dark-bg p-2 w-100 border-0 rounded-3 text-dark text-grey-600 text-left fw-600 font-xsss d-flex align-items-center"><i class="feather-alert-circle font-md btn-round-sm me-2 p-0"></i> Span <span class="ms-auto font-xssss text-grey-500">12</span></a></li>
                <li class="mt-1 mb-1"><a href="#" class="bg-white theme-dark-bg p-2 w-100 border-0 rounded-3 text-dark text-grey-600 text-left fw-600 font-xsss d-flex align-items-center"><i class="feather-anchor font-md btn-round-sm me-2 p-0"></i> Work <span class="ms-auto font-xssss text-grey-500">12</span></a></li>
                <li class="mt-1 mb-1"><a href="#" class="bg-white theme-dark-bg p-2 w-100 border-0 rounded-3 text-dark text-grey-600 text-left fw-600 font-xsss d-flex align-items-center"><i class="feather-trash-2 font-md btn-round-sm me-2 p-0"></i> Trash <span class="ms-auto font-xssss text-grey-500">34</span></a></li>
            </ul>
            <span class="fw-500 mt-3 font-xssss fw-700 text-uppercase ls-2 ps-3 text-grey-500">Categories</span>
            <ul class="mt-3">
                <li class="mt-1 mb-1"><a href="#" class="bg-white theme-dark-bg p-2 w-100 border-0 rounded-3 text-dark text-grey-500 text-left fw-600 font-xsss d-flex align-items-center"><span class="btn-round-xss ms-2 bg-primary me-3"></span> Primary <span class="ms-auto font-xssss text-grey-500">233</span></a></li>
                <li class="mt-1 mb-1"><a href="#" class="bg-white theme-dark-bg p-2 w-100 border-0 rounded-3 text-dark text-grey-500 text-left fw-600 font-xsss d-flex align-items-center"><span class="btn-round-xss ms-2 bg-danger me-3"></span> Social <span class="ms-auto font-xssss text-grey-500">1235</span></a></li>
                <li class="mt-1 mb-1"><a href="#" class="bg-white theme-dark-bg p-2 w-100 border-0 rounded-3 text-dark text-grey-500 text-left fw-600 font-xsss d-flex align-items-center"><span class="btn-round-xss ms-2 bg-warning me-3"></span> Works <span class="ms-auto font-xssss text-grey-500">54</span></a></li>
                <li class="mt-1 mb-1"><a href="#" class="bg-white theme-dark-bg p-2 w-100 border-0 rounded-3 text-dark text-grey-500 text-left fw-600 font-xsss d-flex align-items-center"><span class="btn-round-xss ms-2 bg-success me-3"></span> Promotions <span class="ms-auto font-xssss text-grey-500">66</span></a></li>
                <li class="mt-1 mb-1"><a href="#" class="bg-white theme-dark-bg p-2 w-100 border-0 rounded-3 text-dark text-grey-500 text-left fw-600 font-xsss d-flex align-items-center"><span class="btn-round-xss ms-2 bg-secondary me-3"></span> Friends <span class="ms-auto font-xssss text-grey-500">23</span></a></li>
                <li class="mt-1 mb-0"><a href="#" class="bg-greylight p-2 w-100 border-0 rounded-3 text-grey-500 text-left fw-600 font-xssss d-flex align-items-center"><i class="feather-plus font-sm btn-round-sm me-2 p-0"></i>  Create New Label </a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- navigation left -->
 <!-- main content -->
 <div class="main-content right-chat-active">
    <div class="middle-sidebar-bottom">
        <div class="middle-sidebar-left pe-0 ps-lg-3 ms-0 me-0" style="max-width: 100%;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="chat-wrapper p-3 w-100 position-relative scroll-bar bg-white theme-dark-bg">
                        <ul class="email-message">
                            <li>
                                <a href="{{route('emailopen')}}" class="rounded-3 bg-lightblue theme-light-bg">
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" type="checkbox" id="blankCheckbox1" value="option1" aria-label="">
                                        <label class="text-grey-500 font-xssss" for="blankCheckbox1"></label>
                                    </div>
                                    <div class="email-user">
                                        <span class="btn-round-xss ms-0 bg-success me-2"></span>
                                        <img src="images/user-12.png" alt="user" class="w35 me-2">
                                        <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">Hurin Seary</h6>
                                    </div>
                                    <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                        <i class="feather-star font-xss text-warning me-2"></i>
                                        Mobile Apps Redesign
                                    </div>
                                    <div class="email-text text-grey-500 fw-600 font-xssss">
                                        Hey Cak, Could you free now? Can you look and read the brief first before...
                                    </div>
                                    <span class="email-file">
                                        <i class="feather-paperclip font-xss btn-round-sm text-grey-500 me-2 p-0"></i>
                                    </span>
                                    <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('emailopen')}}" class="rounded-3 bg-transparent">
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" type="checkbox" id="blankCheckbox2" value="option1" aria-label="">
                                        <label class="text-grey-500 font-xssss" for="blankCheckbox2"></label>
                                    </div>
                                    <div class="email-user">
                                        <span class="btn-round-xss ms-0 bg-success me-2"></span>
                                        <img src="images/user-8.png" alt="user" class="w35 me-2">
                                        <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">Victor Exrixon</h6>
                                    </div>
                                    <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                        <i class="feather-star font-xss text-warning me-2"></i>
                                        Mobile Apps Redesign
                                    </div>
                                    <div class="email-text text-grey-500 fw-600 font-xssss">
                                        Hey Cak, Could you free now? Can you look and read the brief first before...
                                    </div>
                                    <span class="email-file">
                                        <i class="feather-paperclip font-xss btn-round-sm text-grey-500 me-2 p-0"></i>
                                    </span>
                                    <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('emailopen')}}" class="rounded-3 bg-transparent">
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" type="checkbox" id="blankCheckbox3" value="option1" aria-label="">
                                        <label class="text-grey-500 font-xssss" for="blankCheckbox3"></label>
                                    </div>
                                    <div class="email-user">
                                        <span class="btn-round-xss ms-0 bg-success me-2"></span>
                                        <img src="images/user-7.png" alt="user" class="w35 me-2">
                                        <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">Surfiya Zakir</h6>
                                    </div>
                                    <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                        <i class="feather-star font-xss text-warning me-2"></i>
                                        Mobile Apps Redesign
                                    </div>
                                    <div class="email-text text-grey-500 fw-600 font-xssss">
                                        Hey Cak, Could you free now? Can you look and read the brief first before...
                                    </div>
                                    <span class="email-file">
                                        <i class="feather-paperclip font-xss btn-round-sm text-grey-500 me-2 p-0"></i>
                                    </span>
                                    <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('emailopen')}}" class="rounded-3 bg-transparent">
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" type="checkbox" id="blankCheckbox4" value="option1" aria-label="">
                                        <label class="text-grey-500 font-xssss" for="blankCheckbox4"></label>
                                    </div>
                                    <div class="email-user">
                                        <span class="btn-round-xss ms-0 bg-dark me-2"></span>
                                        <img src="images/user-6.png" alt="user" class="w35 me-2">
                                        <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">Goria Coast</h6>
                                    </div>
                                    <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                        <i class="feather-star font-xss text-warning me-2"></i>
                                        Mobile Apps Redesign
                                    </div>
                                    <div class="email-text text-grey-500 fw-600 font-xssss">
                                        Hey Cak, Could you free now? Can you look and read the brief first before...
                                    </div>
                                    <span class="email-file">

                                    </span>
                                    <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('emailopen')}}" class="rounded-3 bg-lightblue theme-light-bg">
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" type="checkbox" id="blankCheckbox5" value="option1" aria-label="">
                                        <label class="text-grey-500 font-xssss" for="blankCheckbox5"></label>
                                    </div>
                                    <div class="email-user">
                                        <span class="btn-round-xss ms-0 bg-success me-2"></span>
                                        <img src="images/user-5.png" alt="user" class="w35 me-2">
                                        <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">Hurin Seary</h6>
                                    </div>
                                    <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                        <i class="feather-star font-xss text-warning me-2"></i>
                                        Mobile Apps Redesign
                                    </div>
                                    <div class="email-text text-grey-500 fw-600 font-xssss">
                                        Hey Cak, Could you free now? Can you look and read the brief first before...
                                    </div>
                                    <span class="email-file">
                                        <i class="feather-paperclip font-xss btn-round-sm text-grey-500 me-2 p-0"></i>
                                    </span>
                                    <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('emailopen')}}" class="rounded-3 bg-lightblue theme-light-bg">
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" type="checkbox" id="blankCheckbox6" value="option1" aria-label="">
                                        <label class="text-grey-500 font-xssss" for="blankCheckbox6"></label>
                                    </div>
                                    <div class="email-user">
                                        <span class="btn-round-xss ms-0 bg-warning me-2"></span>
                                        <span class="btn-round-sm bg-gold-gradiant me-2 ls-3 text-white font-xssss fw-700">V</span>
                                        <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">David Goria</h6>
                                    </div>
                                    <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                        <i class="feather-star font-xss text-warning me-2"></i>
                                        Mobile Apps Redesign
                                    </div>
                                    <div class="email-text text-grey-500 fw-600 font-xssss">
                                        Hey Cak, Could you free now? Can you look and read the brief first before...
                                    </div>
                                    <span class="email-file">

                                    </span>
                                    <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('emailopen')}}" class="rounded-3 bg-transparent">
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" type="checkbox" id="blankCheckbox7" value="option1" aria-label="">
                                        <label class="text-grey-500 font-xssss" for="blankCheckbox7"></label>
                                    </div>
                                    <div class="email-user">
                                        <span class="btn-round-xss ms-0 bg-success me-2"></span>
                                        <img src="images/user-3.png" alt="user" class="w35 me-2">
                                        <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">Seary Victor</h6>
                                    </div>
                                    <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                        <i class="feather-star font-xss text-warning me-2"></i>
                                        Mobile Apps Redesign
                                    </div>
                                    <div class="email-text text-grey-500 fw-600 font-xssss">
                                        Hey Cak, Could you free now? Can you look and read the brief first before...
                                    </div>
                                    <span class="email-file">
                                        <i class="feather-paperclip font-xss btn-round-sm text-grey-500 me-2 p-0"></i>
                                    </span>
                                    <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('emailopen')}}" class="rounded-3 bg-transparent">
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" type="checkbox" id="blankCheckbox8" value="option1" aria-label="">
                                        <label class="text-grey-500 font-xssss" for="blankCheckbox8"></label>
                                    </div>
                                    <div class="email-user">
                                        <span class="btn-round-xss ms-0 bg-warning me-2"></span>
                                        <img src="images/user-2.png" alt="user" class="w35 me-2">
                                        <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">Ana Seary</h6>
                                    </div>
                                    <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                        <i class="feather-star font-xss text-warning me-2"></i>
                                        Mobile Apps Redesign
                                    </div>
                                    <div class="email-text text-grey-500 fw-600 font-xssss">
                                        Hey Cak, Could you free now? Can you look and read the brief first before...
                                    </div>
                                    <span class="email-file">

                                    </span>
                                    <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('emailopen')}}" class="rounded-3 bg-transparent">
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" type="checkbox" id="blankCheckbox9" value="option1" aria-label="">
                                        <label class="text-grey-500 font-xssss" for="blankCheckbox9"></label>
                                    </div>
                                    <div class="email-user">
                                        <span class="btn-round-xss ms-0 bg-success me-2"></span>
                                        <span class="btn-round-sm bg-primary-gradiant me-2 ls-3 text-white font-xssss fw-700">UD</span>
                                        <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">Studio Express</h6>
                                    </div>
                                    <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                        <i class="feather-star font-xss text-warning me-2"></i>
                                        Mobile Apps Redesign
                                    </div>
                                    <div class="email-text text-grey-500 fw-600 font-xssss">
                                        Hey Cak, Could you free now? Can you look and read the brief first before...
                                    </div>
                                    <span class="email-file">
                                        <i class="feather-paperclip font-xss btn-round-sm text-grey-500 me-2 p-0"></i>
                                    </span>
                                    <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('emailopen')}}" class="rounded-3 bg-lightblue theme-light-bg">
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" type="checkbox" id="blankCheckbox10" value="option1" aria-label="">
                                        <label class="text-grey-500 font-xssss" for="blankCheckbox10"></label>
                                    </div>
                                    <div class="email-user">
                                        <span class="btn-round-xss ms-0 bg-warning me-2"></span>
                                        <span class="btn-round-sm bg-gold-gradiant me-2 ls-3 text-white font-xssss fw-700">V</span>
                                        <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">David Goria</h6>
                                    </div>
                                    <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                        <i class="feather-star font-xss text-warning me-2"></i>
                                        Mobile Apps Redesign
                                    </div>
                                    <div class="email-text text-grey-500 fw-600 font-xssss">
                                        Hey Cak, Could you free now? Can you look and read the brief first before...
                                    </div>
                                    <span class="email-file">

                                    </span>
                                    <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('emailopen')}}" class="rounded-3 bg-transparent">
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" type="checkbox" id="blankCheckbox11" value="option1" aria-label="">
                                        <label class="text-grey-500 font-xssss" for="blankCheckbox11"></label>
                                    </div>
                                    <div class="email-user">
                                        <span class="btn-round-xss ms-0 bg-success me-2"></span>
                                        <img src="images/user-3.png" alt="user" class="w35 me-2">
                                        <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">Seary Victor</h6>
                                    </div>
                                    <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                        <i class="feather-star font-xss text-warning me-2"></i>
                                        Mobile Apps Redesign
                                    </div>
                                    <div class="email-text text-grey-500 fw-600 font-xssss">
                                        Hey Cak, Could you free now? Can you look and read the brief first before...
                                    </div>
                                    <span class="email-file">
                                        <i class="feather-paperclip font-xss btn-round-sm text-grey-500 me-2 p-0"></i>
                                    </span>
                                    <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('emailopen')}}" class="rounded-3 bg-transparent">
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" type="checkbox" id="blankCheckbox12" value="option1" aria-label="">
                                        <label class="text-grey-500 font-xssss" for="blankCheckbox12"></label>
                                    </div>
                                    <div class="email-user">
                                        <span class="btn-round-xss ms-0 bg-warning me-2"></span>
                                        <img src="images/user-2.png" alt="user" class="w35 me-2">
                                        <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">Ana Seary</h6>
                                    </div>
                                    <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                        <i class="feather-star font-xss text-warning me-2"></i>
                                        Mobile Apps Redesign
                                    </div>
                                    <div class="email-text text-grey-500 fw-600 font-xssss">
                                        Hey Cak, Could you free now? Can you look and read the brief first before...
                                    </div>
                                    <span class="email-file">

                                    </span>
                                    <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('emailopen')}}" class="rounded-3 bg-transparent">
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" type="checkbox" id="blankCheckbox13" value="option1" aria-label="">
                                        <label class="text-grey-500 font-xssss" for="blankCheckbox13"></label>
                                    </div>
                                    <div class="email-user">
                                        <span class="btn-round-xss ms-0 bg-success me-2"></span>
                                        <span class="btn-round-sm bg-primary-gradiant me-2 ls-3 text-white font-xssss fw-700">UD</span>
                                        <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">Studio Express</h6>
                                    </div>
                                    <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                        <i class="feather-star font-xss text-warning me-2"></i>
                                        Mobile Apps Redesign
                                    </div>
                                    <div class="email-text text-grey-500 fw-600 font-xssss">
                                        Hey Cak, Could you free now? Can you look and read the brief first before...
                                    </div>
                                    <span class="email-file">
                                        <i class="feather-paperclip font-xss btn-round-sm text-grey-500 me-2 p-0"></i>
                                    </span>
                                    <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- main content -->
