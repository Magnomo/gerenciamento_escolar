<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>
</head>
<body>
    <form action="{{url('/')}}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"><br>
        <label for="nome">Email:</label>
        <input type="email" name="email" id="email"><br>
        <label for="data_nascimento">Data de nascimento:</label>
        <input type="text" name="data_nascimento" id="data_nascimento"> <br>
        <label for="nivel">Nivel</label>
       
        <select name="nivel_id" id="nivel">
        @foreach($niveis as $nivel)
            <option value="{{$nivel->id}}">{{$nivel->nome}}</option>
        @endforeach
        </select><br>
        <input type="submit" value="Salvar">

</form>
    
</body>
</html>