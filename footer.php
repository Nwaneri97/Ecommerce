

  <!-- clock -->


<div class="row">
	<div class="col-md-12 p-3 mt-4" style="background-color: #eee" >
		<?php
			include 'iconhover.php';
			?>
		</div>	
</div>

<!-- footer content -->
<div class="container-fluid">
     <div class="row">
        <div class="">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="4600">
              <div class="carousel-inner">
                <div class="carousel-item card-image active">
                  
                  <img class="d-block w-100" src="image/footerimage.png" alt="Second slide">
                  
                </div>
                <div class="carousel-item card-image">
                  
                  <img class="d-block w-100" src="image/footerimage2.png" alt="Second slide">
                  
                </div>
                <div class="carousel-item card-image">
                  
                  <img class="d-block w-100" src="image/footerimage3.png" alt="Third slide">
                  
                </div>
              </div>
          </div>
        </div>
      </div>
</div>

<div class="container-fluid p-5" style="background-color: #0f0f0f;">
		<div class="row">
		
		<div class="col-md-4 p-4">
			<h5 class="footer-header d-inline-flex text-uppercase mb-1">About Us</h5>
			<br>
			<hr class="line d-inline-flex">
			<div class="footer-text"><p class="p-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p></div>			
		</div>

		<div class="col-md-4 p-4">
			<h5 class="footer-header d-inline-flex text-uppercase mb-1">Contact Us</h5>
			<br>
			<hr class="line d-inline-flex">
			<div class="footer-text"><p class="p-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p></div>			
		</div>

		<div class="col-md-4 p-4">
			<h5 class="footer-header d-inline-flex text-uppercase mb-1">Promo</h5>
			<br>
			<hr class="line d-inline-flex">

			
				<div class="col  mt-2">
						<div class="promo-image mb-1">
				        <div class="card-image"><img src="image/promo.png"></div>
				        </div>
				        

				        <button class="neon btn" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
					    Click here for Info
					  	</button>

						<div class="collapse justify-content-center" id="collapseExample">
						  <div class="h6 card-body text-center">
						    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						    consequat. 
						  </div>
						</div>
				</div>	
		</div>
	</div>
</div>










</body>
</html>

<script type="text/javascript">
	const deg = 6;
	const hr = document.querySelector("#hr");
	const mn = document.querySelector("#mn");
	const sc = document.querySelector("#sc");
	setInterval(() => {
		let	day = new Date();
		let hh = day.getHours() * 30;
		let mm = day.getMinutes() * deg;
		let ss = day.getSeconds() * deg;
		hr.style.transform = `rotateZ(${hh+(12)}deg)`;
		mn.style.transform = `rotateZ(${mm}deg)`;
		sc.style.transform = `rotateZ(${ss}deg)`;
		})

</script>

 <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery-slim.min.js"></script>
<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>