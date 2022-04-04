<x-app-layout xmlns:livewire="http://www.w3.org/1999/html">

<div class="row">
    <div class="col-md-2">
        <livewire:dashboard.side-menu />
    </div>
<div class="col-md-10">
    <main class="main-content  h-100 mt-1 border-radius-lg ">
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <h5 class="fw-bolder">Welcome {{ auth()->user()->name }}</h5>

           <livewire:dashboard.card-model />

           <livewire:dashboard.table-transaction />
        </div>
    </main>

</div>
</div>

</x-app-layout>
