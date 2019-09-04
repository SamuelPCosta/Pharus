			<div class="container first-container ideal">
	        <div class="row align-items-center">
	            <div class="col-xl-6 col-md-12">
	        	<h1 class="mt-5 theme">Faixa de consumo</h1><br>
	        	<p class="mb-5 theme">Esse valor representa a sua faixa de consumo necessária de acordo com o contexto da sua residência.</p>
	        </div>
     		<div class="col-xl-6 col-md-12"><!--Div do questionário-->
     			<div class="resultado mx-auto mt-3">
     				<h3>Intervalo de custo <br><wbr>entre <?php echo $this->session->userdata('faixa'); ?></h3>
     			</div>
     			
     			<a href="metas" class="btn bg-secondary" id="definirmeta">Definir minha meta</a>
     		</div>
            </div>
            </div>
        </div>
        <!--conteudo-->
		</div>
</div>
	
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js'></script><!--Importação do Ajax...-->
	<script  src="<?= base_url()?>assets/js/script.js"></script><!--Importação do JS do menu...-->
	<script  src="<?= base_url()?>assets/js/scriptcollapse.js"></script><!--Importação do JS do menu...-->

	<!--Abaixo seguem os scripts para o funcionamento do JS do BS...-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
	<!--Fim dos scripts do BS-->
	<script>
    var atual ="Ideal de Consumo";
	</script>
</body>
</html>
<!--https://codepen.io/Philippe_Fercha/pen/yawbqB link do menu-->