<?php
include('db/config.php');
include('includes/header.php');
include('lock.php');
?>
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Login-->
		<div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
			<!--begin::Aside-->
			<div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #FFF8DC;">
				<!--begin::Aside Top-->
				<div class="d-flex flex-column-auto flex-column pt-15">
					<!--begin::Aside header-->
					<a href="Sports-Bazar/Sports-Bazaar-Panel/" class="text-center mb-10">
						<img src="<?= BASE_URL ?>/assets/media/logos/sports-bazaar.png" class="max-h-160px" alt="" />
					</a>
					<!--end::Aside header-->
					<!--begin::Aside title-->
					<h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg" style="color: #986923;">Discover Amazing Panel Tools
						<br />with simple one click
					</h3>
					<!--end::Aside title-->
				</div>
				<!--end::Aside Top-->
				<!--begin::Aside Bottom-->
				<div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(<?= BASE_URL ?>assets/media/svg/illustrations/login-visual-1.svg)"></div>
				<!--end::Aside Bottom-->
			</div>
			<!--begin::Aside-->
			<!--begin::Content-->
			<div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
				<!--begin::Content body-->
				<div class="d-flex flex-column-fluid flex-center">
					<!--begin::Signin-->
					<div class="login-form login-signin">
						<!--begin::Form-->
						<form class="form" novalidate="novalidate" id="login-frm">
							<!--begin::Title-->
							<div class="pb-13 pt-lg-0 pt-5">
								<h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Welcome to KMF Media Backend</h3>
								<h4> <span style="color:#986923;"> Everything</span> under one roof.</h4>

							</div>
							<!--begin::Title-->
							<!--begin::Form group-->
							<div class="form-group">
								<label class="font-size-h6 font-weight-bolder text-dark">Email</label>
								<input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="text" name="email_id" autocomplete="off" placeholder="Email ID" />
							</div>
							<!--end::Form group-->
							<!--begin::Form group-->
							<div class="form-group">
								<div class="d-flex justify-content-between mt-n5">
									<label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
									<!-- <a href="javascript:;" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot">Forgot Password ?</a> -->
								</div>
								<input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="password" name="password" autocomplete="off" placeholder="Password" />
							</div>
							<!--end::Form group-->
							<!--begin::Action-->
							<div class="pb-lg-0 pb-5">
								<button type="submit" id="kt_login_signin_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3" name="login_submit">Log In</button>
							</div>
							<div class="text-dark-50 font-size-lg font-weight-bolder mr-10 mt-5">
								<span class="mr-1"><?= date('Y') ?> ©</span>
								<span class="mr-1">Disributed by</span>
								<a href="https://webecommedia.in/" target="_blank" class="text-dark-75 text-hover-primary">Prince Sachdeva.(SDE-2)</a>
								<a href="https://nationalmarketingprojects.com/"><img src="<?= BASE_URL ?>images/nidmm.png" alt="" width="50%" class="img-fluid mt-2"></a>
							</div>
							<!--end::Action-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Signin-->
				</div>
				<!--end::Content body-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Login-->
	</div>
	<!--end::Main-->
	<?php
	include('includes/footer.php');
	?>