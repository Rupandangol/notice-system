<!-- Bootstrap core JavaScript -->
<script src="{{URL::to('/lib/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{URL::to('lib/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@yield('my-footer')

</body>

</html>
