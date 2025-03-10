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
                        <div class="chat-wrapper p-0 w-100 position-relative scroll-bar bg-white theme-dark-bg">
                            <div class="chat-wrapper pt-0 w-100 position-relative scroll-bar">
                            <div class="chat-body p-lg-4 p-3 mt-lg-3 mt-0">
                                <div class="card dark-bg-transparent border-0 w-100 p-0 mb-3 shadow-none">
                                    <div class="card-body p-0">
                                        <h6 class="fw-600 text-grey-500 font-xsssss">Today, 16th September 2020, 11:45 </h6>
                                        <h2 class="font-sm text-grey-900 fw-600">Meeting World</h2>
                                    </div>
                                </div>
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default p-0 bg-transparent border-bottom rounded-0">
                                        <div class="panel-heading  pb-2" role="tab" id="headingOne">
                                            <a class="panel-title fw-400 mb-0 accordion-toggle icon-none d-flex justify-content-between pe-0 collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                <figure class="avatar me-2 mb-0 w35 mt-1 pt-1"><img src="images/user-8.png" alt="image" class="float-right shadow-sm rounded-circle w-100"></figure>
                                                <span class="font-xssss text-grey-700 pt-2 mt-1 ps-2 fw-700 mb-0 me-auto text-dark">Aenni Mirenda </span>
                                                <span class="font-xssss text-grey-500 pt-2 mt-1 ps-2 fw-600 mb-0 ms-auto">14.09.2020 10:23</span>

                                            </a>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse in collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                            <p class="text-grey-600 mb-4 font-xsss lh-28 fw-500 mt-3">Hi Aenni, <br> <br> All individual Framer subscriptions have been grandfathered into a Pro plan at your existing rate. If you were on a Small Team plan, then all 5 seats have been converted over to Pro seats at your existing rate. <br><br> Regards,<br>Jessica </p>
                                        </div>
                                    </div>
                                    <div class="panel panel-default p-0 mb-0 bg-transparent border-bottom rounded-0">
                                        <div class="panel-heading pb-2" role="tab" id="headingTwo">
                                            <a class="panel-title fw-400 mb-0 accordion-toggle icon-none collapsed d-flex justify-content-between pe-0" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <figure class="avatar me-2 mb-0 w35 mt-1 pt-1"><img src="images/icon2.png" alt="image" class="float-left shadow-none rounded-circle w-75 mt-1"></figure>
                                                <span class="font-xssss text-grey-700 pt-2 mt-1 ps-2 fw-700 mb-0 me-auto text-dark">You</span>
                                                <span class="font-xssss text-grey-500 pt-2 mt-1 ps-2 fw-600 mb-0 ms-auto">14.09.2020 11:45</span>

                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body pt-4">
                                                <p class="text-grey-600 mb-4 font-xsss lh-28 fw-500 mt-3">Hi Aenni, <br> <br> All individual Framer subscriptions have been grandfathered into a Pro plan at your existing rate. If you were on a Small Team plan, then all 5 seats have been converted over to Pro seats at your existing rate. <br><br> Regards,<br>Jessica </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default p-0 bg-transparent rounded-0">
                                        <div class="panel-heading pt-1 pb-2" role="tab" id="headingThree">
                                            <a class="panel-title fw-400 mb-0 accordion-toggle icon-none d-flex justify-content-between pe-0" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                <figure class="avatar me-2 mb-0 w35 mt-1 pt-1"><img src="images/user-8.png" alt="image" class="float-right shadow-sm rounded-circle w-100"></figure>
                                                <span class="font-xssss text-grey-700 pt-2 mt-1 ps-2 fw-700 mb-0 me-auto text-dark">Aenni Mirenda </span>
                                                <span class="font-xssss text-grey-500 pt-2 mt-1 ps-2 fw-600 mb-0 ms-auto">14.09.2020 12:23</span>

                                            </a>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="headingThree">
                                            <p class="text-grey-600 mb-4 font-xsss lh-28 fw-500 mt-3">Hi Aenni, <br> <br> All individual Framer subscriptions have been grandfathered into a Pro plan at your existing rate. If you were on a Small Team plan, then all 5 seats have been converted over to Pro seats at your existing rate. <br><br> Regards,<br>Jessica </p>
                                            <textarea class="form-control mb-5 p-3 h100 bg-greylight lh-16" rows="5" placeholder="Write your message..."></textarea>
                                            <p class="mb-5"></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="chat-bottom dark-bg p-3 mb-3 border-top border-bottom bor-0 theme-dark-bg" style="width: 98%;">
                            <form class="chat-form d-block overflow-hidden">
                                <button class="bg-dark border-0 btn-round-md float-left d-lg-block d-none"><i class="ti-microphone text-white lh-4 font-xs"></i></button>
                                <button class="bg-dark border-0 btn-round-md ms-1 float-left"><i class="ti-clip text-white lh-4 font-xs"></i></button>
                                <button class="bg-dark border-0 btn-round-md ms-1 float-left"><i class="ti-image text-white lh-4 font-xs"></i></button>
                                <button class="bg-current border-0 p-0 float-right w200 text-white fw-600 font-xssss text-uppercase">Send</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- main content -->
