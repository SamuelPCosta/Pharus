	     	<style type="text/css">
	     		* { box-sizing: border-box; }
				/* force scrollbar */
				html { overflow-y: scroll; }

				body {
				  font-family: sans-serif;
				}

				/* ---- isotope ---- */

				.grid {
				  /*background: #DDD;*/
				  width: 99% !important;
				  margin: auto;
				}

				/* clear fix */
				.grid:after {
				  content: '';
				  display: block;
				  clear: both;
				}

				/* ---- .grid-item ---- */

				.grid-sizer,
				.grid-item {
				  width: 33.333%;
				}

				.grid-item {
				  float: left;
				}

				.grid-item img {
				  display: block;
				  max-width: 100%;
				  padding: 10px;
				  border-radius: 25px;
				}
				.containeraberto {
			        width: 100vw;
			        height: 100vh;
			        /*background: #6C7A89;*/
			        display: flex;
			        flex-direction: row;
			        justify-content: center;
			        align-items: center;
			        position: fixed;
			       /* z-index: 1 !important;*/
		    	}
		    	.box {
		    		position: fixed;
		    		width: 57%;
			        margin-left: 0.5%;
			        background: #111;
			        z-index: 2 !important;
			        align-items: center;
					display: flex;
					flex-direction: row;
					flex-wrap: wrap;
					justify-content: center;
		    	}
		    	@media(max-width:1200px) {
		    		.grid {
						margin-top:200px
					}
					.cabecalho{
						margin-top: -200px
					}
		    	}
	     	</style>
	     	<div class="container first-container galeria">
	     		<!-- <div id="imgaberta" class="inativo" style="z-index: 2; width: 80vw; height: 70vh; position: fixed; background-color: red; top: 200px; left: 15%"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg"/></div> -->
	     		<div class="col-lg-12 col-md-12 float-left theme cabecalho">
		        	<h2 class="mt-5 card text-lg-left text-center card-theme px-5 py-3 mb-1 theme">Galeria e Referências</h2>
		        	<div class='alert card-theme card border-0 mx-auto' id="" role='alert'>
		        	<a href="" onclick="" class="theme text-left">Clique aqui para baixar toda a nossa lista de referências utilizadas </a>
		        	</div>
	     		</div>
     			<div class="grid">
				  <div class="grid-sizer"></div>
					<?php 
						for ($i=1; $i <=113 ; $i++) { 
					?>
						<div class="grid-item">
					    	<img src="<?= base_url()?>assets/img/desenvolvimento/desenvolvimento (<?php echo $i ?>).jpeg"/>
					 	</div>
					<?php
					  	} 
					?>
				  <div class="box">
	        		<img id="imgaberta" class="inativo mx-auto" src="" style="max-height: 610px" />
				  </div>
			    </div>
			</div>
            </div>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js"></script>
<script type="text/javascript">
	// external js: isotope.pkgd.js, imagesloaded.pkgd.js
	var grid = document.querySelector('.grid');
	var iso;

	imagesLoaded( grid, function() {
	  // init Isotope after all images have loaded
	  iso = new Isotope( grid, {
	    itemSelector: '.grid-item',
	    percentPosition: true,
	    masonry: {
	      columnWidth: '.grid-sizer'
	    }
	  });
	});

	$("img").click(function(e) {
		e.preventDefault();
		var source = $(this).attr('src');
		//alert("vai abrir a foto... quando eu implementar")
		$("#dark").toggleClass("visible");
		$("#imgaberta").removeClass("inativo");
		$('#imgaberta').attr('src', source);
	});
	$(document).mouseup(function(e){
    var imgaberta = $("#imgaberta");
    var sidebar = $("#sidebar-wrapper");
	    if (!sidebar.is(e.target) && sidebar.has(e.target).length === 0){
		    if (!imgaberta.is(e.target) && imgaberta.has(e.target).length === 0){
	    		imgaberta.addClass("inativo");
	            dark.removeClass("visible");
		    }
		}
	});
</script>