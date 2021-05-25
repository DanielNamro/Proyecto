@extends('layouts.app')

@section('content')
<style>
    #c {
        font-size: 20px;
    }
</style>
<main class="py-4">
    <!--     @yield('content')-->
</main>
<br>
<br>

<div class="container-fluid">
    <div id="contenedor" class="container col-lg-10 justify-content-center">
        <h2 id="subt">CONTACT US
        </h2>
        <br>
        <UL id="c">
            <li>
                Email: amatopinfo@amatop.com
            </li>
            <br>
            <li>
                Facebook: Amatop
            </li>
            <br>
            <li>
                TLF: 633363875 - 976734228
            </li>
            <br>
            <li>
                Location: Zaragoza - 5018
            </li>
        </UL>
    </div>
</div>
</body>

@endsection