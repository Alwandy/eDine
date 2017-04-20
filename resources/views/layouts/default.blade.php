<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
<nav class="navbar navbar-inverse navbar-top" role="navigation" style="width:100%;">
    @include('includes.navigation')
</nav>
<div class="jumbotron" id="header">
    @include('includes.header')
</div>
@yield('content')
<footer>
    @include('includes.footer')
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script>
</script>
</body>
</html>