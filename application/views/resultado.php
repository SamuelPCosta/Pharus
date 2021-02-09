    		<div class="container first-container ideal ideal-resultado">
                <!-- <div class="card py-5 px-5 my-4 shadow card-theme">
                    <div class="row align-items-center">
        	            <div class="col-xl col-md-12 mx-auto px-0">
                            <h1 class="theme" style="font-size: 2.5em;">Faixa de consumo</h1>
        	        	  <p class="mb-5 theme">Esse valor representa a sua faixa de consumo necessária de acordo com o contexto da sua residência.</p>
        	            </div>
                 		<div class="col-xl-7 col-md-12 mx-auto px-0">
                 			<div class="resultado mx-auto mt-3">
                 				<h3>Faixa de gastos ideal <wbr>entre <?php echo $this->session->userdata('faixa'); ?> reais</h3>
                 			</div>
                 			
                 			<a href="metas" class="btn bg-warning text-center" id="definirmeta" style="width: 70%">Definir minha meta</a>
                 		</div>
                    </div>
                </div> -->
            <div class="card py-5 px-5 mt-4 mb-0 shadow card-theme">
                <div class="row align-items-center">
                    <div class="col-xl col-md-12 mx-auto px-0">
                        <h2 class="theme px-2 text-center text-md-left txtresultado">Faixa de gastos ideal <wbr>entre <?php echo $this->session->userdata('faixa'); ?> reais</h2>
                        <p class="my-3 text-justify theme px-5 txtresultados" style="font-size: 1.4em;">Esse valor representa a sua faixa de consumo necessária de acordo com o contexto da sua residência. Você pode definir sua meta a partir desses valores!</p>
                    </div>
                    <div class="vertical-line"></div>
                    <div class="col-xl col-md-12 mx-auto px-0">
                        <div class="container h-100">
                            <div class="mb-2 rounded-lg px-3 py-5">
                                <div class="">
                                    <div class="d-flex justify-content-center">
                                        <div class="brand_logo_container theme txtresultados" style="min-width: 230px">
                                            <h2 class="text-center theme mx-auto txtresultados" style="max-width: 350px">Quero definir agora a minha meta!</h2><br><!--Nossa Logo-->
                                            <a href="metas" class="btn btn-warning text-center" id="verchaves" style="width: 100%!important">Definir minha meta</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--conteudo-->
                    </div>
                </div>
            </div>
        </div>
        <!--conteudo-->
		</div>
</div>
<script>
    var atual ="Ideal de Consumo";
</script>