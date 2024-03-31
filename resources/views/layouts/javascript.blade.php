<script src="{{ asset('asset/upload/aedemodir/bootstrap5/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('asset/upload/aedemodir/950a4152c2b4aa3ad78bdd6b366cc179/js/global.js')}}"></script>
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>
{{--<script defer src="{{ asset('assets/js/cdn1.js')}}"></script>--}}

<!-- Focus plugin -->
<script defer src="{{ asset('assets/css/cdn3.js')}}"></script>
<link href="{{ asset('assets/css/tailwind.css')}}" rel="stylesheet">
@livewire('wire-elements-modal')
@livewireScripts