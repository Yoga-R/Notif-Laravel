@extends('master2')

@section('content')
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse"
                                            class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                            <i class="icon nalika-menu-task"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    <div class="header-top-menu tabl-d-n">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item dropdown">
                                                <a href="#" data-toggle="dropdown" role="button"
                                                    aria-expanded="false" class="nav-link dropdown-toggle"><i
                                                        class="icon nalika-mail nalika-chat-pro"
                                                        aria-hidden="true"></i><span
                                                        class="indicator-ms"></span></a>
                                                <div role="menu"
                                                    class="author-message-top dropdown-menu animated zoomIn">
                                                    <div class="message-single-top">
                                                        <h1>Message</h1>
                                                    </div>
                                                    <ul class="message-menu">
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src="img/contact/1.jpg" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Advanda Cro</h2>
                                                                    <p>Please done this project as soon possible.
                                                                    </p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src="img/contact/4.jpg" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Sulaiman din</h2>
                                                                    <p>Please done this project as soon possible.
                                                                    </p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src="img/contact/3.jpg" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.
                                                                    </p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src="img/contact/2.jpg" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.
                                                                    </p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="message-view">
                                                        <a href="#">View All Messages</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button"
                                                    aria-expanded="false" class="nav-link dropdown-toggle"><i
                                                        class="icon nalika-alarm" aria-hidden="true"></i><span
                                                        class="indicator-nt"></span></a>
                                                <div role="menu"
                                                    class="notification-author dropdown-menu animated zoomIn">
                                                    <div class="notification-single-top">
                                                        <h1>Notifications</h1>
                                                    </div>
                                                    <ul class="notification-menu">
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="icon nalika-tick"
                                                                        aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Advanda Cro</h2>
                                                                    <p>Please done this project as soon possible.
                                                                    </p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="icon nalika-cloud"
                                                                        aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Sulaiman din</h2>
                                                                    <p>Please done this project as soon possible.
                                                                    </p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="icon nalika-folder"
                                                                        aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.
                                                                    </p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="icon nalika-bar-chart"
                                                                        aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.
                                                                    </p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="notification-view">
                                                        <a href="#">View All Notification</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button"
                                                    aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <i class="icon nalika-user nalika-user-rounded header-riht-inf"
                                                        aria-hidden="true"></i>
                                                    <span class="admin-name">Advanda Cro</span>
                                                    <i
                                                        class="icon nalika-down-arrow nalika-angle-dw nalika-icon"></i>
                                                </a>
                                                <ul role="menu"
                                                    class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    <li><a href="register.html"><span
                                                                class="icon nalika-home author-log-ic"></span>
                                                            Register</a>
                                                    </li>
                                                    <li><a href="#"><span
                                                                class="icon nalika-user author-log-ic"></span> My
                                                            Profile</a>
                                                    </li>
                                                    <li><a href="lock.html"><span
                                                                class="icon nalika-diamond author-log-ic"></span>
                                                            Lock</a>
                                                    </li>
                                                    <li><a href="#"><span
                                                                class="icon nalika-settings author-log-ic"></span>
                                                            Settings</a>
                                                    </li>
                                                    <li><a href="login.html"><span
                                                                class="icon nalika-unlocked author-log-ic"></span>
                                                            Log Out</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown"
                                                    role="button" aria-expanded="false"
                                                    class="nav-link dropdown-toggle"><i
                                                        class="icon nalika-menu-task"></i></a>

                                                <div role="menu"
                                                    class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                    <ul class="nav nav-tabs custon-set-tab">
                                                        <li class="active"><a data-toggle="tab"
                                                                href="#Notes">News</a>
                                                        </li>
                                                        <li><a data-toggle="tab" href="#Projects">Activity</a>
                                                        </li>
                                                        <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content custom-bdr-nt">
                                                        <div id="Notes" class="tab-pane fade in active">
                                                            <div class="notes-area-wrap">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="icon nalika-chat"></i> Latest News
                                                                    </h2>
                                                                    <p>You have 10 New News.</p>
                                                                </div>
                                                                <div class="notes-list-area notes-menu-scrollbar">
                                                                    <ul class="notes-menu-list">
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="img/contact/4.jpg"
                                                                                            alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem
                                                                                            Ipsum is that it has a
                                                                                            more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45
                                                                                            pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="img/contact/1.jpg"
                                                                                            alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem
                                                                                            Ipsum is that it has a
                                                                                            more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45
                                                                                            pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="img/contact/2.jpg"
                                                                                            alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem
                                                                                            Ipsum is that it has a
                                                                                            more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45
                                                                                            pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="img/contact/3.jpg"
                                                                                            alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem
                                                                                            Ipsum is that it has a
                                                                                            more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45
                                                                                            pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="img/contact/4.jpg"
                                                                                            alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem
                                                                                            Ipsum is that it has a
                                                                                            more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45
                                                                                            pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="img/contact/1.jpg"
                                                                                            alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem
                                                                                            Ipsum is that it has a
                                                                                            more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45
                                                                                            pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="img/contact/2.jpg"
                                                                                            alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem
                                                                                            Ipsum is that it has a
                                                                                            more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45
                                                                                            pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="img/contact/1.jpg"
                                                                                            alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem
                                                                                            Ipsum is that it has a
                                                                                            more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45
                                                                                            pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="img/contact/2.jpg"
                                                                                            alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem
                                                                                            Ipsum is that it has a
                                                                                            more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45
                                                                                            pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="img/contact/3.jpg"
                                                                                            alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem
                                                                                            Ipsum is that it has a
                                                                                            more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45
                                                                                            pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="Projects" class="tab-pane fade">
                                                            <div class="projects-settings-wrap">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="icon nalika-happiness"></i> Recent
                                                                        Activity</h2>
                                                                    <p> You have 20 Recent Activity.</p>
                                                                </div>
                                                                <div
                                                                    class="project-st-list-area project-st-menu-scrollbar">
                                                                    <ul class="projects-st-menu-list">
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div
                                                                                        class="projects-st-heading">
                                                                                        <h2>New User Registered</h2>
                                                                                        <p> The point of using Lorem
                                                                                            Ipsum is that it has a
                                                                                            more or less normal.</p>
                                                                                        <span
                                                                                            class="project-st-time">1
                                                                                            hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div
                                                                                        class="projects-st-heading">
                                                                                        <h2>New Order Received</h2>
                                                                                        <p> The point of using Lorem
                                                                                            Ipsum is that it has a
                                                                                            more or less normal.</p>
                                                                                        <span
                                                                                            class="project-st-time">2
                                                                                            hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div
                                                                                        class="projects-st-heading">
                                                                                        <h2>New Order Received</h2>
                                                                                        <p> The point of using Lorem
                                                                                            Ipsum is that it has a
                                                                                            more or less normal.</p>
                                                                                        <span
                                                                                            class="project-st-time">3
                                                                                            hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div
                                                                                        class="projects-st-heading">
                                                                                        <h2>New Order Received</h2>
                                                                                        <p> The point of using Lorem
                                                                                            Ipsum is that it has a
                                                                                            more or less normal.</p>
                                                                                        <span
                                                                                            class="project-st-time">4
                                                                                            hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div
                                                                                        class="projects-st-heading">
                                                                                        <h2>New User Registered</h2>
                                                                                        <p> The point of using Lorem
                                                                                            Ipsum is that it has a
                                                                                            more or less normal.</p>
                                                                                        <span
                                                                                            class="project-st-time">5
                                                                                            hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div
                                                                                        class="projects-st-heading">
                                                                                        <h2>New Order</h2>
                                                                                        <p> The point of using Lorem
                                                                                            Ipsum is that it has a
                                                                                            more or less normal.</p>
                                                                                        <span
                                                                                            class="project-st-time">6
                                                                                            hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div
                                                                                        class="projects-st-heading">
                                                                                        <h2>New User</h2>
                                                                                        <p> The point of using Lorem
                                                                                            Ipsum is that it has a
                                                                                            more or less normal.</p>
                                                                                        <span
                                                                                            class="project-st-time">7
                                                                                            hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div
                                                                                        class="projects-st-heading">
                                                                                        <h2>New Order</h2>
                                                                                        <p> The point of using Lorem
                                                                                            Ipsum is that it has a
                                                                                            more or less normal.</p>
                                                                                        <span
                                                                                            class="project-st-time">9
                                                                                            hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="Settings" class="tab-pane fade">
                                                            <div class="setting-panel-area">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="icon nalika-gear"></i> Settings
                                                                        Panel</h2>
                                                                    <p> You have 20 Settings. 5 not completed.</p>
                                                                </div>
                                                                <ul class="setting-panel-list">
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Show notifications</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox"
                                                                                            name="collapsemenu"
                                                                                            class="onoffswitch-checkbox"
                                                                                            id="example">
                                                                                        <label
                                                                                            class="onoffswitch-label"
                                                                                            for="example">
                                                                                            <span
                                                                                                class="onoffswitch-inner"></span>
                                                                                            <span
                                                                                                class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Disable Chat</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox"
                                                                                            name="collapsemenu"
                                                                                            class="onoffswitch-checkbox"
                                                                                            id="example3">
                                                                                        <label
                                                                                            class="onoffswitch-label"
                                                                                            for="example3">
                                                                                            <span
                                                                                                class="onoffswitch-inner"></span>
                                                                                            <span
                                                                                                class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Enable history</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox"
                                                                                            name="collapsemenu"
                                                                                            class="onoffswitch-checkbox"
                                                                                            id="example4">
                                                                                        <label
                                                                                            class="onoffswitch-label"
                                                                                            for="example4">
                                                                                            <span
                                                                                                class="onoffswitch-inner"></span>
                                                                                            <span
                                                                                                class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Show charts</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox"
                                                                                            name="collapsemenu"
                                                                                            class="onoffswitch-checkbox"
                                                                                            id="example7">
                                                                                        <label
                                                                                            class="onoffswitch-label"
                                                                                            for="example7">
                                                                                            <span
                                                                                                class="onoffswitch-inner"></span>
                                                                                            <span
                                                                                                class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Update everyday</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox"
                                                                                            name="collapsemenu"
                                                                                            checked=""
                                                                                            class="onoffswitch-checkbox"
                                                                                            id="example2">
                                                                                        <label
                                                                                            class="onoffswitch-label"
                                                                                            for="example2">
                                                                                            <span
                                                                                                class="onoffswitch-inner"></span>
                                                                                            <span
                                                                                                class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Global search</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox"
                                                                                            name="collapsemenu"
                                                                                            checked=""
                                                                                            class="onoffswitch-checkbox"
                                                                                            id="example6">
                                                                                        <label
                                                                                            class="onoffswitch-label"
                                                                                            for="example6">
                                                                                            <span
                                                                                                class="onoffswitch-inner"></span>
                                                                                            <span
                                                                                                class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Offline users</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox"
                                                                                            name="collapsemenu"
                                                                                            checked=""
                                                                                            class="onoffswitch-checkbox"
                                                                                            id="example5">
                                                                                        <label
                                                                                            class="onoffswitch-label"
                                                                                            for="example5">
                                                                                            <span
                                                                                                class="onoffswitch-inner"></span>
                                                                                            <span
                                                                                                class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span
                                                class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul class="collapse dropdown-header-top">
                                            <li><a href="index.html">Dashboard v.1</a></li>
                                            <li><a href="index-1.html">Dashboard v.2</a></li>
                                            <li><a href="index-3.html">Dashboard v.3</a></li>
                                            <li><a href="product-list.html">List Pekerja</a></li>
                                            <li><a href="product-edit.html">Pekerja</a></li>
                                            <li><a href="product-detail.html">Tawaran Pekerjaan</a></li>
                                            <li><a href="product-cart.html">Product Cart</a></li>
                                            <li><a href="product-payment.html">Product Payment</a></li>
                                            <li><a href="analytics.html">Analytics</a></li>
                                            <li><a href="widgets.html">Widgets</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span
                                                class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="demo" class="collapse dropdown-header-top">
                                            <li><a href="mailbox.html">Inbox</a>
                                            </li>
                                            <li><a href="mailbox-view.html">View Mail</a>
                                            </li>
                                            <li><a href="mailbox-compose.html">Compose Mail</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#others" href="#">Miscellaneous <span
                                                class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="others" class="collapse dropdown-header-top">
                                            <li><a href="file-manager.html">File Manager</a></li>
                                            <li><a href="contacts.html">Contacts Client</a></li>
                                            <li><a href="projects.html">Project</a></li>
                                            <li><a href="project-details.html">Project Details</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                            <li><a href="500.html">500 Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface
                                            <span
                                                class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                            <li><a href="google-map.html">Google Map</a>
                                            </li>
                                            <li><a href="data-maps.html">Data Maps</a>
                                            </li>
                                            <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                            </li>
                                            <li><a href="x-editable.html">X-Editable</a>
                                            </li>
                                            <li><a href="code-editor.html">Code Editor</a>
                                            </li>
                                            <li><a href="tree-view.html">Tree View</a>
                                            </li>
                                            <li><a href="preloader.html">Preloader</a>
                                            </li>
                                            <li><a href="images-cropper.html">Images Cropper</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span
                                                class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="Chartsmob" class="collapse dropdown-header-top">
                                            <li><a href="bar-charts.html">Bar Charts</a>
                                            </li>
                                            <li><a href="line-charts.html">Line Charts</a>
                                            </li>
                                            <li><a href="area-charts.html">Area Charts</a>
                                            </li>
                                            <li><a href="rounded-chart.html">Rounded Charts</a>
                                            </li>
                                            <li><a href="c3.html">C3 Charts</a>
                                            </li>
                                            <li><a href="sparkline.html">Sparkline Charts</a>
                                            </li>
                                            <li><a href="peity.html">Peity Charts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span
                                                class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="Tablesmob" class="collapse dropdown-header-top">
                                            <li><a href="static-table.html">Static Table</a>
                                            </li>
                                            <li><a href="data-table.html">Data Table</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span
                                                class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="formsmob" class="collapse dropdown-header-top">
                                            <li><a href="basic-form-element.html">Basic Form Elements</a>
                                            </li>
                                            <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                            </li>
                                            <li><a href="password-meter.html">Password Meter</a>
                                            </li>
                                            <li><a href="multi-upload.html">Multi Upload</a>
                                            </li>
                                            <li><a href="tinymc.html">Text Editor</a>
                                            </li>
                                            <li><a href="dual-list-box.html">Dual List Box</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views
                                            <span
                                                class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                            <li><a href="basic-form-element.html">Basic Form Elements</a>
                                            </li>
                                            <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                            </li>
                                            <li><a href="password-meter.html">Password Meter</a>
                                            </li>
                                            <li><a href="multi-upload.html">Multi Upload</a>
                                            </li>
                                            <li><a href="tinymc.html">Text Editor</a>
                                            </li>
                                            <li><a href="dual-list-box.html">Dual List Box</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span
                                                class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="Pagemob" class="collapse dropdown-header-top">
                                            <li><a href="login.html">Login</a>
                                            </li>
                                            <li><a href="register.html">Register</a>
                                            </li>
                                            <li><a href="lock.html">Lock</a>
                                            </li>
                                            <li><a href="password-recovery.html">Password Recovery</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end -->
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="breadcomb-wp">
                                        <div class="breadcomb-icon">
                                            <i class="icon nalika-home"></i>
                                        </div>
                                        <div class="breadcomb-ctn">
                                            <h2>PEKERJA</h2>
                                            <p>Welcome to Nalika <span class="bread-ntd">Admin Template</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="breadcomb-report">
                                        <button data-toggle="tooltip" data-placement="left" title="Download Report"
                                            class="btn"><i class="icon nalika-download"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single pro tab start-->
    <div class="single-product-tab-area mg-b-30">
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-tab-pro-inner">
                            <ul id="myTab3" class="tab-review-design">
                                <li class="active"><a href="#description"><i class="icon nalika-edit"
                                            aria-hidden="true"></i> Product Edit</a></li>
                                <!-- <li><a href="#reviews"><i class="icon nalika-picture" aria-hidden="true"></i>
                                        Picture</a></li>
                                <li><a href="#INFORMATION"><i class="icon nalika-chat" aria-hidden="true"></i>
                                        Review</a></li> -->
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <form action="{{route('tenagakerja.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-user"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="fullname" class="form-control" placeholder="FullName">
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-edit"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="email"class="form-control" placeholder="Email">
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-usd"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="password" class="form-control" placeholder="Password">
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-new-file"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="notelpon" class="form-control" placeholder="No Telp">
                                                </div>
                                                {{-- <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-favorites"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="keahlian" class="form-control" placeholder="Keahlian">
                                                </div> --}}
                                                <select name="keahlian"
                                                    class="form-control pro-edt-select form-control-primary">
                                                    <option value="opt1">Select Keahlian</option>
                                                    @foreach ($keahlian as $item)
                                                    <option value="{{$item->id}}">{{$item->keahlian}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-center custom-pro-edt-ds">
                                                <button type="submit"
                                                    class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save
                                                </button>
                                                <button type="button"
                                                    class="btn btn-ctl-bt waves-effect waves-light">Discard
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="pro-edt-img">
                                                            <img src="img/new-product/5-small.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="product-edt-pix-wrap">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">TT</span>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Label Name">
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="form-radio">
                                                                                <form>
                                                                                    <div class="radio radiofill">
                                                                                        <label>
                                                                                            <input type="radio"
                                                                                                name="radio"><i
                                                                                                class="helper"></i>Largest
                                                                                            Image
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio radiofill">
                                                                                        <label>
                                                                                            <input type="radio"
                                                                                                name="radio"><i
                                                                                                class="helper"></i>Medium
                                                                                            Image
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio radiofill">
                                                                                        <label>
                                                                                            <input type="radio"
                                                                                                name="radio"><i
                                                                                                class="helper"></i>Small
                                                                                            Image
                                                                                        </label>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="product-edt-remove">
                                                                                <button type="button"
                                                                                    class="btn btn-ctl-bt waves-effect waves-light">Remove
                                                                                    <i class="fa fa-times"
                                                                                        aria-hidden="true"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="pro-edt-img">
                                                            <img src="img/new-product/6-small.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="product-edt-pix-wrap">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">TT</span>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Label Name">
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="form-radio">
                                                                                <form>
                                                                                    <div class="radio radiofill">
                                                                                        <label>
                                                                                            <input type="radio"
                                                                                                name="radio"><i
                                                                                                class="helper"></i>Largest
                                                                                            Image
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio radiofill">
                                                                                        <label>
                                                                                            <input type="radio"
                                                                                                name="radio"><i
                                                                                                class="helper"></i>Medium
                                                                                            Image
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio radiofill">
                                                                                        <label>
                                                                                            <input type="radio"
                                                                                                name="radio"><i
                                                                                                class="helper"></i>Small
                                                                                            Image
                                                                                        </label>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="product-edt-remove">
                                                                                <button type="button"
                                                                                    class="btn btn-ctl-bt waves-effect waves-light">Remove
                                                                                    <i class="fa fa-times"
                                                                                        aria-hidden="true"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="pro-edt-img mg-b-0">
                                                            <img src="img/new-product/7-small.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="product-edt-pix-wrap">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">TT</span>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Label Name">
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="form-radio">
                                                                                <form>
                                                                                    <div class="radio radiofill">
                                                                                        <label>
                                                                                            <input type="radio"
                                                                                                name="radio"><i
                                                                                                class="helper"></i>Largest
                                                                                            Image
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio radiofill">
                                                                                        <label>
                                                                                            <input type="radio"
                                                                                                name="radio"><i
                                                                                                class="helper"></i>Medium
                                                                                            Image
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio radiofill">
                                                                                        <label>
                                                                                            <input type="radio"
                                                                                                name="radio"><i
                                                                                                class="helper"></i>Small
                                                                                            Image
                                                                                        </label>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="product-edt-remove">
                                                                                <button type="button"
                                                                                    class="btn btn-ctl-bt waves-effect waves-light">Remove
                                                                                    <i class="fa fa-times"
                                                                                        aria-hidden="true"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="card-block">
                                                    <div class="text-muted f-w-400">
                                                        <p>No reviews yet.</p>
                                                    </div>
                                                    <div class="m-t-10">
                                                        <div class="txt-primary f-18 f-w-600">
                                                            <p>Your Rating</p>
                                                        </div>
                                                        <div class="stars stars-example-css detail-stars">
                                                            <div class="review-rating">
                                                                <fieldset class="rating">
                                                                    <input type="radio" id="star5" name="rating"
                                                                        value="5">
                                                                    <label class="full" for="star5"></label>
                                                                    <input type="radio" id="star4half" name="rating"
                                                                        value="4 and a half">
                                                                    <label class="half" for="star4half"></label>
                                                                    <input type="radio" id="star4" name="rating"
                                                                        value="4">
                                                                    <label class="full" for="star4"></label>
                                                                    <input type="radio" id="star3half" name="rating"
                                                                        value="3 and a half">
                                                                    <label class="half" for="star3half"></label>
                                                                    <input type="radio" id="star3" name="rating"
                                                                        value="3">
                                                                    <label class="full" for="star3"></label>
                                                                    <input type="radio" id="star2half" name="rating"
                                                                        value="2 and a half">
                                                                    <label class="half" for="star2half"></label>
                                                                    <input type="radio" id="star2" name="rating"
                                                                        value="2">
                                                                    <label class="full" for="star2"></label>
                                                                    <input type="radio" id="star1half" name="rating"
                                                                        value="1 and a half">
                                                                    <label class="half" for="star1half"></label>
                                                                    <input type="radio" id="star1" name="rating"
                                                                        value="1">
                                                                    <label class="full" for="star1"></label>
                                                                    <input type="radio" id="starhalf" name="rating"
                                                                        value="half">
                                                                    <label class="half" for="starhalf"></label>
                                                                </fieldset>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights
                            reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
