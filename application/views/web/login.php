<!-- Simple login form -->
					<form action="" method="post">
						<div class="panel panel-body login-form">
							<div class="text-center">
								<!-- <div class="icon-object border-slate-300 text-slate-300"><img src="foto/logo_surat.png" alt="Logo Surat Menyurat" width="50"></div> -->
								<h5 class="content-group">MASUKKAN AKUN ANDA</h5>
								<?php
								echo $this->session->flashdata('msg');
								?>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="text" class="form-control" name="username" placeholder="NIS / Username" required>
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" class="form-control" name="password" placeholder="Password" required>
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group">
										<button type="submit" name="btnlogin" class="btn btn-primary btn-block">Masuk <i class="icon-circle-right2 position-right"></i></button>

							</div>

							<div class="text-center">
								<!-- <a href="web/lupa_password">Lupa Password??</a> -->
							</div>
						</div>
					</form>
<!-- /simple login form -->
