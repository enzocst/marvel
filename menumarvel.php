<nav id="menu">	  
	
   <ul>
   </br>
			
			<li>
			
				<a href="listarmarvel2.php">Listar usuários </a>
				
			</li>
			
			<li>
			
				<a href="pesquisarmarvel.php">Pesquisar usuários </a>
				
			</li>

            <li>
                <a href="contatomarvel.php">Contato</a>
            </li>
			<?php 
			//verificando se esta sessão existe
			if (empty($_SESSION['login'])){ 
			//se ela não existir, continue na área restrita
				echo "<li><a href='loginmarvel.php'>Área Restrita</a></li>";
				//senão, apresente apenas para o administrador as seguintes páginas
			}else  {
				echo "<li><a href='indexmarvel.php'>Cadastro de agentes</a></li>";
						
				
			} 
			?>
			
			
		</ul>
	

</nav>