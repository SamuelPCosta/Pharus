    		<div class="container first-container ideal">
                <div class="card py-5 px-5 my-4 shadow card-theme">
                    <div class="row align-items-center">
    	            <div class="col-xl col-md-12 mx-auto px-0">
                        <h1 class="theme" style="font-size: 2.5em;">Faixa de consumo</h1>
    	        	  <p class="mb-5 theme">Esse valor representa a sua faixa de consumo necessária de acordo com o contexto da sua residência.</p>
    	            </div>
         		<div class="col-xl-7 col-md-12 mx-auto px-0"><!--Div do questionário-->
         			<div class="resultado mx-auto mt-3">
         				<h3>Faixa de gastos ideal <wbr>entre <?php echo $this->session->userdata('faixa'); ?> reais</h3>
         			</div>
         			
         			<a href="metas" class="btn bg-warning text-center" id="definirmeta" style="width: 70%">Definir minha meta</a>
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