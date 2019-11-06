<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="global_assets/js/main/jquery.min.js"></script>
	<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/media/fancybox.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/content_cards_content.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.php" class="d-inline-block">
				<img src="global_assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="d-md-none ml-2">Git updates</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">9</span>
					</a>

					<div class="dropdown-menu dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Git updates</span>
							<a href="#" class="text-default"><i class="icon-sync"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>

									<div class="media-body">
										Drop the IE <a href="#">specific hacks</a> for temporal inputs
										<div class="text-muted font-size-sm">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-git-commit"></i></a>
									</div>
									
									<div class="media-body">
										Add full font overrides for popovers and tooltips
										<div class="text-muted font-size-sm">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i class="icon-git-branch"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
										<div class="text-muted font-size-sm">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-git-merge"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
										<div class="text-muted font-size-sm">Dec 18, 18:36</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>
									
									<div class="media-body">
										Have Carousel ignore keyboard events
										<div class="text-muted font-size-sm">Dec 12, 05:46</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All updates</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i class="icon-bug2"></i></a>
							</div>
						</div>
					</div>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-md-none ml-2">Users</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Users online</span>
							<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
										<span class="d-block text-muted font-size-sm">Lead web developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Will Brason</a>
										<span class="d-block text-muted font-size-sm">Marketing manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
										<span class="d-block text-muted font-size-sm">Project manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
										<span class="d-block text-muted font-size-sm">Business developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
										<span class="d-block text-muted font-size-sm">UX expert</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All users</a>
							<a href="#" class="text-grey"><i class="icon-gear"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="d-md-none ml-2">Messages</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Messages</span>
							<a href="#" class="text-default"><i class="icon-compose"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3 position-relative">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">James Alexander</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>

										<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3 position-relative">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Margo Baker</span>
												<span class="text-muted float-right font-size-sm">12:16</span>
											</a>
										</div>

										<span class="text-muted">That was something he was unable to do because...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Jeremy Victorino</span>
												<span class="text-muted float-right font-size-sm">22:48</span>
											</a>
										</div>

										<span class="text-muted">But that would be extremely strained and suspicious...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Beatrix Diaz</span>
												<span class="text-muted float-right font-size-sm">Tue</span>
											</a>
										</div>

										<span class="text-muted">What a strenuous career it is that I've chosen...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Richard Vango</span>
												<span class="text-muted float-right font-size-sm">Mon</span>
											</a>
										</div>
										
										<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer justify-content-center p-0">
							<a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>Victoria</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">Victoria Baker</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									Dashboard
									<span class="d-block font-weight-normal opacity-50">No active orders</span>
								</span>
							</a>
						</li>
						<!--
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Layouts</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="index.php" class="nav-link active">Default layout</a></li>
								<li class="nav-item"><a href="layout_2/LTR/default/full/index.php" class="nav-link">Layout 2</a></li>
								<li class="nav-item"><a href="layout_3/LTR/default/full/index.php" class="nav-link">Layout 3</a></li>
								<li class="nav-item"><a href="layout_4/LTR/default/full/index.php" class="nav-link">Layout 4</a></li>
								<li class="nav-item"><a href="layout_5/LTR/default/full/index.php" class="nav-link">Layout 5</a></li>
								<li class="nav-item"><a href="layout_6/LTR/default/full/index.php" class="nav-link disabled">Layout 6 <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Themes</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="index.php" class="nav-link active">Default</a></li>
								<li class="nav-item"><a href="../../../LTR/material/full/index.php" class="nav-link">Material</a></li>
								<li class="nav-item"><a href="../../../LTR/dark/full/index.php" class="nav-link disabled">Dark <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item"><a href="../../../LTR/clean/full/index.php" class="nav-link disabled">Clean <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stack"></i> <span>Starter kit</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Starter kit">
								<li class="nav-item"><a href="../seed/layout_nav_horizontal.php" class="nav-link">Horizontal navigation</a></li>
								<li class="nav-item"><a href="../seed/sidebar_none.php" class="nav-link">No sidebar</a></li>
								<li class="nav-item"><a href="../seed/sidebar_main.php" class="nav-link">1 sidebar</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">2 sidebars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="../seed/sidebar_secondary.php" class="nav-link">Secondary sidebar</a></li>
										<li class="nav-item"><a href="../seed/sidebar_right.php" class="nav-link">Right sidebar</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">3 sidebars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="../seed/sidebar_right_hidden.php" class="nav-link">Right sidebar hidden</a></li>
										<li class="nav-item"><a href="../seed/sidebar_right_visible.php" class="nav-link">Right sidebar visible</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Content sidebars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="../seed/sidebar_content_left.php" class="nav-link">Left sidebar</a></li>
										<li class="nav-item"><a href="../seed/sidebar_content_right.php" class="nav-link">Right sidebar</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="../seed/layout_boxed.php" class="nav-link">Boxed layout</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="../seed/navbar_fixed_main.php" class="nav-link">Fixed main navbar</a></li>
								<li class="nav-item"><a href="../seed/navbar_fixed_secondary.php" class="nav-link">Fixed secondary navbar</a></li>
								<li class="nav-item"><a href="../seed/navbar_fixed_both.php" class="nav-link">Both navbars fixed</a></li>
								<li class="nav-item"><a href="../seed/layout_fixed.php" class="nav-link">Fixed layout</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="changelog.php" class="nav-link">
								<i class="icon-list-unordered"></i>
								<span>Changelog</span>
								<span class="badge bg-blue-400 align-self-center ml-auto">2.2</span>
							</a>
						</li>
						<li class="nav-item"><a href="../../../RTL/default/full/index.php" class="nav-link"><i class="icon-width"></i> <span>RTL version</span></a></li>/-->
						<!-- /main -->

						<!-- Forms -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">SECCIONES</div> <i class="icon-menu" title="Forms"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-pencil3"></i>EMPLEADOS<span></span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Form components">
								<li class="nav-item"><a href="form_inputs.php" class="nav-link">LISTADO</a></li>
								<li class="nav-item"><a href="form_checkboxes_radios.php" class="nav-link">REGISTRAR</a></li>
								<li class="nav-item"><a href="form_select2.php" class="nav-link">EDITAR</a></li>
								
							</ul>
						</li>
						
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-file-css"></i> <span>DEPARTAMENTOS</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="JSON forms">
								<li class="nav-item"><a href="alpaca_basic.php" class="nav-link">LISTADO</a></li>
								<li class="nav-item"><a href="alpaca_advanced.php" class="nav-link">REGISTRAR</a></li>
								<li class="nav-item"><a href="alpaca_controls.php" class="nav-link">EDITAR</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-spell-check"></i> <span>EMPRESAS</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Text editors">
								<li class="nav-item"><a href="editor_summernote.php" class="nav-link">LISTADO</a></li>
								<li class="nav-item"><a href="editor_ckeditor.php" class="nav-link">REGISTRAR</a></li>
								<li class="nav-item"><a href="editor_trumbowyg.php" class="nav-link">EDITAR</a></li>
								
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-select2"></i> <span>VACACIONES</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Pickers">
								<li class="nav-item"><a href="picker_date.php" class="nav-link">LISTADO</a></li>
								<li class="nav-item"><a href="picker_color.php" class="nav-link">REGISTRAR</a></li>
								<li class="nav-item"><a href="picker_location.php" class="nav-link">EDITAR</a></li>
							</ul>
						</li>
						<!-- /forms -->

						<!-- Components -->
						
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs"></div> <i class="icon-menu" title="Components"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid"></i> <span>PAGO DE TRANSPORTE</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Basic components">
								<li class="nav-item"><a href="components_modals.php" class="nav-link">PAGO DE TRANSPORTE</a></li>
								
							</ul>
						</li>
						
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-puzzle2"></i> <span>ALUMNO</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Content styling">
								
								<li class="nav-item"><a href="content_cards.php" class="nav-link">LISTADO</a></li>
								<li class="nav-item"><a href="content_cards_content.php" class="nav-link">REGISTRAR</a></li>
								<li class="nav-item"><a href="content_cards_layouts.php" class="nav-link">EDITAR</a></li>
								
							</ul>

						</li>
						
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-people"></i> <span>TUTORIAS</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Extra components">
								<li class="nav-item"><a href="extra_pnotify.php" class="nav-link">LISTADO</a></li>
								<li class="nav-item"><a href="extra_jgrowl_noty.php" class="nav-link">REGISTRAR</a></li>
								<li class="nav-item"><a href="extra_sweetalert.php" class="nav-link">EDITAR</a></li>
						<!-- /forms -->

						<!-- Components -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Components</div> <i class="icon-menu" title="Components"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid"></i> <span>Basic components</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Basic components">
								<li class="nav-item"><a href="components_modals.php" class="nav-link">Modals</a></li>
								<li class="nav-item"><a href="components_dropdowns.php" class="nav-link">Dropdown menus</a></li>
								<li class="nav-item"><a href="components_tabs.php" class="nav-link">Tabs component</a></li>
								<li class="nav-item"><a href="components_pills.php" class="nav-link">Pills component</a></li>
								<li class="nav-item"><a href="components_collapsible.php" class="nav-link">Collapsible</a></li>
								<li class="nav-item"><a href="components_navs.php" class="nav-link">Navs</a></li>
								<li class="nav-item"><a href="components_buttons.php" class="nav-link">Buttons</a></li>
								<li class="nav-item"><a href="components_popups.php" class="nav-link">Tooltips and popovers</a></li>
								<li class="nav-item"><a href="components_alerts.php" class="nav-link">Alerts</a></li>
								<li class="nav-item"><a href="components_pagination.php" class="nav-link">Pagination</a></li>
								<li class="nav-item"><a href="components_badges.php" class="nav-link">Badges</a></li>
								<li class="nav-item"><a href="components_progress.php" class="nav-link">Progress</a></li>
								<li class="nav-item"><a href="components_breadcrumbs.php" class="nav-link">Breadcrumbs</a></li>
								<li class="nav-item"><a href="components_media.php" class="nav-link">Media objects</a></li>
								<li class="nav-item"><a href="components_scrollspy.php" class="nav-link">Scrollspy</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
							<a href="#" class="nav-link"><i class="icon-puzzle2"></i> <span>Content styling</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Content styling">
								<li class="nav-item"><a href="content_page_header.php" class="nav-link">Page header</a></li>
								<li class="nav-item"><a href="content_page_footer.php" class="nav-link disabled">Page footer <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="content_cards.php" class="nav-link">Cards</a></li>
								<li class="nav-item"><a href="content_cards_content.php" class="nav-link active">Card content</a></li>
								<li class="nav-item"><a href="content_cards_layouts.php" class="nav-link">Card layouts</a></li>
								<li class="nav-item"><a href="content_cards_header.php" class="nav-link">Card header elements</a></li>
								<li class="nav-item"><a href="content_cards_footer.php" class="nav-link">Card footer elements</a></li>
								<li class="nav-item"><a href="content_cards_draggable.php" class="nav-link">Draggable cards</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="content_text_styling.php" class="nav-link">Text styling</a></li>
								<li class="nav-item"><a href="content_typography.php" class="nav-link">Typography</a></li>
								<li class="nav-item"><a href="content_helpers.php" class="nav-link">Helper classes</a></li>
								<li class="nav-item"><a href="content_helpers_flex.php" class="nav-link">Flex utilities</a></li>
								<li class="nav-item"><a href="content_syntax_highlighter.php" class="nav-link">Syntax highlighter</a></li>
								<li class="nav-item"><a href="content_grid.php" class="nav-link">Grid system</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-gift"></i> <span>Extra components</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Extra components">
								<li class="nav-item"><a href="extra_pnotify.php" class="nav-link">PNotify notifications</a></li>
								<li class="nav-item"><a href="extra_jgrowl_noty.php" class="nav-link">jGrowl and Noty notifications</a></li>
								<li class="nav-item"><a href="extra_sweetalert.php" class="nav-link">SweetAlert notifications</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="extra_sliders_noui.php" class="nav-link">NoUI sliders</a></li>
								<li class="nav-item"><a href="extra_sliders_ion.php" class="nav-link">Ion range sliders</a></li>
								<li class="nav-item"><a href="extra_trees.php" class="nav-link">Dynamic tree views</a></li>
								<li class="nav-item"><a href="extra_context_menu.php" class="nav-link">Context menu</a></li>
								<li class="nav-item"><a href="extra_fab.php" class="nav-link">Floating action buttons</a></li>
								<li class="nav-item"><a href="extra_session_timeout.php" class="nav-link">Session timeout</a></li>
								<li class="nav-item"><a href="extra_idle_timeout.php" class="nav-link">Idle timeout</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-droplet2"></i> <span>Color system</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Color system">
								<li class="nav-item"><a href="colors_primary.php" class="nav-link">Primary palette</a></li>
								<li class="nav-item"><a href="colors_danger.php" class="nav-link">Danger palette</a></li>
								<li class="nav-item"><a href="colors_success.php" class="nav-link">Success palette</a></li>
								<li class="nav-item"><a href="colors_warning.php" class="nav-link">Warning palette</a></li>
								<li class="nav-item"><a href="colors_info.php" class="nav-link">Info palette</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="colors_pink.php" class="nav-link">Pink palette</a></li>
								<li class="nav-item"><a href="colors_violet.php" class="nav-link">Violet palette</a></li>
								<li class="nav-item"><a href="colors_purple.php" class="nav-link">Purple palette</a></li>
								<li class="nav-item"><a href="colors_indigo.php" class="nav-link">Indigo palette</a></li>
								<li class="nav-item"><a href="colors_blue.php" class="nav-link">Blue palette</a></li>
								<li class="nav-item"><a href="colors_teal.php" class="nav-link">Teal palette</a></li>
								<li class="nav-item"><a href="colors_green.php" class="nav-link">Green palette</a></li>
								<li class="nav-item"><a href="colors_orange.php" class="nav-link">Orange palette</a></li>
								<li class="nav-item"><a href="colors_brown.php" class="nav-link">Brown palette</a></li>
								<li class="nav-item"><a href="colors_grey.php" class="nav-link">Grey palette</a></li>
								<li class="nav-item"><a href="colors_slate.php" class="nav-link">Slate palette</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-spinner2 spinner"></i> <span>Animations</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Animations">
								<li class="nav-item"><a href="animations_css3.php" class="nav-link">CSS3 animations</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Velocity animations</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="animations_velocity_basic.php" class="nav-link">Basic usage</a></li>
										<li class="nav-item"><a href="animations_velocity_ui.php" class="nav-link">UI pack effects</a></li>
										<li class="nav-item"><a href="animations_velocity_examples.php" class="nav-link">Advanced examples</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-thumbs-up2"></i> <span>Icons</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Icons">
								<li class="nav-item"><a href="icons_icomoon.php" class="nav-link">Icomoon</a></li>
								<li class="nav-item"><a href="icons_material.php" class="nav-link">Material</a></li>
								<li class="nav-item"><a href="icons_fontawesome.php" class="nav-link">Font awesome</a></li>
							</ul>
						</li>/-->
						<!-- /components -->

						<!-- Layout -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Layout</div> <i class="icon-menu" title="Layout options"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stack2"></i> <span>Page layouts</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Page layouts">
								<li class="nav-item"><a href="layout_fixed_navbar.php" class="nav-link">Fixed navbar</a></li>
								<li class="nav-item"><a href="layout_fixed_sidebar_custom.php" class="nav-link">Fixed sidebar - custom scroll</a></li>
								<li class="nav-item"><a href="layout_fixed_sidebar_native.php" class="nav-link">Fixed sidebar - native scroll</a></li>
								<li class="nav-item"><a href="layout_fixed_hideable_navbar.php" class="nav-link">Hideable navbar</a></li>
								<li class="nav-item"><a href="layout_fixed_footer.php" class="nav-link">Fixed footer</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="layout_boxed_default.php" class="nav-link">Boxed with default sidebar</a></li>
								<li class="nav-item"><a href="layout_boxed_mini.php" class="nav-link">Boxed with mini sidebar</a></li>
								<li class="nav-item"><a href="layout_boxed_full.php" class="nav-link">Boxed full width</a></li>
								<li class="nav-item"><a href="layout_boxed_content.php" class="nav-link">Boxed content</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-indent-decrease2"></i> <span>Sidebars</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Sidebars">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Main sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_default_collapse.php" class="nav-link">Default collapsible</a></li>
										<li class="nav-item"><a href="sidebar_default_hide.php" class="nav-link">Default hideable</a></li>
										<li class="nav-item"><a href="sidebar_default_hidden.php" class="nav-link">Default hidden</a></li>
										<li class="nav-item"><a href="sidebar_mini_collapse.php" class="nav-link">Mini collapsible</a></li>
										<li class="nav-item"><a href="sidebar_mini_hide.php" class="nav-link">Mini hideable</a></li>
										<li class="nav-item"><a href="sidebar_mini_hidden.php" class="nav-link">Mini hidden</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_default_color_light.php" class="nav-link">Light color</a></li>
										<li class="nav-item"><a href="sidebar_default_color_custom.php" class="nav-link">Custom color</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Secondary sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_secondary_after.php" class="nav-link">After default</a></li>
										<li class="nav-item"><a href="sidebar_secondary_before.php" class="nav-link">Before default</a></li>
										<li class="nav-item"><a href="sidebar_secondary_hidden.php" class="nav-link">Hidden by default</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_secondary_color_dark.php" class="nav-link">Dark color</a></li>
										<li class="nav-item"><a href="sidebar_secondary_color_custom.php" class="nav-link">Custom color</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Right sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_right_default_collapse.php" class="nav-link">Show - collapse main</a></li>
										<li class="nav-item"><a href="sidebar_right_default_hide.php" class="nav-link">Show - hide main</a></li>
										<li class="nav-item"><a href="sidebar_right_default_toggle.php" class="nav-link">Show - fix default width</a></li>
										<li class="nav-item"><a href="sidebar_right_mini_toggle.php" class="nav-link">Show - fix mini width</a></li>
										<li class="nav-item"><a href="sidebar_right_secondary_hide.php" class="nav-link">Show - hide secondary</a></li>
										<li class="nav-item"><a href="sidebar_right_visible.php" class="nav-link">Visible by default</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_right_color_dark.php" class="nav-link">Dark color</a></li>
										<li class="nav-item"><a href="sidebar_right_color_custom.php" class="nav-link">Custom color</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Content sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_content_left.php" class="nav-link">Left position</a></li>
										<li class="nav-item"><a href="sidebar_content_left_stretch.php" class="nav-link">Left stretched</a></li>
										<li class="nav-item"><a href="sidebar_content_left_hidden.php" class="nav-link">Left hidden</a></li>
										<li class="nav-item"><a href="sidebar_content_right.php" class="nav-link">Right position</a></li>
										<li class="nav-item"><a href="sidebar_content_right_stretch.php" class="nav-link">Right stretched</a></li>
										<li class="nav-item"><a href="sidebar_content_right_hidden.php" class="nav-link">Right hidden</a></li>
										<li class="nav-item"><a href="sidebar_content_sections.php" class="nav-link">Sectioned sidebar</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_content_color_dark.php" class="nav-link">Dark color</a></li>
										<li class="nav-item"><a href="sidebar_content_color_custom.php" class="nav-link">Custom color</a></li>
										<li class="nav-item"><a href="sidebar_content_color_sections_custom.php" class="nav-link">Custom sections color</a></li>
									</ul>
								</li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="sidebar_components.php" class="nav-link">Sidebar components</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-menu3"></i> <span>Navbars</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Navbars">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Single navbar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="navbar_single_top_static.php" class="nav-link">Single top static</a></li>
										<li class="nav-item"><a href="navbar_single_top_fixed.php" class="nav-link">Single top fixed</a></li>
										<li class="nav-item"><a href="navbar_single_bottom_static.php" class="nav-link">Single bottom static</a></li>
										<li class="nav-item"><a href="navbar_single_bottom_fixed.php" class="nav-link">Single bottom fixed</a></li>
										<li class="nav-item"><a href="navbar_single_header_before.php" class="nav-link">Before page header</a></li>
										<li class="nav-item"><a href="navbar_single_header_after.php" class="nav-link">After page header</a></li>
										<li class="nav-item"><a href="navbar_single_content_after.php" class="nav-link">After page content</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Multiple navbars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="navbar_multiple_top_static.php" class="nav-link">Multiple top static</a></li>
										<li class="nav-item"><a href="navbar_multiple_top_fixed.php" class="nav-link">Multiple top fixed</a></li>
										<li class="nav-item"><a href="navbar_multiple_bottom_static.php" class="nav-link">Multiple bottom static</a></li>
										<li class="nav-item"><a href="navbar_multiple_bottom_fixed.php" class="nav-link">Multiple bottom fixed</a></li>
										<li class="nav-item"><a href="navbar_multiple_top_bottom.php" class="nav-link">Multiple - top and bottom</a></li>
										<li class="nav-item"><a href="navbar_multiple_secondary_sticky.php" class="nav-link">Multiple - secondary sticky</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Content navbar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="navbar_component_single.php" class="nav-link">Single navbar</a></li>
										<li class="nav-item"><a href="navbar_component_multiple.php" class="nav-link">Multiple navbars</a></li>
									</ul>
								</li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="navbar_colors.php" class="nav-link">Color options</a></li>
								<li class="nav-item"><a href="navbar_sizes.php" class="nav-link">Sizing options</a></li>
								<li class="nav-item"><a href="navbar_hideable.php" class="nav-link">Hide on scroll</a></li>
								<li class="nav-item"><a href="navbar_components.php" class="nav-link">Navbar components</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-sort"></i> <span>Vertical navigation</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Vertical navigation">
								<li class="nav-item"><a href="navigation_vertical_collapsible.php" class="nav-link">Collapsible menu</a></li>
								<li class="nav-item"><a href="navigation_vertical_accordion.php" class="nav-link">Accordion menu</a></li>
								<li class="nav-item"><a href="navigation_vertical_bordered.php" class="nav-link">Bordered navigation</a></li>
								<li class="nav-item"><a href="navigation_vertical_right_icons.php" class="nav-link">Right icons</a></li>
								<li class="nav-item"><a href="navigation_vertical_badges.php" class="nav-link">Badges</a></li>
								<li class="nav-item"><a href="navigation_vertical_disabled.php" class="nav-link">Disabled items</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-transmission"></i> <span>Horizontal navigation</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Horizontal navigation">
								<li class="nav-item"><a href="navigation_horizontal_click.php" class="nav-link">Submenu on click</a></li>
								<li class="nav-item"><a href="navigation_horizontal_hover.php" class="nav-link">Submenu on hover</a></li>
								<li class="nav-item"><a href="navigation_horizontal_elements.php" class="nav-link">With custom elements</a></li>
								<li class="nav-item"><a href="navigation_horizontal_tabs.php" class="nav-link">Tabbed navigation</a></li>
								<li class="nav-item"><a href="navigation_horizontal_disabled.php" class="nav-link">Disabled navigation links</a></li>
								<li class="nav-item"><a href="navigation_horizontal_mega.php" class="nav-link">Horizontal mega menu</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>Menu levels</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> Second level</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link"><i class="icon-firefox"></i> Second level with child</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="#" class="nav-link"><i class="icon-android"></i> Third level</a></li>
										<li class="nav-item nav-item-submenu">
											<a href="#" class="nav-link"><i class="icon-apple2"></i> Third level with child</a>
											<ul class="nav nav-group-sub">
												<li class="nav-item"><a href="#" class="nav-link"><i class="icon-php5"></i> Fourth level</a></li>
												<li class="nav-item"><a href="#" class="nav-link"><i class="icon-css3"></i> Fourth level</a></li>
											</ul>
										</li>
										<li class="nav-item"><a href="#" class="nav-link"><i class="icon-windows"></i> Third level</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> Second level</a></li>
							</ul>
						</li>/-->
						<!-- /layout -->

						<!-- Data visualization -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Data visualization</div> <i class="icon-menu" title="Data visualization"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-graph"></i> <span>Echarts library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="ECharts library">
								<li class="nav-item"><a href="echarts_lines.php" class="nav-link">Line charts</a></li>
								<li class="nav-item"><a href="echarts_areas.php" class="nav-link">Area charts</a></li>
								<li class="nav-item"><a href="echarts_columns_waterfalls.php" class="nav-link">Columns and waterfalls</a></li>
								<li class="nav-item"><a href="echarts_bars_tornados.php" class="nav-link">Bars and tornados</a></li>
								<li class="nav-item"><a href="echarts_scatter.php" class="nav-link">Scatter charts</a></li>
								<li class="nav-item"><a href="echarts_pies_donuts.php" class="nav-link">Pies and donuts</a></li>
								<li class="nav-item"><a href="echarts_funnels_calendars.php" class="nav-link">Funnels and calendars</a></li>
								<li class="nav-item"><a href="echarts_candlesticks_others.php" class="nav-link">Candlesticks and others</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-statistics"></i> <span>D3 library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="D3 library">
								<li class="nav-item"><a href="d3_lines_basic.php" class="nav-link">Simple lines</a></li>
								<li class="nav-item"><a href="d3_lines_advanced.php" class="nav-link">Advanced lines</a></li>
								<li class="nav-item"><a href="d3_bars_basic.php" class="nav-link">Simple bars</a></li>
								<li class="nav-item"><a href="d3_bars_advanced.php" class="nav-link">Advanced bars</a></li>
								<li class="nav-item"><a href="d3_pies.php" class="nav-link">Pie charts</a></li>
								<li class="nav-item"><a href="d3_circle_diagrams.php" class="nav-link">Circle diagrams</a></li>
								<li class="nav-item"><a href="d3_tree.php" class="nav-link">Tree layout</a></li>
								<li class="nav-item"><a href="d3_other.php" class="nav-link">Other charts</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stats-dots"></i> <span>Dimple library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Dimple library">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Line charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_lines_horizontal.php" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_lines_vertical.php" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Bar charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_bars_horizontal.php" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_bars_vertical.php" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Area charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_area_horizontal.php" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_area_vertical.php" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Step charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_step_horizontal.php" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_step_vertical.php" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="dimple_pies.php" class="nav-link">Pie charts</a></li>
								<li class="nav-item"><a href="dimple_rings.php" class="nav-link">Ring charts</a></li>
								<li class="nav-item"><a href="dimple_scatter.php" class="nav-link">Scatter charts</a></li>
								<li class="nav-item"><a href="dimple_bubble.php" class="nav-link">Bubble charts</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stats-bars"></i> <span>C3 library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="C3 library">
								<li class="nav-item"><a href="c3_lines_areas.php" class="nav-link">Lines and areas</a></li>
								<li class="nav-item"><a href="c3_bars_pies.php" class="nav-link">Bars and pies</a></li>
								<li class="nav-item"><a href="c3_advanced.php" class="nav-link">Advanced examples</a></li>
								<li class="nav-item"><a href="c3_axis.php" class="nav-link">Chart axis</a></li>
								<li class="nav-item"><a href="c3_grid.php" class="nav-link">Grid options</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-google"></i> <span>Google charts</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Google charts">
								<li class="nav-item"><a href="google_lines.php" class="nav-link">Line charts</a></li>
								<li class="nav-item"><a href="google_bars.php" class="nav-link">Bar charts</a></li>
								<li class="nav-item"><a href="google_pies.php" class="nav-link">Pie charts</a></li>
								<li class="nav-item"><a href="google_scatter_bubble.php" class="nav-link">Bubble &amp; scatter charts</a></li>
								<li class="nav-item"><a href="google_other.php" class="nav-link">Other charts</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-map5"></i> <span>Maps integration</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Maps integration">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Google maps</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="maps_google_basic.php" class="nav-link">Basics</a></li>
										<li class="nav-item"><a href="maps_google_controls.php" class="nav-link">Controls</a></li>
										<li class="nav-item"><a href="maps_google_markers.php" class="nav-link">Markers</a></li>
										<li class="nav-item"><a href="maps_google_drawings.php" class="nav-link">Map drawings</a></li>
										<li class="nav-item"><a href="maps_google_layers.php" class="nav-link ">Layers</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="maps_vector.php" class="nav-link">Vector maps</a></li>
								<li class="nav-item"><a href="maps_echarts.php" class="nav-link disabled">ECharts maps <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>/-->
						<!-- /data visualization -->

						<!-- Extensions -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Extensions</div> <i class="icon-menu" title="Extensions"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-puzzle4"></i> <span>Extensions</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Extensions">
								<li class="nav-item"><a href="extension_image_cropper.php" class="nav-link">Image cropper</a></li>
								<li class="nav-item"><a href="extension_blockui.php" class="nav-link">Block UI</a></li>
								<li class="nav-item"><a href="extension_dnd.php" class="nav-link">Drag and drop</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-popout"></i> <span>JQuery UI</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="jQuery UI">
								<li class="nav-item"><a href="jqueryui_interactions.php" class="nav-link">Interactions</a></li>
								<li class="nav-item"><a href="jqueryui_forms.php" class="nav-link">Forms</a></li>
								<li class="nav-item"><a href="jqueryui_components.php" class="nav-link">Components</a></li>
								<li class="nav-item"><a href="jqueryui_sliders.php" class="nav-link">Sliders</a></li>
								<li class="nav-item"><a href="jqueryui_navigation.php" class="nav-link">Navigation</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-upload"></i> <span>File uploaders</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="File uploaders">
								<li class="nav-item"><a href="uploader_plupload.php" class="nav-link">Plupload</a></li>
								<li class="nav-item"><a href="uploader_bootstrap.php" class="nav-link">Bootstrap file uploader</a></li>
								<li class="nav-item"><a href="uploader_dropzone.php" class="nav-link">Dropzone</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-calendar3"></i> <span>Event calendars</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Event calendars">
								<li class="nav-item"><a href="fullcalendar_views.php" class="nav-link">Basic views</a></li>
								<li class="nav-item"><a href="fullcalendar_styling.php" class="nav-link">Event styling</a></li>
								<li class="nav-item"><a href="fullcalendar_formats.php" class="nav-link">Language and time</a></li>
								<li class="nav-item"><a href="fullcalendar_advanced.php" class="nav-link">Advanced usage</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-sphere"></i> <span>Internationalization</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Internationalization">
								<li class="nav-item"><a href="internationalization_switch_direct.php" class="nav-link">Direct translation</a></li>
								<li class="nav-item"><a href="internationalization_switch_query.php" class="nav-link">Querystring parameter</a></li>
								<li class="nav-item"><a href="internationalization_fallback.php" class="nav-link">Language fallback</a></li>
								<li class="nav-item"><a href="internationalization_callbacks.php" class="nav-link">Callbacks</a></li>
							</ul>
						</li>/-->
						<!-- /extensions -->

						<!-- Tables -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Tables</div> <i class="icon-menu" title="Tables"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-table2"></i> <span>Basic tables</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Basic tables">
								<li class="nav-item"><a href="table_basic.php" class="nav-link">Basic examples</a></li>
								<li class="nav-item"><a href="table_sizing.php" class="nav-link">Table sizing</a></li>
								<li class="nav-item"><a href="table_borders.php" class="nav-link">Table borders</a></li>
								<li class="nav-item"><a href="table_styling.php" class="nav-link">Table styling</a></li>
								<li class="nav-item"><a href="table_elements.php" class="nav-link">Table elements</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid7"></i> <span>Data tables</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Data tables">
								<li class="nav-item"><a href="datatable_basic.php" class="nav-link">Basic initialization</a></li>
								<li class="nav-item"><a href="datatable_styling.php" class="nav-link">Basic styling</a></li>
								<li class="nav-item"><a href="datatable_advanced.php" class="nav-link">Advanced examples</a></li>
								<li class="nav-item"><a href="datatable_sorting.php" class="nav-link">Sorting options</a></li>
								<li class="nav-item"><a href="datatable_api.php" class="nav-link">Using API</a></li>
								<li class="nav-item"><a href="datatable_data_sources.php" class="nav-link">Data sources</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-alignment-unalign"></i> <span>Data tables extensions</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Data tables extensions">
								<li class="nav-item"><a href="datatable_extension_reorder.php" class="nav-link">Columns reorder</a></li>
								<li class="nav-item"><a href="datatable_extension_row_reorder.php" class="nav-link">Row reorder</a></li>
								<li class="nav-item"><a href="datatable_extension_fixed_columns.php" class="nav-link">Fixed columns</a></li>
								<li class="nav-item"><a href="datatable_extension_fixed_header.php" class="nav-link">Fixed header</a></li>
								<li class="nav-item"><a href="datatable_extension_autofill.php" class="nav-link">Auto fill</a></li>
								<li class="nav-item"><a href="datatable_extension_key_table.php" class="nav-link">Key table</a></li>
								<li class="nav-item"><a href="datatable_extension_scroller.php" class="nav-link">Scroller</a></li>
								<li class="nav-item"><a href="datatable_extension_select.php" class="nav-link">Select</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Buttons</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="datatable_extension_buttons_init.php" class="nav-link">Initialization</a></li>
										<li class="nav-item"><a href="datatable_extension_buttons_flash.php" class="nav-link">Flash buttons</a></li>
										<li class="nav-item"><a href="datatable_extension_buttons_print.php" class="nav-link">Print buttons</a></li>
										<li class="nav-item"><a href="datatable_extension_buttons_php5.php" class="nav-link">php5 buttons</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="datatable_extension_colvis.php" class="nav-link">Columns visibility</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-file-spreadsheet"></i> <span>Handsontable</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Handsontable">
								<li class="nav-item"><a href="handsontable_basic.php" class="nav-link">Basic configuration</a></li>
								<li class="nav-item"><a href="handsontable_advanced.php" class="nav-link">Advanced setup</a></li>
								<li class="nav-item"><a href="handsontable_cols.php" class="nav-link">Column features</a></li>
								<li class="nav-item"><a href="handsontable_cells.php" class="nav-link">Cell features</a></li>
								<li class="nav-item"><a href="handsontable_types.php" class="nav-link">Basic cell types</a></li>
								<li class="nav-item"><a href="handsontable_custom_checks.php" class="nav-link">Custom &amp; checkboxes</a></li>
								<li class="nav-item"><a href="handsontable_ac_password.php" class="nav-link">Autocomplete &amp; password</a></li>
								<li class="nav-item"><a href="handsontable_search.php" class="nav-link">Search</a></li>
								<li class="nav-item"><a href="handsontable_context.php" class="nav-link">Context menu</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-versions"></i> <span>Responsive tables</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Responsive tables">
								<li class="nav-item"><a href="table_responsive.php" class="nav-link">Responsive basic tables</a></li>
								<li class="nav-item"><a href="datatable_responsive.php" class="nav-link">Responsive data tables</a></li>
							</ul>
						</li>/-->
						<!-- /tables -->

						<!-- Page kits -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Page kits</div> <i class="icon-menu" title="Page kits"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid6"></i> <span>General pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="General pages">
								<li class="nav-item"><a href="general_feed.php" class="nav-link">Feed</a></li>
								<li class="nav-item"><a href="general_embeds.php" class="nav-link">Embeds</a></li>
								<li class="nav-item"><a href="general_faq.php" class="nav-link">FAQ page</a></li>
								<li class="nav-item"><a href="general_knowledgebase.php" class="nav-link">Knowledgebase</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Blog</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="blog_classic_v.php" class="nav-link">Classic vertical</a></li>
										<li class="nav-item"><a href="blog_classic_h.php" class="nav-link">Classic horizontal</a></li>
										<li class="nav-item"><a href="blog_grid.php" class="nav-link">Grid</a></li>
										<li class="nav-item"><a href="blog_single.php" class="nav-link">Single post</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="blog_sidebar_left.php" class="nav-link">Left sidebar</a></li>
										<li class="nav-item"><a href="blog_sidebar_right.php" class="nav-link">Right sidebar</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Timelines</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="timelines_left.php" class="nav-link">Left timeline</a></li>
										<li class="nav-item"><a href="timelines_right.php" class="nav-link">Right timeline</a></li>
										<li class="nav-item"><a href="timelines_center.php" class="nav-link">Centered timeline</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Gallery</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="gallery_grid.php" class="nav-link">Media grid</a></li>
										<li class="nav-item"><a href="gallery_titles.php" class="nav-link">Media with titles</a></li>
										<li class="nav-item"><a href="gallery_description.php" class="nav-link">Media with description</a></li>
										<li class="nav-item"><a href="gallery_library.php" class="nav-link">Media library</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-wrench3"></i> <span>Service pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Service pages">
								<li class="nav-item"><a href="service_sitemap.php" class="nav-link">Sitemap</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Invoicing</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="invoice_template.php" class="nav-link">Invoice template</a></li>
										<li class="nav-item"><a href="invoice_grid.php" class="nav-link">Invoice grid</a></li>
										<li class="nav-item"><a href="invoice_archive.php" class="nav-link">Invoice archive</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Authentication</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="login_simple.php" class="nav-link">Simple login</a></li>
										<li class="nav-item"><a href="login_advanced.php" class="nav-link">More login info</a></li>
										<li class="nav-item"><a href="login_registration.php" class="nav-link">Simple registration</a></li>
										<li class="nav-item"><a href="login_registration_advanced.php" class="nav-link">More registration info</a></li>
										<li class="nav-item"><a href="login_unlock.php" class="nav-link">Unlock user</a></li>
										<li class="nav-item"><a href="login_password_recover.php" class="nav-link">Reset password</a></li>
										<li class="nav-item"><a href="login_hide_navbar.php" class="nav-link">Hide navbar</a></li>
										<li class="nav-item"><a href="login_transparent.php" class="nav-link">Transparent box</a></li>
										<li class="nav-item"><a href="login_background.php" class="nav-link">Background option</a></li>
										<li class="nav-item"><a href="login_validation.php" class="nav-link">With validation</a></li>
										<li class="nav-item"><a href="login_tabbed.php" class="nav-link">Tabbed form</a></li>
										<li class="nav-item"><a href="login_modals.php" class="nav-link">Inside modals</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Error pages</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="error_403.php" class="nav-link">Error 403</a></li>
										<li class="nav-item"><a href="error_404.php" class="nav-link">Error 404</a></li>
										<li class="nav-item"><a href="error_405.php" class="nav-link">Error 405</a></li>
										<li class="nav-item"><a href="error_500.php" class="nav-link">Error 500</a></li>
										<li class="nav-item"><a href="error_503.php" class="nav-link">Error 503</a></li>
										<li class="nav-item"><a href="error_offline.php" class="nav-link">Offline page</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-people"></i> <span>User pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="User pages">
								<li class="nav-item"><a href="user_pages_list.php" class="nav-link">User list</a></li>
								<li class="nav-item"><a href="user_pages_cards.php" class="nav-link">User cards</a></li>
								<li class="nav-item"><a href="user_pages_profile.php" class="nav-link">Simple profile</a></li>
								<li class="nav-item"><a href="user_pages_profile_tabbed.php" class="nav-link">Tabbed profile</a></li>
								<li class="nav-item"><a href="user_pages_profile_cover.php" class="nav-link">Profile with cover</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-cube3"></i> <span>Application pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Application pages">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Task manager</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="task_manager_grid.php" class="nav-link">Task grid</a></li>
										<li class="nav-item"><a href="task_manager_list.php" class="nav-link">Task list</a></li>
										<li class="nav-item"><a href="task_manager_detailed.php" class="nav-link">Task detailed</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Inbox</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="mail_list.php" class="nav-link">Mail list</a></li>
										<li class="nav-item"><a href="mail_list_detached.php" class="nav-link">Mail list (detached)</a></li>
										<li class="nav-item"><a href="mail_read.php" class="nav-link">Read mail</a></li>
										<li class="nav-item"><a href="mail_write.php" class="nav-link">Write mail</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="chat_layouts.php" class="nav-link">Chat layouts</a></li>
										<li class="nav-item"><a href="chat_options.php" class="nav-link">Chat options</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Search</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="search_basic.php" class="nav-link">Basic search results</a></li>
										<li class="nav-item"><a href="search_users.php" class="nav-link">User search results</a></li>
										<li class="nav-item"><a href="search_images.php" class="nav-link">Image search results</a></li>
										<li class="nav-item"><a href="search_videos.php" class="nav-link">Video search results</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Job search</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="job_list_cards.php" class="nav-link">Cards view</a></li>
										<li class="nav-item"><a href="job_list_list.php" class="nav-link">List view</a></li>
										<li class="nav-item"><a href="job_detailed.php" class="nav-link">Job detailed</a></li>
										<li class="nav-item"><a href="job_apply.php" class="nav-link">Apply</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Learning</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="learning_list.php" class="nav-link">List view</a></li>
										<li class="nav-item"><a href="learning_grid.php" class="nav-link">Grid view</a></li>
										<li class="nav-item"><a href="learning_detailed.php" class="nav-link">Detailed course</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Ecommerce set</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="ecommerce_product_list.php" class="nav-link">Product list</a></li>
										<li class="nav-item"><a href="ecommerce_product_grid.php" class="nav-link">Product grid</a></li>
										<li class="nav-item"><a href="ecommerce_orders_history.php" class="nav-link">Orders history</a></li>
										<li class="nav-item"><a href="ecommerce_customers.php" class="nav-link">Customers</a></li>
										<li class="nav-item"><a href="ecommerce_pricing.php" class="nav-link">Pricing tables</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-atom2"></i> <span>Widgets</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Widgets">
								<li class="nav-item"><a href="widgets_content.php" class="nav-link">Content widgets</a></li>
								<li class="nav-item"><a href="widgets_stats.php" class="nav-link">Statistics widgets</a></li>
								<li class="nav-item"><a href="widgets_menu.php" class="nav-link disabled">Menu widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item"><a href="widgets_form.php" class="nav-link disabled">Form widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>/-->
						<!-- /page kits -->

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Content</span> - Card Content</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="content_cards_content.php" class="breadcrumb-item">Content</a>
							<span class="breadcrumb-item active">Card content</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item">
								<i class="icon-comment-discussion mr-2"></i>
								Support
							</a>

							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Settings
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">
<div class="card-body">
						

						<form action="#">
							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Alumnos</legend>
<p>Sexo:
  <input type="radio" name="hm" value="h" required> Hombre
  <input type="radio" name="hm" value="m" required> Mujer
</p>
								<div class="form-group row">
									<label class="col-form-label col-lg-2">NOMBRE</label>
									<div class="col-lg-10">
										<input type="text" class="form-control">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">MATRICULA</label>
									<div class="col-lg-10">
										<input type="password" class="form-control">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">CARRERA</label>
									<div class="col-lg-10">
										<input type="text" class="form-control">
									</div>
								</div>

							<div class="modal-footer">
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_animation">FILING<i class="icon-play3 ml-2"></i></button></td>
								
							</div>
								
							</div>
				<!-- Card image placement -->
				


						<!-- Top placement -->
						<!--
						<div class="card">
							<div class="card-img-actions">
								<img class="card-img-top img-fluid" src="global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img-top">
									<a href="global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2" data-popup="lightbox">
										Preview
									</a>
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 ml-2">
										Details
									</a>
								</div>
							</div>

							<div class="card-body">
								<h5 class="card-title">Top placement</h5>
								<p class="card-text">Default <code>top</code> placement - image always comes first in the card with text or other content below. Use <code>.card-img-top</code> image class to round top image corners.</p>
							</div>

							<div class="card-footer bg-transparent d-flex justify-content-between">
								<span class="text-muted">Last updated 3 mins ago</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-half font-size-base text-warning-300"></i>
									<span class="text-muted ml-2">(12)</span>
								</span>
							</div>
						</div>/-->
						<!-- /top placement -->


						<!-- Below card header -->
						<!--
						<div class="card">
							<div class="card-header bg-transparent header-elements-inline">
								<h6 class="card-title">Below card header</h6>
								<div class="header-elements">
									<span class="badge bg-danger">Paid</span>
			                	</div>
							</div>

							<div class="card-img-actions">
								<img class="img-fluid" src="global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay">
									<a href="global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2" data-popup="lightbox">
										Preview
									</a>
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 ml-2">
										Details
									</a>
								</div>
							</div>

							<div class="card-body">
								<p class="card-text">Example of the card image, placed right after card header and before card content body. Image requires <code>.img-fluid</code> class for proper sizing.</p>
							</div>

							<div class="card-footer">
								<div class="input-group">
									<input type="text" class="form-control border-right-0" placeholder="Add comment...">

									<span class="input-group-append">
										<button class="btn bg-blue" type="button"><i class="icon-paperplane"></i></button>
									</span>
								</div>
							</div>
						</div>/-->
						<!-- /below card header -->

					</div>

					<div class="col-md-4">

						<!-- Middle placement -->
						<!--
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Middle placement</h5>
								<p class="card-text">Example of <code>middle</code> placement - image placed between card content containers (card header, card body and card footer). Image requires <code>.img-fluid</code> class for proper sizing.</p>
							</div>

							<div class="card-img-actions">
								<img class="img-fluid" src="global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay">
									<a href="global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2" data-popup="lightbox">
										Preview
									</a>
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 ml-2">
										Details
									</a>
								</div>
							</div>

							<div class="card-footer d-flex justify-content-between">
								<span class="font-size-sm text-uppercase font-weight-semibold">Nov 12, 11:25 am</span>
								<span class="font-size-sm text-uppercase text-success font-weight-semibold">Due in 12 days</span>
							</div>
						</div>/-->
						<!-- /middle placement -->


						<!-- Multiple titles -->
						<!--
						<div class="card">
							<div class="card-header bg-light d-flex justify-content-between">
								<span><i class="icon-user-check mr-2"></i> <a href="#">Eugene Kopyov</a></span>
								<span class="text-muted">Added 2 hours ago</span>
							</div>

							<div class="card-img-actions">
								<img class="img-fluid" src="global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay">
									<a href="global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2" data-popup="lightbox">
										Preview
									</a>
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 ml-2">
										Details
									</a>
								</div>
							</div>

							<div class="card-body">
								<h6 class="card-title font-weight-semibold">Multiple titles</h6>
								<p class="card-text">Another example of middle image placement - after header, before body that includes card title. Image also requires <code>.img-fluid</code> class.</p>
							</div>

							<div class="card-footer bg-transparent d-flex justify-content-between border-top-0 pt-0">
								<ul class="list-inline mb-0 mr-2">
									<li class="list-inline-item">
										<a href="#" class="text-pink-400"><i class="icon-heart5"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="#" class="text-default"><i class="icon-bubble2"></i></a>
									</li>
								</ul>

								<ul class="list-inline mb-0">
									<li class="list-inline-item"><a href="#">Edit</a></li>
									<li class="list-inline-item"><a href="#">Delete</a></li>
								</ul>
							</div>
						</div>/-->
						<!-- /multiple titles -->

					</div>

					<div class="col-md-4">

						<!-- Bottom placement -->
						<!--
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Bottom placement</h5>
								<p class="card-text">Example of <code>bottom</code> placement - image always comes last in the card with text or other content above. Use <code>.card-img-bottom</code> image class to round bottom image corners.</p>
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div class="text-muted"><i class="icon-spinner2 spinner mr-2"></i> Processing...</div>

								<div class="progress w-100 w-sm-auto wmin-sm-200 mt-2 mt-sm-0" style="height: 0.375rem;">
									<div class="progress-bar bg-indigo-400 progress-bar-striped progress-bar-animated" style="width: 60%;">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
							</div>

							<div class="card-img-actions">
								<img class="img-fluid" src="global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay">
									<a href="global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2" data-popup="lightbox">
										Preview
									</a>
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 ml-2">
										Details
									</a>
								</div>
							</div>
						</div>/-->
						<!-- /bottom placement -->


						<!-- Multiple footers -->
						<!--
						<div class="card">
							<div class="card-img-actions">
								<img class="img-fluid" src="global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay">
									<a href="global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2" data-popup="lightbox">
										Preview
									</a>
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 ml-2">
										Details
									</a>
								</div>
							</div>

							<div class="card-footer bg-transparent d-flex justify-content-between border-top-0 pb-0">
								<span class="text-muted">23 430 followers</span>

								<ul class="list-inline list-inline-condensed mb-0">
									<li class="list-inline-item">
										<a href="#" class="text-indigo-400"><i class="icon-thumbs-up2"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="#" class="text-danger"><i class="icon-thumbs-down2"></i></a>
									</li>
									<li class="list-inline-item ml-3">
										<a href="#" class="text-muted"><i class="icon-flag4"></i></a>
									</li>
								</ul>
							</div>

							<div class="card-body">
								<h6 class="card-title font-weight-semibold">Multiple footers</h6>
								<p class="card-text">In this example card image is on top, but content has multiple containers - use spacing utility classes to control vertical spacing of card content.</p>
							</div>

							<div class="card-footer d-flex justify-content-between">
								<a href="#" class="text-default"><i class="icon-bubble2 mr-2"></i> Comment</a>
								<span class="text-muted"><i class="icon-eye mr-2"></i> 673</span>
							</div>
						</div>/-->
						<!-- /multiple footers -->

					</div>
				</div>
				<!-- /card image placement -->


				<!-- Card image overlays -->
				<!--
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card image overlays
					</h6>
					<span class="text-muted d-block">Link, zoom and overlay with actions</span>
				</div>

				<div class="row">
					<div class="col-md-4">/-->

						<!-- Linked image -->
						<!--
						<div class="card">
							<a href="#">
								<img class="card-img-top img-fluid" src="global_assets/images/placeholders/placeholder.jpg" alt="">
							</a>

							<div class="card-body">
								<h5 class="card-title">Linked image</h5>
								<p class="card-text">By default, cards are designed to showcase linked images with minimal required markup, including default class for rounded corners.</p>
							</div>

							<div class="card-footer d-flex justify-content-between">
								<span class="text-muted">Last updated 3 mins ago</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-half font-size-base text-warning"></i>
									<i class="icon-star-empty3 font-size-base text-warning"></i>
									<span class="text-muted ml-2">(43)</span>
								</span>
							</div>
						</div>/-->
						<!-- /linked image -->

					</div>

					<div class="col-md-4">

						<!-- Zooming -->
						<!--
						<div class="card">
							<div class="card-img-actions">
								<a href="global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
									<img class="card-img-top img-fluid" src="global_assets/images/placeholders/placeholder.jpg" alt="">
									<span class="card-img-actions-overlay card-img-top">
										<i class="icon-plus3 icon-2x"></i>
									</span>
								</a>
							</div>

							<div class="card-body">
								<h5 class="card-title">Zooming</h5>
								<p class="card-text">Extend card image with simple zoomable lightbox. The icon is inserted directly in php and can be easily changed.</p>
							</div>

							<div class="card-footer d-flex justify-content-between">
								<span class="text-muted">Last updated 2 hours ago</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-empty3 font-size-base text-warning"></i>
									<span class="text-muted ml-2">(86)</span>
								</span>
							</div>
						</div>/-->
						<!-- /zooming -->

					</div>

					<div class="col-md-4">

						<!-- Overlay buttons -->
						<!--
						<div class="card">
							<div class="card-img-actions">
								<img class="card-img-top img-fluid" src="global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img-top">
									<a href="global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2" data-popup="lightbox">
										Preview
									</a>
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 ml-2">
										Details
									</a>
								</div>
							</div>

							<div class="card-body">
								<h5 class="card-title">Overlay buttons</h5>
								<p class="card-text">Add as many buttons or links as you want, all of them will be vertically and horizontally centered. Supports all available styles.</p>
							</div>

							<div class="card-footer d-flex justify-content-between">
								<span class="text-muted">Last updated yesterday</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<span class="text-muted ml-2">(79)</span>
								</span>
							</div>
						</div>/-->
						<!-- /overlay buttons -->

					</div>
				</div>
				<!-- /card image overlays -->


				<!-- Card video placement -->
				<!--
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card video options
					</h6>
					<span class="text-muted d-block">Video container placements</span>
				</div>

				<div class="row">
					<div class="col-md-4">/-->

						<!-- Top placement -->
						<!--
						<div class="card">
							<div class="embed-responsive embed-responsive-16by9 card-img-top">
								<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/173541384?title=0&byline=0&portrait=0" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
							</div>

							<div class="card-body">
								<h5 class="card-title">Top placement</h5>
								<p class="card-text">Default <code>top</code> placement - video always comes first in the card with text or other content below. Use <code>.card-img-top</code> helper class to round top video container corners.</p>
							</div>

							<div class="card-footer bg-transparent d-flex justify-content-between">
								<span class="text-muted">Last updated 3 mins ago</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-half font-size-base text-warning-300"></i>
									<span class="text-muted ml-2">(12)</span>
								</span>
							</div>
						</div>/-->
						<!-- /top placement -->

					</div>

					<div class="col-md-4">

						<!-- Middle placement -->
						<!--
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Middle placement</h5>
								<p class="card-text">Example of <code>middle</code> placement - video placed between card content containers (header, body and footer). Middle option doesn't require any additional video container classes.</p>
							</div>

							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/173652088?title=0&byline=0&portrait=0" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
							</div>

							<div class="card-footer d-flex justify-content-between">
								<span class="font-size-sm text-uppercase font-weight-semibold">Nov 12, 11:25 am</span>
								<span class="font-size-sm text-uppercase text-success font-weight-semibold">Due in 12 days</span>
							</div>
						</div>/-->
						<!-- /middle placement -->

					</div>

					<div class="col-md-4">

						<!-- Bottom placement -->
						<!--
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Bottom placement</h5>
								<p class="card-text">Example of <code>bottom</code> placement - video always comes last in the card with text or other content above. Use <code>.card-img-bottom</code> helper class to round bottom video container corners.</p>
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div class="text-muted"><i class="icon-spinner2 spinner mr-2"></i> Uploading...</div>

								<div class="progress w-100 w-sm-auto wmin-sm-200 mt-2 mt-sm-0" style="height: 0.375rem;">
									<div class="progress-bar bg-success-400 progress-bar-striped progress-bar-animated" style="width: 60%;">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
							</div>

							<div class="embed-responsive embed-responsive-16by9 card-img-bottom">
								<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/127423845?title=0&byline=0&portrait=0" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
							</div>
						</div>/-->
						<!-- /bottom placement -->

					</div>
				</div>
				<!-- /card video placement -->


				<!-- Card text options -->
				<!--
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card text options
					</h6>
					<span class="text-muted d-block">Various text placement variations</span>
				</div>

				<div class="row">
					<div class="col-md-4">/-->

						<!-- White header and footer -->
						<!--
						<div class="card">
							<div class="card-header bg-white d-flex justify-content-between">
								<span class="font-size-sm text-uppercase font-weight-semibold">Invoice <a href="#">#4323</a></span>
								<span class="font-size-sm text-uppercase text-success font-weight-semibold">Due in 4 days</span>
							</div>
							<div class="card-body">
								<h6 class="card-title">White header and footer</h6>
								<p class="card-text">This example demonstrates how header and footer can handle multiple text containers. Both containers have white background color.</p>
							</div>

							<div class="card-footer bg-white d-flex justify-content-between">
								<span class="text-muted">Issued 23.12.2017</span>

								<ul class="list-inline mb-0">
									<li class="list-inline-item"><a href="#">Edit</a></li>
									<li class="list-inline-item"><a href="#">Delete</a></li>
								</ul>
							</div>
						</div>/-->
						<!-- /white header and footer -->


						<!-- Dark header, transparent footer -->
						<!--
						<div class="card">
							<div class="card-header bg-dark text-white d-flex justify-content-between">
								<span class="font-size-sm text-uppercase font-weight-semibold">Nov 12, 11:25am</span>
								<span class="font-size-sm text-uppercase font-weight-semibold">Due in 12 days</span>
							</div>
							<div class="card-body">
								<h6 class="card-title">Dark header, transparent footer</h6>
								<p class="card-text">You can easily mix header and footer styles on the fly just by adding utility classes to the footer and header containers.</p>
							</div>

							<div class="card-footer bg-transparent d-flex justify-content-between border-top-0 pt-0">
								<span class="text-muted">Last updated 3 mins ago</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-half font-size-base text-warning-300"></i>
									<span class="text-muted ml-2">(12)</span>
								</span>
							</div>
						</div>/-->
						<!-- /dark header, transparent footer -->


						<!-- Transparent header, white footer -->
						<!--
						<div class="card">
							<div class="card-header d-sm-flex justify-content-sm-between align-items-sm-center">
								<div>
									<i class="icon-reading mr-2"></i> Hi, <strong>Eugene</strong>
								</div>
								<div class="mt-1 mt-sm-0">You have <a href="#">3 new messages</a></div>
							</div>

							<div class="card-body">
								<h6 class="card-title">Transparent header, white footer</h6>
								<p class="card-text">This combination can be useful when your main content and actions need to be separated, but visually be a part of the card.</p>
							</div>

							<div class="card-footer bg-white d-flex justify-content-between">
								<div class="input-group">
									<input type="text" class="form-control border-right-0" placeholder="What's new?">

									<span class="input-group-append">
										<button class="btn bg-blue" type="button"><i class="icon-paperplane"></i></button>
									</span>
								</div>
							</div>
						</div>/-->
						<!-- /transparent header, white footer -->

					</div>

					<div class="col-md-4">

						<!-- Grey header and footer -->
						<!--
						<div class="card">
							<div class="card-header bg-light d-flex justify-content-between">
								<span class="font-size-sm text-uppercase font-weight-semibold">Invoice <a href="#">#5490</a></span>
								<span class="font-size-sm text-uppercase text-success font-weight-semibold">Due in 3 days</span>
							</div>

							<div class="card-body">
								<h6 class="card-title">Grey header and footer</h6>
								<p class="card-text">In this example header and footer have light grey background color. Grey color is default for the footer, but header requires <code>.bg-light</code> class.</p>
							</div>

							<div class="card-footer d-flex justify-content-between">
								<span class="text-muted">Issued 26.12.2017</span>

								<ul class="list-inline mb-0">
									<li class="list-inline-item"><a href="#">Edit</a></li>
									<li class="list-inline-item"><a href="#">Delete</a></li>
								</ul>
							</div>
						</div>/-->
						<!-- /grey header and footer -->


						<!-- Transparent header, dark footer -->
						<!--
						<div class="card">
							<div class="card-header d-flex justify-content-between">
								<span class="font-size-sm text-uppercase text-muted">Dec 28, 03:49am</span>
								<span class="font-size-sm text-uppercase text-danger font-weight-semibold">Overdue</span>
							</div>
							<div class="card-body">
								<h6 class="card-title">Transparent header, dark footer</h6>
								<p class="card-text">This example demonstrates transparent card header and dark card footer. Card title is placed inside card body content.</p>
							</div>

							<div class="card-footer bg-dark text-white d-flex justify-content-between">
								<span>Last updated 3 mins ago</span>
								<span>
									<i class="icon-star-full2 font-size-base text-orange-300"></i>
									<i class="icon-star-full2 font-size-base text-orange-300"></i>
									<i class="icon-star-full2 font-size-base text-orange-300"></i>
									<i class="icon-star-full2 font-size-base text-orange-300"></i>
									<i class="icon-star-empty3 font-size-base text-orange-300"></i>
									<span class="opacity-75 ml-2">(53)</span>
								</span>
							</div>
						</div>/-->
						<!-- /transparent header, dark footer -->


						<!-- Transparent header and footer -->
						<!--
						<div class="card">
							<div class="card-header d-sm-flex justify-content-sm-between align-items-sm-center">
								<div>
									<i class="icon-reading mr-2"></i> Hi, <strong>Eugene</strong>
								</div>
								<div class="mt-1 mt-sm-0">You have <a href="#">3 new messages</a></div>
							</div>

							<div class="card-body">
								<h6 class="card-title">Transparent header and footer</h6>
								<p class="card-text">If you need to extend the card with 2 extra areas with context info without separation, this combination might be very useful.</p>
							</div>

							<div class="card-footer bg-transparent d-flex justify-content-between border-top-0 pt-0">
								<div class="input-group">
									<input type="text" class="form-control border-right-0" placeholder="What's new?">

									<span class="input-group-append">
										<button class="btn bg-blue" type="button"><i class="icon-paperplane"></i></button>
									</span>
								</div>
							</div>
						</div>/-->
						<!-- /transparent header and footer -->

					</div>

					<div class="col-md-4">

						<!-- Custom header and footer colors -->
						<!--
						<div class="card">
							<div class="card-header bg-dark d-flex justify-content-between">
								<span class="font-size-sm text-uppercase font-weight-semibold">Invoice <a href="#" class="text-white">#2490</a></span>
								<span class="font-size-sm text-uppercase font-weight-semibold">Due in 2 days</span>
							</div>

							<div class="card-body">
								<h6 class="card-title">Custom header and footer color</h6>
								<p class="card-text">You can easily mix footer and header colors - just add color helper class to both containers and optional <code>.text-white</code> class to links.</p>
							</div>

							<div class="card-footer bg-dark d-flex justify-content-between">
								<span class="opacity-75">Issued 26.12.2017</span>

								<ul class="list-inline mb-0">
									<li class="list-inline-item"><a href="#" class="text-white">Edit</a></li>
									<li class="list-inline-item"><a href="#" class="text-white">Delete</a></li>
								</ul>
							</div>
						</div>/-->
						<!-- /custom header and footer colors -->


						<!-- Custom border color -->
						<!--
						<div class="card border-success">
							<div class="card-header alpha-success border-success d-flex justify-content-between">
								<span class="font-size-sm text-uppercase font-weight-semibold">Jan 3, 02:50am</span>
								<span class="font-size-sm text-uppercase text-success-700 font-weight-semibold">Due in 5 days</span>
							</div>
							<div class="card-body">
								<h6 class="card-title">Custom border color</h6>
								<p class="card-text">If you want to highlight cards or content areas, add color helper classes to the card and/or card footer and header.</p>
							</div>

							<div class="card-footer bg-transparent d-flex justify-content-between border-top-0 pt-0">
								<span class="text-muted">Uploaded 4 days ago</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<span class="text-muted ml-2">(452)</span>
								</span>
							</div>
						</div>/-->
						<!-- /custom border class -->


						<!-- Grey header, transparent footer -->
						<!--
						<div class="card">
							<div class="card-header bg-light d-sm-flex justify-content-sm-between align-items-sm-center">
								<div>
									<i class="icon-reading mr-2"></i> Hi, <strong>Eugene</strong>
								</div>
								<div class="mt-1 mt-sm-0">You have <a href="#">3 new messages</a></div>
							</div>

							<div class="card-body">
								<h6 class="card-title">Grey header, transparent footer</h6>
								<p class="card-text">And this combination is a perfect solution for displaying header with alternate content that is not really important, but nice to have.</p>
							</div>

							<div class="card-footer bg-transparent d-flex justify-content-between border-top-0 pt-0">
								<div class="input-group">
									<input type="text" class="form-control border-right-0" placeholder="What's new?">

									<span class="input-group-append">
										<button class="btn bg-blue" type="button"><i class="icon-paperplane"></i></button>
									</span>
								</div>
							</div>
						</div>/-->
						<!-- /grey header, transparent footer -->

					</div>
				</div>
				<!-- /card text options -->


				<!-- Card content alignment -->
				<!--
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card content alignment
					</h6>
					<span class="text-muted d-block">Horizontal and vertical content alignment</span>
				</div>

				<div class="row">
					<div class="col-md-4">/-->

						<!-- Left alignment -->
						<!--
						<div class="card">
							<div class="card-body">
								<i class="icon-checkmark3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3"></i>
								<h5 class="card-title">Left alignment</h5>
								<p class="mb-3">Left content alignment is the default option in left-to-right direction that doesn't require any extra utility classes.</p>

								<a href="#" class="btn bg-success">Read more <i class="icon-arrow-right14 ml-2"></i></a>
							</div>
						</div>/-->
						<!-- /left alignment -->


						<!-- Top alignment -->
						<!--
						<div class="card text-center" style="min-height: 350px;">
							<div class="card-body">
								<i class="icon-checkmark3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3"></i>
								<h5 class="card-title">Top alignment</h5>
								<p class="mb-3">Top content alignment is also the default option in LTR layout. Other vertical alignment options require flex utility classes.</p>

								<a href="#" class="btn bg-success">Read more <i class="icon-arrow-right14 ml-2"></i></a>
							</div>
						</div>/-->
						<!-- /top alignment -->

					</div>

					<div class="col-md-4">

						<!-- Center alignment -->
						<!--
						<div class="card text-center">
							<div class="card-body">
								<i class="icon-cross2 icon-2x text-danger border-danger border-3 rounded-round p-3 mb-3"></i>
								<h5 class="card-title">Center alignment</h5>
								<p class="mb-3">Use <code>.text-center</code> alignment utility class to center content horizontally. Responsive options are also available</p>

								<a href="#" class="btn bg-danger-400">Read more <i class="icon-arrow-right14 ml-2"></i></a>
							</div>
						</div>/-->
						<!-- /center alignment -->


						<!-- Middle alignment -->
						<!--
						<div class="card card-body justify-content-center text-center" style="min-height: 350px;">
							<div>
								<i class="icon-cross2 icon-2x text-danger border-danger border-3 rounded-round p-3 mb-3"></i>
								<h5 class="card-title">Middle alignment</h5>
								<p class="mb-3">Use <code>.justify-content-center</code> class to center content vertically. Add optional breakpoints to enable responsiveness</p>

								<a href="#" class="btn bg-danger-400">Read more <i class="icon-arrow-right14 ml-2"></i></a>
							</div>
						</div>/-->
						<!-- /middle alignment -->

					</div>

					<div class="col-md-4">

						<!-- Right alignment -->
						<!--
						<div class="card text-right">
							<div class="card-body">
								<i class="icon-question7 icon-2x text-blue border-blue border-3 rounded-round p-3 mb-3"></i>
								<h5 class="card-title">Right alignment</h5>
								<p class="mb-3">Use <code>.text-right</code> alignment utility class to center content horizontally. Add optional breakpoints to enable responsiveness</p>

								<a href="#" class="btn bg-blue">Read more <i class="icon-arrow-right14 ml-2"></i></a>
							</div>
						</div>/-->
						<!-- /right alignment -->


						<!-- Bottom alignment -->
						<!--
						<div class="card card-body justify-content-end text-center" style="min-height: 350px;">
							<div>
								<i class="icon-question7 icon-2x text-blue border-blue border-3 rounded-round p-3 mb-3"></i>
								<h5 class="card-title">Bottom alignment</h5>
								<p class="mb-3">Use <code>.justify-content-end</code> class to stick content to the bottom. Add optional breakpoints to enable responsiveness</p>

								<a href="#" class="btn bg-blue">Read more <i class="icon-arrow-right14 ml-2"></i></a>
							</div>
						</div>/-->
						<!-- /bottom alignment -->

					</div>
				</div>
				<!-- /card content alignment -->


				<!-- Card table options -->
				<!--
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card table options
					</h6>
					<span class="text-muted d-block">Various table placement options</span>
				</div>

				<div class="row">
					<div class="col-md-6">/-->

						<!-- Card body + table -->
						<!--
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Card body + table</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Simple example of the table that comes right after card body container (default placement). Doesn't require any additional classes since default table style doesn't include horizontal borders.
							</div>

							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Username</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Eugene</td>
											<td>Kopyov</td>
											<td>@Kopyov</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Victoria</td>
											<td>Baker</td>
											<td>@Vicky</td>
										</tr>
										<tr>
											<td>3</td>
											<td>James</td>
											<td>Alexander</td>
											<td>@Alex</td>
										</tr>
										<tr>
											<td>4</td>
											<td>Franklin</td>
											<td>Morrison</td>
											<td>@Frank</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="card-footer bg-light d-flex justify-content-between">
								<div>
									<div class="list-icons">
				                		<a href="#" class="list-icons-item"><i class="icon-file-eye"></i></a>
				                		<a href="#" class="list-icons-item ml-1"><i class="icon-file-pdf"></i></a>
				                		<a href="#" class="list-icons-item ml-1"><i class="icon-file-excel"></i></a>
				                	</div>
			                	</div>

								<ul class="list-inline list-inline-dotted mb-0 mt-1 mt-sm-0">
									<li class="list-inline-item"><a href="#">Download</a></li>
									<li class="list-inline-item"><a href="#">Upload</a></li>
								</ul>
							</div>
						</div>/-->
						<!-- /card body + table -->


						<!-- Table + card body -->
						<!--
						<div class="card">
							<div class="card-header bg-transparent header-elements-inline">
								<h5 class="card-title">Table + card body</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Username</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Eugene</td>
											<td>Kopyov</td>
											<td>@Kopyov</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Victoria</td>
											<td>Baker</td>
											<td>@Vicky</td>
										</tr>
										<tr>
											<td>3</td>
											<td>James</td>
											<td>Alexander</td>
											<td>@Alex</td>
										</tr>
										<tr>
											<td>4</td>
											<td>Franklin</td>
											<td>Morrison</td>
											<td>@Frank</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="card-body">
								In this example card body container comes after table - by default all table cells have top border, in this specific case card body includes top border for better visual content separation.
							</div>

							<div class="card-footer bg-light d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-left py-sm-2">
								<div>3290 entries found</div>

								<ul class="pagination pagination-sm pagination-pager pagination-pager-linked justify-content-between mt-2 mt-sm-0">
									<li class="page-item disabled"><a href="#" class="page-link">← Older</a></li>
									<li class="page-item"><a href="#" class="page-link">Newer →</a></li>
								</ul>
							</div>
						</div>/-->
						<!-- /table + card body -->

					</div>

					<div class="col-md-6">

						<!-- Combined table styles -->
						<!--
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Combined table styles</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								In this example table combines all default table styles: stripes, borders and row highlight. As always, all tables require base <code>.table</code> class for proper styling that matches Limitless theme.
							</div>

							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Username</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Eugene</td>
											<td>Kopyov</td>
											<td>@Kopyov</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Victoria</td>
											<td>Baker</td>
											<td>@Vicky</td>
										</tr>
										<tr>
											<td>3</td>
											<td>James</td>
											<td>Alexander</td>
											<td>@Alex</td>
										</tr>
										<tr>
											<td>4</td>
											<td>Franklin</td>
											<td>Morrison</td>
											<td>@Frank</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="card-footer bg-white d-flex justify-content-between">
								<div>
									<div class="list-icons">
				                		<a href="#" class="list-icons-item"><i class="icon-file-eye"></i></a>
				                		<a href="#" class="list-icons-item ml-1"><i class="icon-file-pdf"></i></a>
				                		<a href="#" class="list-icons-item ml-1"><i class="icon-file-excel"></i></a>
				                	</div>
			                	</div>

								<ul class="list-inline list-inline-dotted mb-0 mt-1 mt-sm-0">
									<li class="list-inline-item"><a href="#">Download</a></li>
									<li class="list-inline-item"><a href="#">Upload</a></li>
								</ul>
							</div>
						</div>/-->
						<!-- /combined table styles -->


						<!-- Table at the bottom -->
						<!--
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Table at the bottom</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								This element's order can be handy if you need to show the table at the very bottom of the card, below all other content containers - header, body and footer. You can of course add other content below.
							</div>

							<div class="card-footer bg-light d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-left py-sm-2">
								<div>5332 entries found</div>

								<ul class="pagination pagination-sm pagination-pager pagination-pager-linked justify-content-between mt-2 mt-sm-0">
									<li class="page-item disabled"><a href="#" class="page-link">← Older</a></li>
									<li class="page-item"><a href="#" class="page-link">Newer →</a></li>
								</ul>
							</div>

							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Username</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Eugene</td>
											<td>Kopyov</td>
											<td>@Kopyov</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Victoria</td>
											<td>Baker</td>
											<td>@Vicky</td>
										</tr>
										<tr>
											<td>3</td>
											<td>James</td>
											<td>Alexander</td>
											<td>@Alex</td>
										</tr>
										<tr>
											<td>4</td>
											<td>Franklin</td>
											<td>Morrison</td>
											<td>@Frank</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>/-->
						<!-- /table at the bottom -->

					</div>
				</div>
				<!-- /card table options -->


				<!-- Card navigation options -->
				<!--
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card navigation options
					</h6>
					<span class="text-muted d-block">Adapted navigation list for cards</span>
				</div>

				<div class="row">
					<div class="col-md-4">/-->

						<!-- Text list group -->
						<!--
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Text list group</h5>
								<p class="card-text">Create lists of content in a card with a flush list group. Use <code>.list-group-flush</code> class to remove borders and rounded corners.</p>
							</div>

							<ul class="list-group list-group-flush border-top">
								<li class="list-group-item">
									Sheared coasted so concurrent
									<span class="badge badge-dark ml-auto">New</span>
								</li>
								<li class="list-group-item">
									Goodness instead gull vulture
									<span class="badge bg-pink-400 badge-pill ml-auto">38</span>
								</li>
								<li class="list-group-item">
									Devilish yellow unsafe jerkily
									<span class="badge bg-indigo-400 ml-auto">Fixed</span>
								</li>
								<li class="list-group-item">
									Relentless ouch essentially
									<span class="badge bg-success badge-pill ml-auto">40</span>
								</li>
							</ul>

							<div class="card-footer d-flex justify-content-between">
								<span class="text-muted">Updated 3 mins ago</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-half font-size-base text-warning-300"></i>
									<span class="text-muted ml-2">(12)</span>
								</span>
							</div>
						</div>/-->
						<!-- /text list group -->

					</div>

					<div class="col-md-4">

						<!-- Linked list group -->
						<!--
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Linked list group</h5>
								<p class="card-text">Actionable list group items with hover, disabled, and active states. Use flex utility classes if your list items contain badges, text etc.</p>
							</div>

							<ul class="list-group list-group-flush border-top">
								<a href="#" class="list-group-item list-group-item-action">
									<span class="font-weight-semibold">
										<i class="icon-grid mr-2"></i>
										Basic components
									</span>
									<span class="badge bg-success ml-auto">New</span>
								</a>
								<a href="#" class="list-group-item list-group-item-action active">
									<span class="font-weight-semibold">
										<i class="icon-alignment-unalign mr-2"></i>
										Data tables extensions
									</span>
									<span class="badge bg-indigo-400 badge-pill ml-auto">38</span>
								</a>
								<a href="#" class="list-group-item list-group-item-action">
									<span class="font-weight-semibold">
										<i class="icon-cube3 mr-2"></i>
										Application pages
									</span>
									<span class="badge bg-pink-400 ml-auto">Fixed</span>
								</a>
								<a href="#" class="list-group-item list-group-item-action disabled">
									<span class="font-weight-semibold">
										<i class="icon-transmission mr-2"></i>
										Horizontal navigation
									</span>
									<span class="badge bg-dark badge-pill ml-auto">40</span>
								</a>
							</ul>

							<div class="card-footer d-flex justify-content-between">
								<span class="text-muted">Updated 2 hours ago</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-empty3 font-size-base text-warning"></i>
									<span class="text-muted ml-2">(86)</span>
								</span>
							</div>
						</div>/-->
						<!-- /linked list group -->

					</div>

					<div class="col-md-4">

						<!-- Multi column -->
						<!--
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Multi column</h5>
								<p class="card-text">Simple example of list nav with multiple columns. Use a set of responsive flex and spacing utility classes for proper positioning and spacing.</p>
							</div>

							<ul class="list-group list-group-flush border-top">
								<li class="list-group-item">
									<span class="font-weight-semibold">Full name:</span>
									<div class="ml-auto">Victoria Anna Davidson</div>
								</li>
								<li class="list-group-item">
									<span class="font-weight-semibold">Phone number:</span>
									<div class="ml-auto">+31 641 266545</div>
								</li>
								<li class="list-group-item">
									<span class="font-weight-semibold">Corporate email:</span>
									<div class="ml-auto"><a href="#">corporate@domain.com</a></div>
								</li>
								<li class="list-group-item">
									<span class="font-weight-semibold">Personal email:</span>
									<div class="ml-auto"><a href="#">personal@domain.com</a></div>
								</li>
							</ul>

							<div class="card-footer d-flex justify-content-between">
								<span class="text-muted">Updated yesterday</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<span class="text-muted ml-2">(79)</span>
								</span>
							</div>
						</div>/-->
						<!-- /multi column -->

					</div>
				</div>
				<!-- /card navigation options -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<!--
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
						<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
					</ul>
				</div>
			</div>/-->
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
