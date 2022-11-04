<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>🌶 Hungry Eats</title>
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');

/* navbar ------------------------------------------------- */

nav {
    font-family: 'Ubuntu', sans-serif;
}

.rotate {
    transition: 0.5s;
}

.rotate:hover {
    cursor: pointer;
    transform: rotate(-8deg);
}

.header5 {
    width: 100%;
    height: 60px;
    box-shadow: 0 0 10px 1px;
}

.menu5 {
    margin-left: 40px;
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    list-style: none;
    padding: 0 50px;
}

.menu5 li {
    display: block;
    height: 100%;
    margin-right: 30px;
    font-size: 20px;
    position: relative;
    display: flex;
    align-items: center;
    color: #fff;
    text-transform: uppercase;
    text-shadow: 0 0 15px #8e54e9;
    transition: all 300ms cubic-bezier(0.075, 0.82, 0.165, 1);
}

.menu5 li:after,
.menu5 li:before {
    content: "";
    position: absolute;
    width: 0%;
    display: block;
    height: 1px;
    transition: all 0.3s ease;
    margin-top: 2px;
    transition: all 300ms ease-in;
}

.menu5 li:after {
    bottom: 25%;
    left: 0;
}

.menu5 li:before {
    top: 25%;
    right: 0;
}

.menu5 li:hover::after {
    width: 100%;
    height: 1px;
    bottom: 25%;
    background-color: #fff;
}

.menu5 li:hover::before {
    width: 100%;
    height: 1px;
    top: 25%;
    background-color: #fff;
}

/* navbar End ----------------------------------------------*/
</style>

<body>

    <!-- navbar ------------------------------------------------------>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 sticky-top cont">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img class="rotate" src="img/Logo.png" style="height:50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse header5" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu5">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="order.php">My Order</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- JavaScript -------------------------------------------------->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>