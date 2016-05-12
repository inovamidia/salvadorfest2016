/* --------------------------- Inicializa Scripts --------------------------- */

$(function() {
	//$(".telefone").mask("(99)9999-9999");
});

/* ---------------------------Validar Form (Promoções)--------------------------- */

function validaForm(){
	   d = document.contato;
	   if (d.modelo.value == ""){
			alert("O campo " + d.modelo.name + " deve ser preenchido!");
			d.modelo.focus();
			return false;
		}
		
		if (d.fab.value == ""){
			alert("O campo " + "ano de fabricação" + " deve ser preenchido!");
			d.fab.focus();
			return false;
		}
		
		if (d.ano.value == ""){
			alert("O campo " + "ano do modelo" + " deve ser preenchido!");
			d.ano.focus();
			return false;
		}
		
		if (d.myselectbox3.selectedIndex==0){
			alert("Insira agora o valor do seu veículo de acordo com a Tabela FIPE");			
			$('#valor').show();
			d.myselectbox3.focus();
			return false;
		}
		
		if (d.nome.value == "") {
			alert("Obrigado por fazer a simulação, para dar continuidade associe-se a CAV preenchendo o próximo formulário e proteja o seu veículo com o melhor custo e benefício do país. Aguarde que entraremos em contato! Preencha o campo nome");
			$('form .col-dir').show();
			d.nome.focus();
			return false;
		}
		
		if (d.email.value == ""){
			alert("O campo " + d.email.name + " deve ser preenchido!");
			d.email.focus();
			return false;
		}
		
		if (d.email.value == ""){
                   alert("O campo " + d.email.name + " deve ser preenchido!");		
                   d.email.focus();
                   return false;
         }
         parte1 = d.email.value.indexOf("@");
         parte2 = d.email.value.indexOf(".");
         parte3 = d.email.value.length;
         if (!(parte1 >= 3 && parte2 >= 6 && parte3 >= 9)) {
                   alert ("O campo " + d.email.name + " esta incorreto!");
                   d.email.focus();
                   return false;
         }
		 if (d.telefone.value == ""){
				 alert("O campo " + d.telefone.name + " deve ser preenchido!");
				 d.telefone.focus();
				 return false;
	     }
	   	 if (d.endereco.value == ""){
				 alert("O campo " + d.endereco.name + " deve ser preenchido!");
				 d.endereco.focus();
				 return false;
	     }
	   	 if (d.cidade.value == ""){
				 alert("O campo " + d.cidade.name + " deve ser preenchido!");
				 d.cidade.focus();
				 return false;
	     }
		 if (d.myselectbox2.selectedIndex==0){
				alert("O campo " + "marca do veiculo" + " deve ser preenchido!");
				 d.myselectbox2.focus();
			    return false;
		} 
}


/* ---------------------------Validar Form (Promoções)--------------------------- */

function validaFormContato(){
	   d = document.contato;
	   if (d.nome.value == ""){
				 alert("O campo " + d.nome.name + " deve ser preenchido!");
				 d.nome.focus();
				 return false;
	   }
         if (d.email.value == ""){
                   alert("O campo " + d.email.name + " deve ser preenchido!");		
                   d.email.focus();
                   return false;
         }
         parte1 = d.email.value.indexOf("@");
         parte2 = d.email.value.indexOf(".");
         parte3 = d.email.value.length;
         if (!(parte1 >= 3 && parte2 >= 6 && parte3 >= 9)) {
                   alert ("O campo " + d.email.name + " esta incorreto!");
                   d.email.focus();
                   return false;
         }
		 if (d.telefone.value == ""){
				 alert("O campo " + d.telefone.name + " deve ser preenchido!");
				 d.assunto.focus();
				 return false;
	     }
	   	 if (d.assunto.value == ""){
				 alert("O campo " + d.assunto.name + " deve ser preenchido!");
				 d.assunto.focus();
				 return false;
	     }
	   	 if (d.mensagem.value == ""){
				 alert("O campo " + d.mensagem.name + " deve ser preenchido!");
				 d.mensagem.focus();
				 return false;
	     }
	   
	   return true;
}


/* ---------------------------Validar Form (Cadastro)--------------------------- */

function validaFormAssociar(){
	   d = document.contato;
	   if (d.nome.value == ""){
				 alert("O campo " + d.nome.name + " deve ser preenchido!");
				 d.nome.focus();
				 return false;
	   }
         if (d.email.value == ""){
                   alert("O campo " + d.email.name + " deve ser preenchido!");		
                   d.email.focus();
                   return false;
         }
         parte1 = d.email.value.indexOf("@");
         parte2 = d.email.value.indexOf(".");
         parte3 = d.email.value.length;
         if (!(parte1 >= 3 && parte2 >= 6 && parte3 >= 9)) {
                   alert ("O campo " + d.email.name + " esta incorreto!");
                   d.email.focus();
                   return false;
         }
		 if (d.telefone.value == ""){
				 alert("O campo " + d.telefone.name + " deve ser preenchido!");
				 d.telefone.focus();
				 return false;
	     }
	   	 if (d.endereco.value == ""){
				 alert("O campo " + d.endereco.name + " deve ser preenchido!");
				 d.endereco.focus();
				 return false;
	     }
	   	 if (d.cidade.value == ""){
				 alert("O campo " + d.cidade.name + " deve ser preenchido!");
				 d.cidade.focus();
				 return false;
	     }
		 if (d.myselectbox2.selectedIndex==0){
				alert("O campo " + "marca do veiculo" + " deve ser preenchido!");
				 d.myselectbox2.focus();
			    return false;
		} 
		 if (d.modelo.value == ""){
				 alert("O campo " + "modelo" + " deve ser preenchido!");
				 d.modelo.focus();
				 return false;
	     }
		 if (d.fab.value == ""){
				 alert("O campo " + "ano de fabricacao" + " deve ser preenchido!");
				 d.fab.focus();
				 return false;
	     }
		 if (d.ano.value == ""){
				 alert("O campo " + "ano modelo" + " deve ser preenchido!");
				 d.ano.focus();
				 return false;
	     }
		 if (d.valor.value == ""){
				 alert("O campo " + "valor do veículo" + " deve ser preenchido!");
				 d.valor.focus();
				 return false;
	     }
	   
	   return true;
}

