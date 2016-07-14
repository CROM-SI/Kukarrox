<div id="content">
    <h3 style="text-align: center">Bienvenido Cliente: <?=$usuario?></h3>
    <input type="id" id="nombreCc"  hidden="true" value="<?=$usuario?>"/>
    <br>
    <br>
    Categoria:  <select  id="categoria" name="categoria" onclick="cargarCarrito()"  > 
                   <option disabled selected value="0">Seleccione</option> 
                 
                   <?php foreach ($categoria as $i) : ?>
                   <option value="<?= $i->id_categoria; ?>"><?= $i->nombre_categoria; ?></option>

                <?php endforeach; ?>
                   </select>
    
     
    <br/><br/>
    <a href="#" onclick=" cargaralmacen()" id="btn_verPed"  >Ver mis pedido</a>
    <br/><br/>
    <a id="salirCli"  href="<?=base_url()?>Controlador/salir2">Salir</a>
</div>

<div id="menuCliente"></div>
<div id="mensajecarrito"></div>
