<!doctype html>
<html lang="en">
    <head>
        @section('meta')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">
        @show

        <title>@yield('title')</title>
        @section('externtCSS')
        <!-- Bootstrap core CSS -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="assets/css/product.css" rel="stylesheet">
        <link href="assets/css/album.css" rel="stylesheet">
        @show
        @section('interntscript')
        <script>
            function changeHref() {
                document.getElementById('logstatus').href = '/login';
            }
        </script>
        @show
    </head>

    <body>
        @section('navgation')
        @if($_SESSION['language']=='En')
        <nav class="site-header sticky-top py-1">
            <div class="container d-flex flex-column flex-md-row justify-content-between">
                <a class="py-2" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
                </a>
                <a class="py-2 d-none d-md-inline-block" href="/admin">Restauteur</a>
                <a class="py-2 d-none d-md-inline-block" href="/changeLang/Fr">French</a>
                <a class="py-2 d-none d-md-inline-block" href="/changeLang/En">English</a>
                <!--
                <a class="py-2 d-none d-md-inline-block" href="/admin">Restauteur</a>
                -->
                <?php if (empty($_SESSION['userID'])): ?>
                    <a id='logstatus' class="py-2 d-none d-md-inline-block" href="/userlogin">Login</a>
                <?php else: ?>
                    <!--<a id='logstatus' class="py-2 d-none d-md-inline-block" onclick='this.innerHTML = "Login";setTimeout(changeHref, 1000);' href='#'>Logout</a>-->
                    <a id='logstatus' class="py-2 d-none d-md-inline-block" href="/userlogout">Hi {{($_SESSION['userID'])->first_name}} Logout</a>
                <?php endif; ?>
                <a class="py-2 d-none d-md-inline-block" href="/userregister">Register</a>
            </div>
        </nav>
        @elseif($_SESSION['language']=='Fr')
        <nav class="site-header sticky-top py-1">
            <div class="container d-flex flex-column flex-md-row justify-content-between">
                <a class="py-2" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
                </a>
                <a class="py-2 d-none d-md-inline-block" href="/admin">Restauteur</a>
                <a class="py-2 d-none d-md-inline-block" href="/changeLang/Fr">France</a>
                <a class="py-2 d-none d-md-inline-block" href="/changeLang/En">Anglais</a>
                <!--
                <a class="py-2 d-none d-md-inline-block" href="/admin">Restauteur</a>
                -->
                <?php if (empty($_SESSION['userID'])): ?>
                    <a id='logstatus' class="py-2 d-none d-md-inline-block" href="/userlogin">S'identifier</a>
                <?php else: ?>
                    <!--<a id='logstatus' class="py-2 d-none d-md-inline-block" onclick='this.innerHTML = "Login";setTimeout(changeHref, 1000);' href='#'>Logout</a>-->
                    <a id='logstatus' class="py-2 d-none d-md-inline-block" href="/userlogout">Ca va {{($_SESSION['userID'])->first_name}} Connectez - Out</a>
                <?php endif; ?>
                <a class="py-2 d-none d-md-inline-block" href="/userregister">registre</a>
            </div>
        </nav>
        @endif
        @show
        <main role="main">
            @yield('content')
        </main>
        @section('footer')
        @if($_SESSION['language']=='En')
        <footer class="container py-5">
            <div class="row">
                <div class="col-12 col-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
                    <small class="d-block mb-3 text-muted">&copy; 2017-{{date("Y")}}</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Cool stuff</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Resource</a></li>
                        <li><a class="text-muted" href="#">Resource name</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Advetistment</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Business</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Locations</a></li>
                        <li><a class="text-muted" href="#">Privacy</a></li>
                        <li><a class="text-muted" href="#">Terms</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        @elseif($_SESSION['language']=='Fr')
        <footer class="container py-5">
            <div class="row">
                <div class="col-12 col-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
                    <small class="d-block mb-3 text-muted">&copy; 2017-{{date("Y")}}</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Caractéristiques</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Truc cool</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Ressources</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Ressource</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Publicité</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Affaires</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Sur</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Emplacements</a></li>
                        <li><a class="text-muted" href="#">Intimité</a></li>
                        <li><a class="text-muted" href="#">termes</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        @endif
        @show
        @section('externJS')
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="assets/bootstrap/js/popper.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/holder.min.js"></script>
        <script>
            Holder.addTheme('thumb', {
                bg: '#55595c',
                fg: '#eceeef',
                text: 'Thumbnail'
            });
        </script>
        @show
    </body>
</html>