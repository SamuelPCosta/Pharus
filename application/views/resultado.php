			<div class="container first-container ideal">
	        <div class="row align-items-center">
	            <div class="col-xl-6 col-md-12">
	        	<h1 class="mt-5 theme">Faixa de consumo</h1><br>
	        	<p class="mb-5 theme">Esse valor representa a sua faixa de consumo necessária de acordo com o contexto da sua residência.</p>
	        </div>
     		<div class="col-xl-6 col-md-12 card py-5 card-theme shadow"><!--Div do questionário-->
     			<div class="resultado mx-auto mt-3">
     				<h3>Faixa de gastos ideal<br><wbr>entre <?php echo $this->session->userdata('faixa'); ?> reais</h3>
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
