<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mt-4">
                <img class="rounded-circle img-thumbnail border-warning mx-auto d-block" src="../client/assets/img/avatar.jpg" alt="" style="width: 100px; height: 100px;">
            </div>
        </div>
    </div>
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center">
            <div class="col">
                <div class="row">
                    <div class="col text-center">
                        <h3>Asaduzzaman Shishir</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                Menu
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item"><a href="/" class="nav-link <?php echo $_SERVER['REQUEST_URI'] == '/' ? 'text-primary' : ''; ?>">Home</a></li>
                    <li class="nav-item"><a href="/topic" class="nav-link <?php echo $_SERVER['REQUEST_URI'] == '/topic' ? 'text-primary' : ''; ?>">Topic</a></li>
                    <li class="nav-item>"><a href="/project" class="nav-link <?php echo $_SERVER['REQUEST_URI'] == '/project' ? 'text-primary' : ''; ?>">Project</a></li>
                    <li class="nav-item"><a href="/about" class="nav-link <?php echo $_SERVER['REQUEST_URI'] == '/about' ? 'text-primary' : ''; ?>">About</a></li>
                    <li class="nav-item>"><a href="/contact" class="nav-link <?php echo $_SERVER['REQUEST_URI'] == '/contact' ? 'text-primary' : ''; ?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</section>