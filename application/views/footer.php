 <!--Footer -->
<footer class="page-footer font-small position-relative shadow" id="rodape">
  <!-- Footer Links -->
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 card-theme"><!--©--> Pharus <?php echo date('Y') ?> -
    <a href="quemsomos" class="theme">Quem Somos</a> - <wbr>
    <a href="parceiros" class="theme">Parceiros</a> -
    <a href="contato" class="theme">Contato e FAQ</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
	
	<!--Abaixo seguem os scripts para o funcionamento do JS do BS...-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
	<!--Fim dos scripts do BS-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="<?= base_url()?>assets/js/script.js"></script><!--Importação do JS do menu...-->
	<script type="text/javascript" src="<?= base_url()?>assets/js/grafico.js"></script>
	<script src="<?= base_url()?>assets/js/jquery.easypiechart.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> <!--Importação de sweetalert-->
	<script src="dist/sweetalert.min.js"></script>
	<script src="<?= base_url()?>assets/js/notification.js"></script>
		<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	Optional: include a polyfill for ES6 Promises for IE11 and Android browser
	<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
	<script src="sweetalert2.all.min.js"></script> -->
</body>
<script>
  $('*').filter(function() {
   return $(this).css('z-index') == 9999999;
  }).each(function() {
   $(this).remove(); 
  });
 </script>
</html>
<!-- https://www.chartjs.org/docs/latest/charts/line.html documentacao graficos-->
<!--https://codepen.io/Philippe_Fercha/pen/yawbqB link do menu