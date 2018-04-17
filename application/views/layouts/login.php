

<!DOCTYPE html>
<html>
<head>
	<title>secure log</title>
	

	<!-- CSS Unify -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/unify-core.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/unify-components.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/unify-globals.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css">

	
</head>
<body>

	<!-- Login -->
    <section class="g-min-height-100vh g-flex-centered g-bg-lightblue-radialgradient-circle">
      <div class="container g-py-100">
        <div class="row justify-content-center">
          <div class="col-sm-8 col-lg-5">
            <div class="u-shadow-v24 g-bg-white rounded g-py-40 g-px-30">
              <header class="text-center mb-4">
                <h2 class="h2 g-color-black g-font-weight-600">Login Apps</h2>
                <p class="bg-danger">
                  
                <?php if ($this->session->flashdata('errors')): ?>

                <?php echo $this->session->flashdata('errors'); ?>

                <?php endif; ?>



                <?php if ($this->session->flashdata('login_failed')): ?>

                <?php echo $this->session->flashdata('login_failed'); ?>

                <?php endif; ?>

                <?php if ($this->session->flashdata('no_access')): ?>

                <?php echo $this->session->flashdata('no_access'); ?>

                <?php endif; ?>

              </p>
              </header>

              <!-- Form -->
              <?php $attributes = array('class'=>'g-py-15'); ?>
              
              <?php echo form_open('Login/access',$attributes); ?>

                <div class="mb-4">
                  <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Email:</label>

                  <?php 

                  	$data = array(

                  		'class' => 'form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15',
                  		'name' => 'username',
                  		'placeholder' => 'Email'	

                  	);

                  ?>
                  <?php echo form_input($data); ?>
                </div>

                <div class="g-mb-35">

                  <div class="row justify-content-between">
                    <div class="col align-self-center">
                      <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Password:</label>
                    </div>
                 
                  </div>

                  <?php 

                  	$data = array(

                  		'class' => 'form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15 mb-3',
                  		'name' => 'password',
                  		'placeholder' => 'Password'	

                  	);

                  ?>
                  <?php echo form_password($data); ?>

                  <div class="row justify-content-between">
                   
                    <div class="col-12 align-self-center text-right">

                    <?php 

						$data  = array(
							'class' => 'btn btn-md u-btn-primary rounded g-py-13 g-px-25 btn-block ',
							'name' => 'submit',
							'value' => 'Login'

						);
					?>
					
					<?php echo form_submit($data); ?>	

                    </div>
                  </div>

                </div>
              <?php echo form_close(); ?>
              <!-- End Form -->

             
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Login -->

    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/popper.min.js"></script>
</body>
</html>
