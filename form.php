<html>
<body>

    <form action = "welcome.php" method = "POST">

        <h1> Preencha o Formulário</h1>

        <label> Nome Completo: </label>
        <input type = "text" name = "nome"/>

        <label> Idade: </label>
        <input type = "date" name = "idade"/>

        <label> E-mail: </label>
        <input type = "email" name = "email"/>

        <label> Endereço </label>
        <input type = "text" name = "endereco"/>

        <input type = "radio" name = "sexo" value = "M"/> Masculino
        <input type = "radio" name = "sexo" value = "F"/> Feminino
        <input type = "radio" name = "sexo" value = "O"/> Outros

        <input type = "submit" value = "Enviar"/>

    </form>
</body>
</html>