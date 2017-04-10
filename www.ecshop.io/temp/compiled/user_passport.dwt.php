<?php echo $this->fetch('library/page_header.lbi'); ?>

	
	
	
	<div id="page-content" class="single-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
                                     <?php echo $this->fetch('library/ur_here.lbi'); ?>

<!--						<li><a href="index.html">Home</a></li>
						<li><a href="account.html">Account</a></li>-->
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="heading"><h2>会员登录</h2></div>
					<form name="formLogin" id="ff1" method="post" action="user.php">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="账号" name="username" id="username" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="请输入密码" name="password" id="email" required>
						</div>
					    <input type="hidden" name="act" value="act_login" />
                                            <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
					    
						<button type="submit" class="btn btn-1" name="login" id="login">登录</button>
						<a href="#">忘记密码?</a>
					</form>
				</div>
                                
                                        
                                        
                                        
			
				<div class="col-md-6">
					<div class="heading"><h2>新用户注册</h2></div>
					<form name="form2" id="ff2" method="post" action="user.php">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="账号" name="username" id="firstname" required>
						</div>
                                            
						<div class="form-group">
							<input type="tel" class="form-control" placeholder="邮箱地址" name="email" id="email" required>
						</div>
                                            
						<div class="form-group">
							<input type="password" class="form-control" placeholder="请输入密码" name="password" id="password" required>
						</div>
                                            
						<div class="form-group">
							<input type="password" class="form-control" placeholder="请再次输入密码" name="repassword" id="repassword" required>
						</div>
                                          
						<div class="form-group">
							<input name="agreement" id="agree" type="checkbox" value="1"> <?php echo $this->_var['lang']['agreement']; ?>
						</div>
                                             <input name="act" type="hidden" value="act_register" >
                                            <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                                            
						<button type="submit" class="btn btn-1">注册</button>
                                                
                                        </form>
				</div>
			</div>
                    
		</div>
	</div>
        
<?php echo $this->fetch('library/page_footer.lbi'); ?>

</body>
</html>