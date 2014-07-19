// JavaScript Document
$(document).ready(function(e) {
				
				function _(x){
					return document.getElementById(x);
				}
				function ajaxObj(meth, url){
					var x = new XMLHttpRequest();
					x.open(meth, 	url, 		true);
					x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
					return x;
				}
				function ajaxReturn(x){	
					if(x.readyState == 4 && x.status == 200){
						return true;
					}
				}
				function validateName(name) { 
					var re = /^[a-zA-Z \.\'\-_\s]*$/;
    				return re.test(name);
				}
				function validateEmail(email) { 
					var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    				return re.test(email);
				}
				function validateContact(contact) { 
					var re = /[0-9]/;
    				return re.test(contact);
				}
				
				
				var inputs = [".iname",".iemail",".iaddress",".icontact",".imessage"];
				
				
				
				$('#btnClear').click(function(){
					
					var del = confirm("Are you sure do you want to delete ?");
					
					for( i = 0 ; i < inputs.length; i++){
						
						if($(inputs[i]).val() != ''){
							console.log('has value');
							if(del == true){
								$(inputs[i]).val('');
							}
						}
						
					}
					
					return false;
				}); 
				
				$("#btnSend").click(
				
					function(){
						
						var em, nm, con = false;

						var name = $(inputs[0]).val();
						var email = $(inputs[1]).val();
						var contact = $(inputs[3]).val();
						
						if (validateEmail(email)) {
							console.log(email + " is valid");
							em = true;
  						}else{
							
							var errE = email + " is not valid"; 
							$(inputs[1]).val(errE).css("color", "red");
							$(inputs[1]).focus(function(){$(this).val('')});
							em = false;
						}
						
						if (validateName(name)) {
							console.log(name + " is valid");
							nm = true;
  						}else{
							$(inputs[0]).val('');
							var errN = name + " is not valid"; 
							$(inputs[0]).val(errN).css("color", "red");
							nm = false;
							$(inputs[0]).focus(function(){$(this).val('')});
							
						}
						
						if (validateContact(contact)) {
							console.log(contact + " is valid");
							con = true;
  						}else{
							$(inputs[3]).val('');
							var errC = contact + " is not valid"; 
							$(inputs[3]).val(errC).css("color", "red");
							con = false;
							$(inputs[3]).focus(function(){$(this).val('')});
							
						}
						
						if(nm && em && con){
							
							var isReady = false;
							
							for(i = 0; i < inputs.length; i++){
								
								if($(inputs[i]).val() != ''){
									
									isReady = true;
									
								}
							}
							
							if(isReady == true){
								console.log("submitting..");
								submitS();
							}
								
							
						}
						
						return false;
					}
				
				);
				
				function submitS(){
					
					console.log("processing");
					
					var ajax = new ajaxObj("POST","email.php?");
					
					ajax.onreadystatechange = function()
								{
									if(ajaxReturn(ajax) == true){
										//alert(ajax.responseText );
										for( i = 0 ; i < inputs.length; i++){
												$(inputs[i]).val("");
										}
										alert("Message sent");
										console.log(ajax.responseText);
									}
								}
				ajax.send(
				"name="+$(inputs[0]).val()+
				"&email="+$(inputs[1]).val()+
				"&address="+$(inputs[2]).val()+
				"&contact="+$(inputs[3]).val()+
				"&message="+$(inputs[4]).val()
				);
				
				}
					
							
							
			
				
				
            });
		