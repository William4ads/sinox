

@extends('layout/principal')

@section('titulo', 'Contato')
        
@section('conteudo')
<form>
    <fieldset>
        <legend>Cadastro de Militares</legend>
        <p><label for="idNome">Nome:</label> <input type="text" id="idNome" name="cNome" size="30" maxlength="50"/> </p>
        <p><label for="idEmail">Email:</label> <input type="text" id="idEmail" name="cEmail"/> </p>
        <p><label>Mensagem:</label><input type="text"/></p>
        
        <input type="submit" id="idInserir" class="botao" value="Inserir" name="cInserir" />
        <input type="reset" id="idLimpar" class="botao" value="Limpar" name="cLimpar" />

        </fieldset>
</form>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3754.497524332798!2d-47.91896568554816!3d-19.776491986689837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bacff92ce5ffcf%3A0xd4df640fb19722b0!2sR.+Hip%C3%B3lito+Rodrigues+da+Cunha%2C+125+-+Parque+das+Gameleiras%2C+Uberaba+-+MG%2C+38037-380!5e0!3m2!1sen!2sbr!4v1484745893760" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

@stop