<x-app-layout>
<x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leadig-tight" >
productos
</h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sn sm:rounded-lg">
            <div class="p-6bg-white border-b border-gray-200">
                <table class="table-fixed border-collapse border border-green-800">
                    <thead>
                        <tr>
                            <th style="width: 10%">ID</th>
                            <th style="width: 10%">Clave</th>
                            <th style="width: 10%">Producto</th>
                            <th style="width: 10%">U.M</th>
                            <th style="width: 10%">Existencias</th>
                            <th style="width: 10%">P.U</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <td class="border border-green-800">{!!$producto->id!!}</td>
                                <td class="border border-green-800">{{$producto->clave}}</td>
                                <td class="border border-green-800">{{$producto->producto}}</td>
                                <td class="border border-green-800">{{$producto->unidad_medida}}</td>
                                <td class="border border-green-800 text-right">{{$producto->existencias}}</td>
                                <td class="border border-green-800 text-right">{{$producto->precio_unitario}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</x-app-layout>