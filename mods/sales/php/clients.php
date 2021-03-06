<?php
?>
<script type="text/javascript">
	$("document").ready(function(){
		tool = "clients";
		$("body#sales > section#right > section#clients > div > section#clientsBrowser input[type=text]").keydown(function(e){
			if(e.keyCode>=65&&e.keyCode<=90){
				var string = $(this).val()+String.fromCharCode(e.keyCode);
			}else if(e.keyCode==8){
				//e.preventDefault();
				var string = $(this).val().substr(0, $(this).val().length-1);
			}else{
				var string = $(this).val();
			}
			var clients = clientSearch(string);
			var ul = $("body#sales > section#right > section#clients > div > section#clientsBrowser > ul");
			if(clients){
				console.log(clients);
				ul.html("");
				$.each(clients, function(i){
					ul.append("<li onclick=\"clientChange(" + this.id + ")\" id=\"" + this.id + "\">" + this.name + " " + this.surname + "</li>");
				});
			}else{
				ul.html("No hay clientes con ese nombre o apellido");
			}
		});
		var ul = $("body#sales > section#right > section#clients > div > section#topClients > ul");
		var top = topClients(5);
		if(top&&top.length>0){
			ul.html("");
			$.each(top, function(){
				ul.append("<li onclick=\"clientChange(" + this.id + ")\" id=\"" + this.id + "\">" + this.name + " " + this.surname + "</li>");
			});
		}else{
			ul.html("Todavía no hay clientes registrados que hayan comprado");
		}
		ul.show();
	});
</script>
<h1>Clientes</h1>
<div>
	<section id="clientsBrowser">
		<h1>Buscador</h1>
		<input type="text" name="browser" placeholder="Nombre o apellidos..."  />
		<ul>
		</ul>
	</section>
	<section id="topClients">
		<h1>Clientes VIP</h1>
		<ul>
		</ul>
	</section>
	<hr class="cb"/>
</div>
