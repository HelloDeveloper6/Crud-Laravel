<div class="form-group">

    <label for="Titulo">Titulo</label>
    <input type="text" class="form-control" name="TItulo" value="{{isset($aplicacion->Titulo)? $aplicacion->Titulo:'' }}" id="Titulo">
    
</div>

<div class="form-group">
    <label for="Descripcion">Descripcion</label>
    <input type="text" class="form-control" name="Descripcion" value="{{isset($aplicacion->Descripcion)? $aplicacion->Descripcion:'' }}" id="Descripcion">
    <br/>
</div>

<!-- <div class="form-group">
    <label for="Descripcion">Autor</label>
    <input type="text" class="form-control" name="Autor" value="{{isset($aplicacion->Autor)? $aplicacion->Autor:'' }}" id="Autor">
    <br/>
</div> -->

    <input class="btn btn-success" type="submit"  value="Guardar nota">
    <a class="btn btn-primary" href="{{ url('/aplicacion') }}"> Volver</a>


<br>