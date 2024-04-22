@if(session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="fixed-top top-0 transform bg-laravel text-white px-48 py-3 translate-x-1/2 alert alert-success">
        <p>{{ session('message') }}</p>
    </div>
@endif