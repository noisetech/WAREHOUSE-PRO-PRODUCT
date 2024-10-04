{{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.1.6/css/dataTables.bootstrap5.css"> --}}
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

<link href="{{ asset('../../be/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
<link href="{{ asset('../../be/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<script src="{{ asset('../../be/assets/kit.fontawesome.com/42d5adcbca.js') }}" crossorigin="anonymous"></script>
<link href="{{ asset('../../be/assets/css/nucleo-svg.css') }}" rel="stylesheet" />

<link id="pagestyle" href="{{ asset('../../be/assets/css/argon-dashboard.min9c7f.css') }}" rel="stylesheet" />

<style>
    .async-hide {
        opacity: 0 !important;
    }
</style>
<script>
    (function(a, s, y, n, c, h, i, d, e) {
        s.className += " " + y;
        h.start = 1 * new Date();
        h.end = i = function() {
            s.className = s.className.replace(RegExp(" ?" + y), "");
        };
        (a[n] = a[n] || []).hide = h;
        setTimeout(function() {
            i();
            h.end = null;
        }, c);
        h.timeout = c;
    })(window, document.documentElement, "async-hide", "dataLayer", 0, {
        "GTM-K9BGS8K": true,
    });
</script>

@stack('style')
