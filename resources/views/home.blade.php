<!DOCTYPE html>
<html>
    <head>
        <title>
            HOME PAGE
        </title>
    </head>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" rel="stylesheet">
        <body>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            Web Dev
                        </a>
                        <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
                            <span class="navbar-toggler-icon">
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a aria-current="page" class="nav-link active" href="/" >
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/about">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <h1>
                Student ID:  {{ $studentid }}
                <br>
                Name: {{ $studentname }}
                
                @if($studentid == "2021")
                    <h4>Your studentid is {{ $studentid }}</h4>
                @else
                    <h4>Your studentid is not 2021</h4>
                @endif
               

                </h1>
                @for($i = 0; $i <= 10; $i++)
                    {{ $i }}
                    <br>
                @endfor

            </div>
        </body>
    </link>
</html>
