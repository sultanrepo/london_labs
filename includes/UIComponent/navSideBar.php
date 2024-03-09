<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="22" />
            </span>
        </a>
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="22" />
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="index.php" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ph-gauge"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                    <!-- <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics"> Analytics </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm"> CRM </a>
                            </li>
                            <li class="nav-item">
                                <a href="index.html" class="nav-link" data-key="t-ecommerce"> Ecommerce </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-learning.html" class="nav-link" data-key="t-learning"> Learning </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-real-estate.html" class="nav-link" data-key="t-real-estate"> Real Estate </a>
                            </li>
                        </ul>
                    </div> -->
                </li>

                <li class="nav-item">
                    <a href="#sidebarEcommerce" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce">
                        <i class="ri-user-add-line"></i> <span data-key="t-ecommerce">Patient</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarEcommerce">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="patient.php" class="nav-link" data-key="t-products"><i class="ri-user-add-line"></i>New Patient</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#sidebarTest" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce">
                        <i class=" bx bxs-notepad"></i> <span data-key="t-ecommerce">Tests</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTest">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-ecommerce-products.html" class="nav-link" data-key="t-products"><i class="bx bx-list-ul"></i>Categories</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-products-grid.html" class="nav-link" data-key="t-products-grid"><i class="ri-file-list-3-line"></i>Tests</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#sidebarHospital" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce">
                        <i class="ri-hospital-line"></i> <span data-key="t-ecommerce">Hospital</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarHospital">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-ecommerce-products.html" class="nav-link" data-key="t-products"><i class=" ri-hospital-fill"></i>Hospitals</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#sidebarDoctor" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce">
                        <i class="bx bxs-user-circle"></i> <span data-key="t-ecommerce">Doctor</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDoctor">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-ecommerce-products.html" class="nav-link" data-key="t-products"><i class="ri-shield-user-fill"></i>Doctors</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#sidebarComm" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce">
                        <i class="ri-money-pound-circle-fill"></i> <span data-key="t-ecommerce">Commission Managment</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarComm">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-ecommerce-products.html" class="nav-link" data-key="t-products"><i class=" bx bx-money"></i>Commission List</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="apps-calendar.html" class="nav-link menu-link"> <i class="ri-user-add-line"></i> <span data-key="t-calendar">New Patient</span> </a>
                </li>
                <li class="nav-item">
                    <a href="apps-calendar.html" class="nav-link menu-link"> <i class="ri-file-list-3-line"></i> <span data-key="t-calendar">List of Patient</span> </a>
                </li>
                <li class="nav-item">
                    <a href="apps-calendar.html" class="nav-link menu-link"> <i class="ph-calendar"></i> <span data-key="t-calendar">Calendar</span> </a>
                </li>
                <li class="nav-item">
                    <a href="apps-calendar.html" class="nav-link menu-link"> <i class="ph-calendar"></i> <span data-key="t-calendar">Calendar</span> </a>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ph-layout"></i> <span data-key="t-layouts">Layouts</span> <span class="badge badge-pill bg-danger" data-key="t-hot">Hot</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="layouts-horizontal.html" target="_blank" class="nav-link" data-key="t-horizontal">Horizontal</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-detached.html" target="_blank" class="nav-link" data-key="t-detached">Detached</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-two-column.html" target="_blank" class="nav-link" data-key="t-two-column">Two Column</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-vertical-hovered.html" target="_blank" class="nav-link" data-key="t-hovered">Hovered</a>
                            </li>
                        </ul>
                    </div>
                </li> -->
                

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-apps">Apps</span></li>

                <li class="nav-item">
                    <a href="apps-calendar.html" class="nav-link menu-link"> <i class="ph-calendar"></i> <span data-key="t-calendar">Calendar</span> </a>
                </li>

                <li class="nav-item">
                    <a href="apps-chat.html" class="nav-link menu-link"> <i class="ph-chats"></i> <span data-key="t-chat">Chat</span> </a>
                </li>

                <li class="nav-item">
                    <a href="apps-email.html" class="nav-link menu-link"> <i class="ph-envelope"></i> <span data-key="t-email">Email</span> </a>
                </li>

                <li class="nav-item">
                    <a href="#sidebarEcommerce" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce">
                        <i class="ph-storefront"></i> <span data-key="t-ecommerce">Ecommerce</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarEcommerce">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-ecommerce-products.html" class="nav-link" data-key="t-products">Products</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-products-grid.html" class="nav-link" data-key="t-products-grid">Products Grid</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-product-details.html" class="nav-link" data-key="t-product-Details">Product Details</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-add-product.html" class="nav-link" data-key="t-create-product">Create Product</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-orders.html" class="nav-link" data-key="t-orders">Orders</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-order-overview.html" class="nav-link" data-key="t-order-overview">Order Overview</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-customers.html" class="nav-link" data-key="t-customers">Customers</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-cart.html" class="nav-link" data-key="t-shopping-cart">Shopping Cart</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-checkout.html" class="nav-link" data-key="t-checkout">Checkout</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-sellers.html" class="nav-link" data-key="t-sellers">Sellers</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-ecommerce-seller-overview.html" class="nav-link" data-key="t-seller-overview">Seller Overview</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="apps-file-manager.html" class="nav-link menu-link"> <i class="ph-folder-open"></i> <span data-key="t-file-manager">File Manager</span> </a>
                </li>

                <li class="nav-item">
                    <a href="#sidebarLearning" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLearning">
                        <i class="ph-graduation-cap"></i> <span data-key="t-learning">Learning</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLearning">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarCourses" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCourses" data-key="t-courses"> Courses </a>
                                <div class="collapse menu-dropdown" id="sidebarCourses">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-learning-list.html" class="nav-link" data-key="t-list-view">List View</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-learning-grid.html" class="nav-link" data-key="t-grid-view">Grid View</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-learning-category.html" class="nav-link" data-key="t-category">Category</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-learning-overview.html" class="nav-link" data-key="t-overview">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-learning-create.html" class="nav-link" data-key="t-create-course">Create Course</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarStudent" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarStudent" data-key="t-students"> Students </a>
                                <div class="collapse menu-dropdown" id="sidebarStudent">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-student-subscriptions.html" class="nav-link" data-key="t-my-subscriptions">My Subscriptions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-student-courses.html" class="nav-link" data-key="t-my-courses">My Courses</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarInstructors" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInstructors" data-key="t-instructors"> Instructors </a>
                                <div class="collapse menu-dropdown" id="sidebarInstructors">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-instructors-list.html" class="nav-link" data-key="t-list-view">List View</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-instructors-grid.html" class="nav-link" data-key="t-grid-view">Grid View</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-instructors-overview.html" class="nav-link" data-key="t-overview">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-instructors-create.html" class="nav-link" data-key="t-create-instructors">Create Instructor</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#sidebarInvoices" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoices">
                        <i class="ph-file-text"></i> <span data-key="t-invoices">Invoices</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarInvoices">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-invoices-list.html" class="nav-link" data-key="t-list-view">List View</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-invoices-overview.html" class="nav-link" data-key="t-overview">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-invoices-create.html" class="nav-link" data-key="t-create-invoice">Create Invoice</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#sidebarTickets" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTickets">
                        <i class="ph-ticket"></i> <span data-key="t-support-tickets">Support Tickets</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTickets">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-tickets-list.html" class="nav-link" data-key="t-list-view">List View</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-tickets-overview.html" class="nav-link" data-key="t-overview">Overview</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#sidebarRealeEstate" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarRealeEstate">
                        <i class="ph-buildings"></i> <span data-key="t-real-estate">Real Estate</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarRealeEstate">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-real-estate-grid.html" class="nav-link" data-key="t-listing-grid">Listing Grid</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-real-estate-list.html" class="nav-link" data-key="t-listing-list">Listing List</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-real-estate-map.html" class="nav-link" data-key="t-listing-map">Listing Map</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-real-estate-property-overview.html" class="nav-link" data-key="t-property-overview">Property Overview</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarAgent" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAgent" data-key="t-agent"> Agent </a>
                                <div class="collapse menu-dropdown" id="sidebarAgent">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-real-estate-agent-list.html" class="nav-link" data-key="t-list-view"> List View </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-real-estate-agent-grid.html" class="nav-link" data-key="t-grid-view"> Grid View </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-real-estate-agent-overview.html" class="nav-link" data-key="t-overview"> Overview </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarAgencies" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAgencies" data-key="t-agencies"> Agencies </a>
                                <div class="collapse menu-dropdown" id="sidebarAgencies">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-real-estate-agencies-list.html" class="nav-link" data-key="t-list-view"> List View </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-real-estate-agencies-overview.html" class="nav-link" data-key="t-overview"> Overview </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="apps-real-estate-add-properties.html" class="nav-link" data-key="t-add-property">Add Property</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-real-estate-earnings.html" class="nav-link" data-key="t-earnings">Earnings</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="ph-user-circle"></i> <span data-key="t-authentication">Authentication</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="auth-signin.html" class="nav-link" role="button" data-key="t-signin"> Sign In </a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-signup.html" class="nav-link" role="button" data-key="t-signup"> Sign Up </a>
                            </li>

                            <li class="nav-item">
                                <a href="auth-pass-reset.html" class="nav-link" role="button" data-key="t-password-reset">
                                    Password Reset
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="auth-pass-change.html" class="nav-link" role="button" data-key="t-password-create">
                                    Password Create
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="auth-lockscreen.html" class="nav-link" role="button" data-key="t-lock-screen">
                                    Lock Screen
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="auth-logout.html" class="nav-link" role="button" data-key="t-logout"> Logout </a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-success-msg.html" class="nav-link" role="button" data-key="t-success-message"> Success Message </a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-twostep.html" class="nav-link" role="button" data-key="t-two-step-verification"> Two Step Verification </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarErrors" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarErrors" data-key="t-errors"> Errors </a>
                                <div class="collapse menu-dropdown" id="sidebarErrors">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-404.html" class="nav-link" data-key="t-404-error"> 404 Error </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-500.html" class="nav-link" data-key="t-500"> 500 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-503.html" class="nav-link" data-key="t-503"> 503 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-offline.html" class="nav-link" data-key="t-offline-page"> Offline Page </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="ph-address-book"></i> <span data-key="t-pages">Pages</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="pages-starter.html" class="nav-link" data-key="t-starter"> Starter </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-profile.html" class="nav-link" data-key="t-profile"> Profile </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-profile-settings.html" class="nav-link" data-key="t-profile-setting"> Profile Settings </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-contacts.html" class="nav-link" data-key="t-contacts"> Contacts </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-timeline.html" class="nav-link" data-key="t-timeline"> Timeline </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-faqs.html" class="nav-link" data-key="t-faqs"> FAQs </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-pricing.html" class="nav-link" data-key="t-pricing"> Pricing </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-maintenance.html" class="nav-link" data-key="t-maintenance"> Maintenance </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-coming-soon.html" class="nav-link" data-key="t-coming-soon"> Coming Soon </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-privacy-policy.html" class="nav-link" data-key="t-privacy-policy"> Privacy Policy </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-term-conditions.html" class="nav-link" data-key="t-term-conditions"> Term & Conditions </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Components</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ph-bandaids"></i> <span data-key="t-bootstrap-ui">Bootstrap UI</span>
                    </a>
                    <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-alerts.html" class="nav-link" data-key="t-alerts">Alerts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-badges.html" class="nav-link" data-key="t-badges">Badges</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-buttons.html" class="nav-link" data-key="t-buttons">Buttons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-colors.html" class="nav-link" data-key="t-colors">Colors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-cards.html" class="nav-link" data-key="t-cards">Cards</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-carousel.html" class="nav-link" data-key="t-carousel">Carousel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-dropdowns.html" class="nav-link" data-key="t-dropdowns">Dropdowns</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-grid.html" class="nav-link" data-key="t-grid">Grid</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-images.html" class="nav-link" data-key="t-images">Images</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-tabs.html" class="nav-link" data-key="t-tabs">Tabs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-accordions.html" class="nav-link" data-key="t-accordion-collapse">Accordion & Collapse</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-modals.html" class="nav-link" data-key="t-modals">Modals</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-offcanvas.html" class="nav-link" data-key="t-offcanvas">Offcanvas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-placeholders.html" class="nav-link" data-key="t-placeholders">Placeholders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-progress.html" class="nav-link" data-key="t-progress">Progress</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-notifications.html" class="nav-link" data-key="t-notifications">Notifications</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-media.html" class="nav-link" data-key="t-media-object">Media object</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-embed-video.html" class="nav-link" data-key="t-embed-video">Embed Video</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-typography.html" class="nav-link" data-key="t-typography">Typography</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-lists.html" class="nav-link" data-key="t-lists">Lists</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-links.html" class="nav-link" data-key="t-links">Links</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-general.html" class="nav-link" data-key="t-general">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-utilities.html" class="nav-link" data-key="t-utilities">Utilities</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarAdvanceUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                        <i class="ph-stack-simple"></i> <span data-key="t-advance-ui">Advance UI</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="advance-ui-sweetalerts.html" class="nav-link" data-key="t-sweet-alerts">Sweet Alerts</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-nestable.html" class="nav-link" data-key="t-nestable-list">Nestable List</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-scrollbar.html" class="nav-link" data-key="t-scrollbar">Scrollbar</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-swiper.html" class="nav-link" data-key="t-swiper-slider">Swiper Slider</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-ratings.html" class="nav-link" data-key="t-ratings">Ratings</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-highlight.html" class="nav-link" data-key="t-highlight">Highlight</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-scrollspy.html" class="nav-link" data-key="t-scrollSpy">ScrollSpy</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#customUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="customUI">
                        <i class="ph-wrench"></i> <span data-key="t-custom-ui">Custom UI</span> <span class="badge badge-pill bg-danger" data-key="t-custom">Custom</span>
                    </a>
                    <div class="collapse menu-dropdown" id="customUI">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-ribbons.html" class="nav-link" data-key="t-ribbons">Ribbons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-profile.html" class="nav-link" data-key="t-profile">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-counter.html" class="nav-link" data-key="t-counter">Counter</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html"> <i class="ph-paint-brush-broad"></i> <span data-key="t-widgets">Widgets</span> </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                        <i class="ri-file-list-3-line"></i> <span data-key="t-forms">Forms</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarForms">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="forms-elements.html" class="nav-link" data-key="t-basic-elements">Basic Elements</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-select.html" class="nav-link" data-key="t-form-select">Form Select</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-checkboxs-radios.html" class="nav-link" data-key="t-checkboxes-radios">Checkboxes & Radios</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-pickers.html" class="nav-link" data-key="t-pickers">Pickers</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-masks.html" class="nav-link" data-key="t-input-masks">Input Masks</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-advanced.html" class="nav-link" data-key="t-advanced">Advanced</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-range-sliders.html" class="nav-link" data-key="t-range-slider">Range Slider</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-validation.html" class="nav-link" data-key="t-validation">Validation</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-wizard.html" class="nav-link" data-key="t-wizard">Wizard</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-editors.html" class="nav-link" data-key="t-editors">Editors</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-file-uploads.html" class="nav-link" data-key="t-file-uploads">File Uploads</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-layouts.html" class="nav-link" data-key="t-form-layouts">Form Layouts</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                        <i class="ph-table"></i> <span data-key="t-tables">Tables</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTables">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="tables-basic.html" class="nav-link" data-key="t-basic-tables">Basic Tables</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-gridjs.html" class="nav-link" data-key="t-grid-js">Grid Js</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-listjs.html" class="nav-link" data-key="t-list-js">List Js</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-datatables.html" class="nav-link" data-key="t-datatables">Datatables</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarCharts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCharts">
                        <i class="ph-chart-pie-slice"></i> <span data-key="t-apexcharts">Apexcharts</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarCharts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="charts-apex-line.html" class="nav-link" data-key="t-line">Line</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-area.html" class="nav-link" data-key="t-area">Area</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-column.html" class="nav-link" data-key="t-column">Column</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-bar.html" class="nav-link" data-key="t-bar">Bar</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-mixed.html" class="nav-link" data-key="t-mixed">Mixed</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-timeline.html" class="nav-link" data-key="t-timeline">Timeline</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-candlestick.html" class="nav-link" data-key="t-candlstick">Candlstick</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-boxplot.html" class="nav-link" data-key="t-boxplot">Boxplot</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-bubble.html" class="nav-link" data-key="t-bubble">Bubble</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-scatter.html" class="nav-link" data-key="t-scatter">Scatter</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-heatmap.html" class="nav-link" data-key="t-heatmap">Heatmap</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-treemap.html" class="nav-link" data-key="t-treemap">Treemap</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-pie.html" class="nav-link" data-key="t-pie">Pie</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-radialbar.html" class="nav-link" data-key="t-radialbar">Radialbar</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-radar.html" class="nav-link" data-key="t-radar">Radar</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-apex-polar.html" class="nav-link" data-key="t-polar-area">Polar Area</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarIcons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarIcons">
                        <i class="ph-traffic-cone"></i> <span data-key="t-icons">Icons</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarIcons">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="icons-remix.html" class="nav-link" data-key="t-remix">Remix</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-boxicons.html" class="nav-link" data-key="t-boxicons">Boxicons</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-materialdesign.html" class="nav-link" data-key="t-material-design">Material Design</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-bootstrap.html" class="nav-link" data-key="t-bootstrap">Bootstrap</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-phosphor.html" class="nav-link" data-key="t-phosphor">Phosphor</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                        <i class="ph-map-trifold"></i> <span data-key="t-maps">Maps</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMaps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="maps-google.html" class="nav-link" data-key="t-google">Google</a>
                            </li>
                            <li class="nav-item">
                                <a href="maps-vector.html" class="nav-link" data-key="t-vector">Vector</a>
                            </li>
                            <li class="nav-item">
                                <a href="maps-leaflet.html" class="nav-link" data-key="t-leaflet">Leaflet</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                        <i class="bi bi-share"></i> <span data-key="t-multi-level">Multi Level</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMultilevel">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-level-1.1"> Level 1.1 </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2"> Level 1.2 </a>
                                <div class="collapse menu-dropdown" id="sidebarAccount">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-key="t-level-2.1"> Level 2.1 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm" data-key="t-level-2.2"> Level 2.2 </a>
                                            <div class="collapse menu-dropdown" id="sidebarCrm">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-key="t-level-3.1"> Level 3.1 </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-key="t-level-3.2"> Level 3.2 </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
