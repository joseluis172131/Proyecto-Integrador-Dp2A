

<script type="text/javascript" class="init">
	

$(document).ready(function() {
	$('#example').DataTable();
} );


	</script>

<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
            </tr>
        </thead>
        <tbody>

        @forelse()

        <tr>
                <td>{{ $computadora->marca}}</td>
                <td>{{ $computadora->modelo}}</td>
                <td>{{ $computadora->descripcion}}</td>
                <td>{{ $computadora->precioDeCompra}}</td>
                <td>{{ $computadora->precioDeVenta}}</td>
                <td>{{ $computadora->stock}} Unidades</td>
                <td><{{ $computadora->precioDeVenta - $computadora->precioDeCompra}} M.N.</td>
                <td></td>    
            </tr>

        @empty

        <h3> No hay datos en la base de datos </h3>
        @endforelse


</tbody>
<tfoot>
    <tr>
  </tr>
</tfoot>
</table>



           