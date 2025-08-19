<?php include 'layout/header.php'?>

  
       
    <main class="container">
        <div class="grid">
            <div></div>
            <div>
        <form action="processa.php" method="POST">
            <fieldset>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="inome" placeholder="nome completo " required>
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="iemail" placeholder="seu e-mail">
        
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="isenha" placeholder="sua senha">
                <label for="c_senha">Confirme à senha:</label>
                <input type="password" name="c_senha" id="ic_senha" placeholder="confirme à senha">
                
                <input type="checkbox" name="emprego" id="emprego">Procuro Emprego
                
                <input type="submit" value="Cadastrar">
                
                <input type="reset" value="Cancelar">
        
            </fieldset>

    </form>
    </div>
        <div></div>
       

        



    </div>
    </main>
<?php include 'layout/footer.php'?>