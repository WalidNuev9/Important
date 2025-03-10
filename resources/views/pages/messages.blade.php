@extends('pages.layouts.app')
@include('partials.sidebarLeft')
<!-- main content -->
<div class="main-content right-chat-active">

    <div class="middle-sidebar-bottom">
        <div class="middle-sidebar-left pe-0 ps-lg-3 ms-0 me-0" style="max-width: 100%;">
            <div class="row">


                <div class="col-lg-12 position-relative">
                    <div class="chat-wrapper pt-0 w-100 position-relative scroll-bar bg-white theme-dark-bg">
                        <div class="chat-body p-3 ">
                            <div class="messages-content pb-5">
                                <div class="message-item">
                                    <div class="message-user">
                                        <figure class="avatar">
                                            <img src="images/user-9.png" alt="image">
                                        </figure>
                                        <div>
                                            <h5>Byrom Guittet</h5>
                                            <div class="time">01:35 PM</div>
                                        </div>
                                    </div>
                                    <div class="message-wrap">I'm fine, how are you 😃</div>
                                </div>

                                <div class="message-item outgoing-message">
                                    <div class="message-user">
                                        <figure class="avatar">
                                            <img src="images/user-1.png" alt="image">
                                        </figure>
                                        <div>
                                            <h5>Byrom Guittet</h5>
                                            <div class="time">01:35 PM<i class="ti-double-check text-info"></i></div>
                                        </div>
                                    </div>
                                    <div class="message-wrap">I want those files for you. I want you to send 1 PDF and 1 image file.</div>
                                </div>

                                <div class="message-item">
                                    <div class="message-user">
                                        <figure class="avatar">
                                            <img src="images/user-9.png" alt="image">
                                        </figure>
                                        <div>
                                            <h5>Byrom Guittet</h5>
                                            <div class="time">01:35 PM</div>
                                        </div>
                                    </div>
                                    <div class="message-wrap">I've found some cool photos for our travel app.</div>
                                </div>

                                <div class="message-item outgoing-message">
                                    <div class="message-user">
                                        <figure class="avatar">
                                            <img src="images/user-1.png" alt="image">
                                        </figure>
                                        <div>
                                            <h5>Byrom Guittet</h5>
                                            <div class="time">01:35 PM<i class="ti-double-check text-info"></i></div>
                                        </div>
                                    </div>
                                    <div class="message-wrap">Hey mate! How are things going ?</div>
                                </div>

                                <div class="message-item">
                                    <div class="message-user">
                                        <figure class="avatar">
                                            <img src="images/user-9.png" alt="image">
                                        </figure>
                                        <div>
                                            <h5>Byrom Guittet</h5>
                                            <div class="time">01:35 PM</div>
                                        </div>
                                    </div>
                                    <figure>
                                        <img src="images/bb-9.jpg" class="w-25 img-fluid rounded-3" alt="image">
                                    </figure>


                                </div>

                                <div class="message-item outgoing-message">
                                    <div class="message-user">
                                        <figure class="avatar">
                                            <img src="images/user-1.png" alt="image">
                                        </figure>
                                        <div>
                                            <h5>Byrom Guittet</h5>
                                            <div class="time">01:35 PM<i class="ti-double-check text-info"></i></div>
                                        </div>
                                    </div>
                                    <div class="message-wrap" style="margin-bottom: 90px;">Hey mate! How are things going ?</div>

                                </div>
                                <div class="clearfix"></div>


                            </div>
                        </div>
                    </div>
                    <div class="chat-bottom dark-bg p-3 shadow-none theme-dark-bg" style="width: 98%;">
                        <form class="chat-form">
                            <button class="bg-grey float-left"><i class="ti-microphone text-grey-600"></i></button>
                            <div class="form-group"><input type="text" placeholder="Start typing.."></div>
                            <button class="bg-current"><i class="ti-arrow-right text-white"></i></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- main content -->
