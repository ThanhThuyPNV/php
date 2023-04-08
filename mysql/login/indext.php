<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/png" href="images/logohong.png">						
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">						
	<link rel="stylesheet" href="../css/bootstrap.min.css">						
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>						
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>						
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>						
</head>
<body>
<div class="container" style="margin-top: 40px;">																							
			<div class="row">																						
				<!-- col-md-offset-4: Di chuyển cột sang bên phải -->																					
				<div class="col-sm-6 col-md-4 col-md-offset-4">																					
					<div class="panel panel-danger">																				
						<div class="panel-heading">																			
							<h4><strong> ĐĂNG NHẬP VÀO TÀI KHOẢN </strong></h4>																		
							<p style="color: red;"><?php echo $error; ?></p>																		
						</div><!-- /panel-heading -->																			
																									
						<div class="panel-body">																			
							<form action="login-back.php" method="post" name="form-login" accept-charset="utf-8">																		
								<div class="row">																	
									<div class="col-sm-12 col-md-10 col-md-offset-1">																
										<div class="form-group">															
											<div class="input-group">														
												<span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>													
												<input type="text" name="username" class="form-control" placeholder="Tên đăng nhập của bạn" required />													
											</div>														
										</div><!-- /form-group -->															
																									
										<div class="form-group">															
											<div class="input-form">														
												<div class="input-group">													
													<span class="input-group-addon"><i class="fa fa-lock fa-lg"></i></span>												
													<input type="password" name="password" class="form-control" placeholder="Mật khẩu của bạn" required />												
												</div>													
											</div>														
										</div><!-- /form-group -->															
																									
										<div class="form-group">															
											<input type="submit" name="submit" class="btn btn-info btn-block btn-lg" value="Đăng nhập">														
										</div><!-- /form-group -->															
									</div><!-- /col -->																
								</div><!-- /row -->																	
							</form>																		
						</div><!-- /panel-body -->																			
																									
						<div class="panel-footer">																			
							<p>Nếu bạn chưa có tài khoản. Vui lòng <a href="register.php" onclick=""> Đăng ký </a></p>																		
						</div><!-- /panel-footer -->																			
																									
					</div><!-- /panel-danger -->																				
				</div><!-- /col -->																					
			</div><!-- /row -->																						
		</div><!-- /container -->								
</body>
</html>																					
																									