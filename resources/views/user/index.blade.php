<x-layout>
  @push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/css/glightbox.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/styleser.css') }}">
  @endpush
  <x-navbar>
    <x-navigasimenu/>
  </x-navbar>
  <x-beranda :proyek='$proyek' :rating='$rating'/>
  <x-about/>
  <x-service/>
  <x-portofolio :portfolios="$portfolios"/>
  <x-clients :client="$client"/>
  <x-contact/>
  <x-footer/>
  @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- GLightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js"></script>
    <script src="{{ asset('assets/js/scriptser.js') }}"></script>
  @endpush
</x-layout>