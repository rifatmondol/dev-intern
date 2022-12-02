<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<base href="" />
		<title></title>
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="styles/uikit/plugins/global/plugins.bundle.css?v=<?php echo filemtime('styles/uikit/plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<link href="styles/uikit/css/style.bundle.css?v=<?php echo filemtime('styles/uikit/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<!-- our custom styles -->
		<link href="styles/main.css?v=<?php echo filemtime("styles/main.css"); ?>" rel="stylesheet" type="text/css" />
		<link href="styles/raw-main.css?v=<?php echo filemtime("styles/raw-main.css"); ?>" rel="stylesheet" type="text/css" />
		<!-- our custom styles end-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-sidebar-stacked="true" data-kt-app-toolbar-enabled="true" class="app-default">

		<div id="app_container">
		<!-- Begin::your code -->

			<!-- ======= Sidebar ======= -->
			<aside id="sidebar" class="sidebar fixed-top bottom-0 p-5">
				<div class="d-flex align-items-center justify-content-between mb-15 sidebar-menu">
					<a href="index.php" class="logo d-flex align-items-center">
						<i class="bi bi-fullscreen-exit me-3"></i>
						<span class="d-none d-lg-block text-white">zuntia</span>
					</a>
					<i class="bi bi-list toggle-sidebar-btn"></i>
				</div><!-- End Logo -->

				<ul class="sidebar-nav p-0 m-0" id="sidebar-nav">

					<li class="nav-item">
						<a class="nav-link " href="index.php">
							<i class="bi bi-layers-half"></i>
							<span>Dashboard</span>
						</a>
					</li><!-- End Dashboard Nav -->

					<li class="nav-item">
						<a class="nav-link collapsed" data-bs-target="#content-nav" data-bs-toggle="collapse" href="#">
						<i class="bi bi-ui-checks-grid"></i><span>Content Library</span><i class="bi bi-chevron-right ms-auto"></i>
						</a>
						<ul id="content-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
							<li>
								<a href="#modal-part" class="overview">
									<i class="bi bi-dash"></i><span>Overview</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="bi bi-dash"></i><span>Posts</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="bi bi-dash"></i><span>Campaigns</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="bi bi-dash"></i><span>Content Calanders</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="bi bi-dash"></i><span>Ideas</span>
								</a>
							</li>
						</ul>
					</li><!-- End Content Nav -->

					<li class="nav-item">
						<a class="nav-link collapsed" data-bs-target="#draft-nav" data-bs-toggle="collapse" href="#">
						<i class="bi bi-x-diamond-fill"></i><span>Drafts</span><i class="bi bi-chevron-right ms-auto"></i>
						</a>
						<ul id="draft-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
							<li>
								<a href="#">
									<i class="bi bi-dash"></i><span>Draft Elements</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="bi bi-dash"></i><span>Draft Layouts</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="bi bi-dash"></i><span>Draft Editors</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="bi bi-dash"></i><span>Draft Validation</span>
								</a>
							</li>
						</ul>
					</li><!-- End Drafts Nav -->

					<li class="nav-item">
						<a class="nav-link collapsed" data-bs-target="#file-nav" data-bs-toggle="collapse" href="#">
						<i class="bi bi-toggles"></i><span>File Manager</span><i class="bi bi-chevron-right ms-auto"></i>
						</a>
						<ul id="file-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
							<li>
								<a href="#">
									<i class="bi bi-dash"></i><span>General Tables</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="bi bi-dash"></i><span>Data Tables</span>
								</a>
							</li>
						</ul>
					</li><!-- End File manager Nav -->

					<li class="nav-item">
						<a class="nav-link collapsed" data-bs-target="#team-nav" data-bs-toggle="collapse" href="#">
						<i class="bi bi-image"></i><span>Team Manager</span><i class="bi bi-chevron-right ms-auto"></i>
						</a>
						<ul id="team-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
							<li>
								<a href="#">
									<i class="bi bi-dash"></i><span>Product</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="bi bi-dash"></i></i><span>Location</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="bi bi-dash"></i><span>Discussion</span>
								</a>
							</li>
						</ul>
					</li><!-- End Team manager Nav -->

					<li class="nav-item">
						<a class="nav-link collapsed" data-bs-target="#report-nav" data-bs-toggle="collapse" href="#">
						<i class="bi bi-graph-up"></i><span>Reporting</span><i class="bi bi-chevron-right ms-auto"></i>
						</a>
						<ul id="report-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
							<li>
								<a href="#">
									<i class="bi bi-dash"></i><span>Daily Report</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="bi bi-dash"></i><span>Weekly Report</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="bi bi-dash"></i></i><span>Monthly Report</span>
								</a>
							</li>
						</ul>
					</li><!-- End Reporting Nav -->

					<li class="nav-item mt-20">
						<a class="nav-link collapsed" data-bs-target="#schedule-nav" data-bs-toggle="collapse" href="#">
						<i class="bi bi-gem"></i><span>My Schedules</span><i class="bi bi-chevron-right ms-auto"></i>
						</a>
						<ul id="schedule-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
							<li>
								<a href="#">
									<i class="bi bi-dash"></i><span>Tommorrow</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="bi bi-dash"></i><span>Friday</span>
								</a>
							</li>
						</ul>
					</li><!-- End Schedule Nav -->

					<li class="nav-item">
						<a class="nav-link collapsed" data-bs-target="#setting-nav" data-bs-toggle="collapse" href="#">
						<i class="bi bi-columns-gap"></i><span>Settings</span><i class="bi bi-chevron-right ms-auto"></i>
						</a>
						<ul id="setting-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
							<li>
								<a href="#">
									<i class="bi bi-dash"></i><span>Account settings</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="bi bi-dash"></i><span>Need Help?</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="bi bi-dash"></i></i><span>Sign Out</span>
								</a>
							</li>
						</ul>
					</li><!-- End Setting Nav -->
				</ul>

			</aside>
			<!-- End Sidebar-->

			<div class="main-part">
				<!-- ======= Header ======= -->
				<header id="header" class="header right-0 d-flex align-items-center bg-white ps-5">
					<div class="search-bar">
						<form class="search-form d-flex align-items-center" method="" action="#">
							<button type="submit" title="Search"><i class="bi bi-search"></i></button>
							<input type="text" name="query" placeholder="Search" title="Enter search keyword">
						</form>
					</div><!-- End Search Bar -->

					<nav class="header-nav ms-auto">
						<ul class="d-flex align-items-center">

							<li class="nav-item d-block d-lg-none">
								<a class="nav-link nav-icon search-bar-toggle " href="#">
									<i class="bi bi-search"></i>
								</a>
							</li><!-- End Search Icon-->

							<li class="nav-item dropdown">
								<a class="nav-link nav-icon create text-uppercase bg-warning text-white rounded d-inline-block ps-7" href="#">
									<i class="bi bi-ui-checks-grid"></i>
									<span class="create-new d-inline-block ps-0">Create New</span>
								</a><!-- End Notification Icon -->
							</li><!-- End Create new Nav -->

							<li class="nav-item dropdown">
								<a class="nav-link nav-icon" href="#">
									<i class="bi bi-bar-chart-fill p-2 rounded"></i>
								</a><!-- End chart Icon -->
							</li><!-- End chart Nav -->

							<li class="nav-item dropdown">
								<a class="nav-link nav-icon" href="#">
									<i class="bi bi-eraser-fill p-2 rounded"></i>
								</a><!-- End erase Icon -->
							</li><!-- End erase Nav -->

							<li class="nav-item dropdown pe-3">

								<a class="nav-link nav-profile d-flex align-items-center pe-0 ps-12 border border-secondary border-top-0 border-right-0 border-bottom-0" href="#" data-bs-toggle="dropdown">
									<div class="man d-block">
										<span class="d-none d-md-block">Good Morning</span>
										<span class="d-none d-md-block font-weight-bold">Brian Kamala</span>
									</div>
									<img src="media/profile-img.jpg" alt="Profile" class="ms-4 rounded">
								</a><!-- End Profile Iamge Icon -->

								<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
									<li class="dropdown-header">
										<h6>Brian Kamala</h6>
										<span>Web Designer</span>
									</li>
									<li>
										<hr class="dropdown-divider">
									</li>

									<li>
										<a class="dropdown-item d-flex align-items-center" href="#">
											<i class="bi bi-person bg-body text-black"></i>
											<span>My Profile</span>
										</a>
									</li>
									<li>
										<hr class="dropdown-divider">
									</li>

									<li>
										<a class="dropdown-item d-flex align-items-center" href="#">
											<i class="bi bi-gear bg-body text-black"></i>
											<span>Account Settings</span>
										</a>
									</li>

									<li>
										<hr class="dropdown-divider">
									</li>

									<li>
										<a class="dropdown-item d-flex align-items-center" href="#">
											<i class="bi bi-box-arrow-right bg-body text-black"></i>
											<span>Sign Out</span>
										</a>
									</li>

								</ul><!-- End Profile Dropdown Items -->
							</li><!-- End Profile Nav -->

						</ul>
					</nav><!-- End Icons Navigation -->

				</header><!-- End Header -->

				<div class="pagetitle ms-10 mt-5">
					<h1>Dashboard</h1>
					<nav>
						<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
						</ol>
					</nav>
				</div><!-- Page title ends here -->

			</div><!-- End Main part -->
			
				<!-- Modal -->
				<div id="modal-part" class="modal-part">
					<div id="overview-section">
						<div class="overview-header-start d-flex">
							<div class="overview-left-header p-5 ps-8">
								<h3 class="text-uppercase mb-0">
								Preview
								<span class="ms-10 d-inline-block py-2"><a href="#" class="p-3"><i class="bi bi-ui-checks-grid me-4"></i>Approved</a></span>
								</h3>
							</div>
							<div class="overview-right-header p-5 ps-8 d-flex align-items-center">
								<h3 class="text-uppercase mb-0">
								Activity
								</h3>
							</div>
						</div><!-- Overview header ends here -->

						<div class="overview-main d-flex">

							<div class="overview-left w-50 me-1">
								
								<div class="overview-left-body px-10 py-7">
									<div id="feed-main">
										<div class="feed-section py-5 rounded">
											<div class="feed-social-media d-flex align-items-center justify-content-between px-8">
												<i class="bi bi-chevron-left cursor-pointer"></i>
												<div class="media-icon">
													<span class="cursor-pointer"><i class="bi bi-facebook"></i></span>
													<span class="cursor-pointer px-10"><i class="bi bi-instagram text-white"></i></span>
													<span class="cursor-pointer"><i class="bi bi-github"></i></span>
													<span class="cursor-pointer"><i class="bi bi-twitter"></i></span>
												</div>
												<i class="bi bi-chevron-right cursor-pointer"></i>
											</div><!-- Social media ends here -->
	
											<div class="feed-img-section mt-8">
												<div class="feed-img">
													<img src="media/feed.png" alt="profile" class="w-100">
												</div>
												<div class="feed-description px-7 py-5">
													<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit iste similique nesciunt adipisci commodi rerum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam rem autem ipsum beatae veritatis facere ex corruption.<span class="text-primary">see  more</span></p>
												</div>
											</div><!-- Overflow left body ends here -->
	
											<div class="left-client-main py-7 ms-7 border border-secondary border-left-0 border-right-0 w-75">
												<div class="client-form mb-3 bg-secondary py-4 px-7 rounded">
													<span class="m-0 d-block">Select Client</span>
													<select name="client" id="client">
														<option value="0" selected><i class="bi bi-currency-bitcoin"></i>Batesha Enterprise Limited</option>
														<option value="">Hakim Enterprise Limited</option>
													</select>
												</div><!-- client form 1 ends here -->
	
												<div class="client-form border border-secondary rounded py-4 px-7">
													<span class="m-0 d-block">Content Type</span>
													<select name="client" id="client">
														<option value="0" selected>Social Media</option>
													</select>
												</div><!-- client form 2 ends here -->

												<div class="avatar-section">
													<div class="avatar-text d-flex align-items-center mt-5 mb-5">
														<h5 class="m-0">Selected Social</h5>
														 <span class="ms-5 cursor-pointer"><i class="bi bi-pencil-square"></i></span>
													</div>
													<div class="avatar-main d-flex align-items-center">
														<i class="bi bi-chevron-left cursor-pointer me-5"></i>
														<div class="avatar-icon">
															<span class="cursor-pointer"><img src="media/hacker.png" alt="avatar"></span>
															<span class="cursor-pointer"><img src="media/woman.png" alt="avatar"></span>
															<span class="cursor-pointer"><img src="media/profile.png" alt="avatar"></span>
															<span class="cursor-pointer"><img src="media/man.png" alt="avatar"></span>
														</div>
														<i class="bi bi-chevron-right cursor-pointer ms-20"></i>
													</div>
												</div><!-- client avatar ends here -->

												<div class="schedule-section d-flex mt-10 justify-content-between">
													<h5>Scheduled For: <span class="ms-10 font-weight-light">23/jun/2022 - 9:30 AM</span></h5>
													<span class="ms-5 cursor-pointer"><i class="bi bi-pencil-square"></i></span>
												</div>
											</div>
											<div class="campaign p-7">
												<h5>Campaign: <span class="ms-4 text-primary">This is our moment !</span></h5>
											</div>
	
											
										</div><!-- Main feed end here -->
									</div>
								</div>
							</div><!-- Overview left ends here -->

							<div class="overview-right w-50">
								
								<div class="overview-right-main p-5 pb-0">

									<div class="overview-status bg-white p-5 mt-5 mb-5 rounded">
										<div class="thumbnail">
											<img src="media/profile.png" alt="thumbnail" class="me-3">
											<select name="" id="" class="border border-warning rounded outline-none cursor-pointer">
												<option value="0" selected>To Everyone</option>
												<option value="">To only Agency</option>
											</select>
											<input type="text" placeholder="What's on your mind?" class="d-block border-0 ms-15 pb-10">
											<div class="mt-2 mb-2 hr w-100 h-2 bg-secondary"></div>
											<div class="text-post-bottom d-flex justify-content-between">
												<div class="text-format d-flex align-items-center">
													<span class="me-2 cursor-pointer"><i class="bi bi-type-bold"></i></span>
													<span class="me-2 cursor-pointer"><i class="bi bi-type-italic"></i></span>
													<span class="me-2 cursor-pointer"><i class="bi bi-type-underline"></i></span>
													<span class="me-2 cursor-pointer"><i class="bi bi-list-ul"></i></span>
													<span class="me-2 cursor-pointer"><i class="bi bi-list-ol"></i></span>
													<span class="ms-7 cursor-pointer"><i class="bi bi-link-45deg"></i></span>
												</div>
												<div class="button">
													<button type="submit" class="border rounded py-2 px-7">Add Comment</button>
												</div>
											</div>
										</div>
									</div><!-- End overview -->

									<div class="reply-check mt-15 mb-15 p-5">
										<div class="reply-item d-flex">
											<p>System: <span class="fw-normal">Publishing to </span><span class="text-primary fst-italic">Facebook - Batesha official</span> <i class="bi bi-chevron-right"></i> <span class="text-success">Successful</span> </p>
											<span class="">30 minutes ago</span>
										</div>
										
										<div class="reply-item d-flex">
											<p>System: <span class="fw-normal">Publishing to </span><span class="text-primary fst-italic">Twitter - Batesha official Enterprise</span> <i class="bi bi-chevron-right"></i> <span class="text-success">Successful</span></p>
											<span class="">30 minutes ago</span>
										</div>

										<div class="reply-item d-flex">
											<p>System: <span class="fw-normal">Publishing to </span><span class="fst-italic">Facebook Group - Batesha Fan Group</span> <i class="bi bi-chevron-right"></i> <span class="text-danger">Failed</span> - <span class="text-primary fw-normal cursor-pointer">Try again</span></p>
											<span class="">30 minutes ago</span>
										</div>

										<div class="reply-item d-flex">
											<p>System: <span class="fw-normal">Publishing to </span><span class="text-primary fst-italic">Instagram - @Bateshaofficial</span> <i class="bi bi-chevron-right"></i> <span class="text-success">Successful</span></p>
											<span class="">30 minutes ago</span>
										</div>

										<div class="reply-item d-flex">
											<p>System: <span class="fw-normal">Publishing to </span><span class="fst-italic">Instagram - @BateshaFan</span> <i class="bi bi-chevron-right"></i> <span class="text-danger">Failed</span> - <span class="text-primary fw-normal cursor-pointer">Try again</span></p>
											<span class="">30 minutes ago</span>
										</div>
									</div><!-- End reply section -->

									<div class="guest-reply mb-15 d-flex">
										<div class="guest-thumbnail me-3">
											<img src="media/woman.png" alt="">
										</div>
										<div class="guest-reply-main w-100 bg-white rounded p-5">
											<div class="guest-reply-box d-flex justify-content-between pb-5">
												<h5 class="ms-3">Grace Logan <span class="approved ms-5 py-1 px-3">Approved</span></h5>
												<span class="text-right d-inline-block text-primary fw-bold">2 hours ago</span>
											</div>
											<form action="" class="d-flex align-items-center border border-left-0 border-bottom-0 border-right-0 border-secondary pt-3">
												<input type="text" placeholder="Reply.." class="border-0 w-100">
												<i class="bi bi-link-45deg cursor-pointer"></i>
											</form>
										</div>
									</div><!-- Guest reply end here -->

									<div class="reply-item d-flex mt-15">
										<p class="fw-normal"><span class="text-primary fw-bold">Grace Logan:</span> Update Scheduling from <span class="fw-bold text-black">2th/jun/2022</span> to <span class="fw-bold text-black">23/jun/2022</span></p>
										<span class="">2 hours ago</span>
									</div><!-- Update -->


									<div class="guest-reply mt-15 mb-15 d-flex">
										<div class="guest-thumbnail me-3">
											<img src="media/man.png" alt="">
										</div>
										<div class="guest-reply-main w-100 bg-white rounded p-5">
											<div class="guest-reply-box d-flex justify-content-between pb-5">
												<h5 class="ms-3">Makula Francis <span class="update ms-5 py-1 px-3">Update</span></h5>
												<span class="text-right d-inline-block text-primary fw-bold">3 hours ago</span>
											</div>
											<form action="" class="d-flex align-items-center border border-left-0 border-bottom-0 border-right-0 border-secondary pt-3 ">
												<input type="text" placeholder="Reply.." class="border-0 w-100">
												<i class="bi bi-link-45deg cursor-pointer"></i>
											</form>
										</div>
									</div><!-- Guest reply end here -->


									<div class="guest-reply mt-15 mb-15 d-flex">
										<div class="guest-thumbnail me-3">
											<img src="media/man.png" alt="">
										</div>
										<div class="guest-reply-main w-100 bg-white rounded  p-7">
											<div class="guest-reply-box d-flex justify-content-between pb-5">
												<h5>Grace Logan <span class="comment ms-5 py-1 px-3">Commented</span></h5>
												<span class="text-right d-inline-block text-primary fw-bold">3 hours ago</span>
											</div>
											<div class="reply-box-description">
												<p class="fw-semibold mb-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid esse numquam ex placeat, exercitationem quam!</p>
											</div>

											<div class="reactions">
												<span class="cmnt-bg me-5 py-2 px-3 rounded"><i class="bi bi-chat-fill me-2 text-primary"></i><span class="text-primary">3</span></span>
												<span><i class="bi bi-heart-fill me-2 text-danger"></i><span>12</span></span>
											</div>


											<div class="sub-reply-main d-flex mt-15">
												<div class="sub-reply-thumbnail">
													<img src="media/hacker.png" alt="">
												</div>
												<div class="sub-reply-text ms-5 w-100">
													<div class="guest-reply-box d-flex justify-content-between pb-1">
														<h5>Mr. Andarson</h5>
														<span class="text-right d-inline-block text-primary fw-bold">3 hours ago</span>
													</div>
													<div class="reply-box-description">
														<p class="fw-semibold m-0">Hi Mr. Andarson! This is ok. Let me talk to the team. Keep waiting for the confirmation</p>
													</div>
												</div>
											</div>

											<div class="sub-reply-main d-flex mt-7">
												<div class="sub-reply-thumbnail">
													<img src="media/man.png" alt="">
												</div>
												<div class="sub-reply-text ms-5 w-100">
													<div class="guest-reply-box d-flex justify-content-between pb-1">
														<h5>Makula Andarson</h5>
														<span class="text-right d-inline-block text-primary fw-bold">3 hours ago</span>
													</div>
													<div class="reply-box-description">
														<p class="fw-semibold m-0">Hi Makula! Keep waiting for the confirmation</p>
													</div>
												</div>
											</div>

											<form action="" class="d-flex align-items-center border border-left-0 border-bottom-0 border-right-0 border-secondary pt-3 mt-10">
												<input type="text" placeholder="Reply.." class="border-0 w-100">
												<i class="bi bi-link-45deg cursor-pointer"></i>
											</form>
											
										</div>
									</div><!-- Guest commented  reply end here -->

									<div class="guest-reply mt-15 mb-15 d-flex">
										<div class="guest-thumbnail me-3">
											<img src="media/man.png" alt="">
										</div>
										<div class="guest-reply-main w-100 bg-white rounded  p-7">
											<div class="guest-reply-box d-flex justify-content-between pb-5">
												<h5>Grace Logan <span class="edited ms-5 py-1 px-3">Edited caption</span></h5>
												<span class="text-right d-inline-block text-primary fw-bold">3 hours ago</span>
											</div>
											
											<div class="edited-comment mt-3">
												<form action="" class="mt-3">
													<fieldset class="border border-primary rounded py-2 px-5">
														<legend class="text-primary fw-semibold">Revised Refault</legend>
														<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque temporibus ipsa laboriosam commodi pariatur vitae rem, mollitia nulla beatae quam tempora laborum necessitatibus nam? Distinctio!</p>
													</fieldset>
												</form>
												<form action="" class="mt-5">
													<fieldset class="border border-warning rounded py-2 px-5">
														<legend class="text-warning fw-semibold">Revised Refault</legend>
														<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque temporibus ipsa laboriosam commodi pariatur vitae rem, mollitia nulla beatae quam tempora laborum necessitatibus nam? Distinctio!</p>
													</fieldset>
												</form>
												<form action="" class="mt-5 mb-10">
													<fieldset class="border border-success rounded py-2 px-5">
														<legend class="text-success fw-semibold">Revised Refault</legend>
														<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque temporibus ipsa laboriosam commodi pariatur vitae rem, mollitia nulla beatae quam tempora laborum necessitatibus nam? Distinctio!</p>
													</fieldset>
												</form>
											</div>




											<div class="reactions">
												<span class="cmnt-bg me-5 py-2 px-3 rounded"><i class="bi bi-chat-fill me-2 text-primary"></i><span class="text-primary">0</span></span>
												<span><i class="bi bi-heart-fill me-2 text-danger"></i><span>0</span></span>
											</div>
											<form action="" class="d-flex align-items-center border border-left-0 border-bottom-0 border-right-0 border-secondary pt-3 mt-5">
												<input type="text" placeholder="Reply.." class="border-0 w-100">
												<i class="bi bi-link-45deg cursor-pointer"></i>
											</form>
											
										</div>

										
									</div><!-- Guest reply modified end -->

									<div class="guest-reply mt-15 mb-15 d-flex">
										<div class="guest-thumbnail me-3">
											<img src="media/man.png" alt="">
										</div>
										<div class="guest-reply-main w-100 bg-white rounded p-5">
											<div class="guest-reply-box d-flex justify-content-between pb-5">
												<h5 class="ms-3">Makula Francis <span class="create ms-5 py-1 px-3">Update</span></h5>
												<span class="text-right d-inline-block text-primary fw-bold">2 days ago</span>
											</div>
											<form action="" class="d-flex align-items-center border border-left-0 border-bottom-0 border-right-0 border-secondary pt-3 ">
												<input type="text" placeholder="Reply.." class="border-0 w-100">
												<i class="bi bi-link-45deg cursor-pointer"></i>
											</form>
										</div>
									</div><!-- Guest reply end here -->			
								</div>
							</div><!-- Overview right ends here -->

						</div><!-- Overview main ends here -->

						<div class="overview-footer mt-10 d-flex">

							<div class="overview-left-footer py-2 px-4 d-flex align-items-center ">
								<div class="btn-left d-flex justify-content-start">
									<div class="overview-left-footer-btn">
										<a href="#" class="fw-bold"><i class="bi bi-ui-checks-grid"></i>Delete</a>
									</div>

									<div class="overview-left-footer-btn">
										<a href="#" class="fw-bold"><i class="bi bi-ui-checks-grid"></i>Show</a>
									</div>
								</div>

								<div class="btn-right d-flex justify-content-end">
									<div class="overview-left-footer-btn undo">
										<a href="#" class="fw-bold text-uppercase"><i class="bi bi-ui-checks-grid"></i>Undo Approve</a>
									</div>

									<div class="overview-left-footer-btn edit me-0 border-0">
										<a href="#" class="fw-bold"><i class="bi bi-ui-checks-grid"></i>Edit</a>
									</div>
								</div>

								
							</div><!-- Overview left footer ends here -->

							<div class="overview-right-footer py-2 px-4">
								<input type="text" placeholder="Add a comment.." class="fw-bold p-5 w-100 d-block border-0">
							</div><!-- Overview right footer ends here -->

						</div><!-- Overview footer ends here -->
					</div>
				</div><!-- Modal ends here -->

				<div class="overlay"></div>

		<!-- End::your code -->
		</div>

		<!--begin::Javascript-->
		<script>var hostUrl = "scripts/lib/uikit/";</script>
		<script src="scripts/lib/uikit/plugins/global/plugins.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/plugins/global/plugins.bundle.js') ?>"></script>
		<script src="scripts/lib/uikit/js/scripts.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/js/scripts.bundle.js') ?>"></script>
		<script src="scripts/lib/uikit/js/widgets.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/js/widgets.bundle.js') ?>"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="scripts/lib/custom.js?v=<?php echo filemtime('scripts/lib/custom.js') ?>"></script>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
