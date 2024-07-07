@extends('layout.skeleton')

 @section('konten')

     @include('components.navbar')

        @yield('page')

     @include('components.footer')
    <script>
        function handleScroll() {
    const navbar = document.getElementById("myNavbar");

    // Tambahkan atau hapus kelas bg-dark berdasarkan posisi scroll
    if (window.scrollY > 0) {
        navbar.classList.add("bg-dark");
    } else {
        navbar.classList.remove("bg-dark");
    }
}

// Tambahkan event listener untuk mendeteksi perubahan scroll
window.addEventListener("scroll", handleScroll);
    </script>
 @endsection