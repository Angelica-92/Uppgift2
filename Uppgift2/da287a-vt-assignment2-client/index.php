<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Superbutiken</title>
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>

    <div class="modal fade" tabindex="-1" role="dialog" id="product-details">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Superbutiken</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#" data-link="products-area">Produkter <span class="sr-only">(current)</span></a></li>
                    <li><a href="" data-link="stores-area">Butiker</a></li>
                    <li><a href="/reviews" data-link="reviews-area">Recensioner</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 area" id="products-area">
                <h1>Produkter</h1>
                <ul class="list-group" id="products-list">

                </ul>
                <hr>
                <h2>Lägg till produkt</h2>
                <form action="#" method="post" id="post-new-product">
                    <div class="form-group">
                        <label for="title">Titel</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="brand">Märke</label>
                        <input type="text" name="brand" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Pris</label>
                        <input type="number" name="price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Länk till bild</label>
                        <input type="url" name="image" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Beskrivning</label>
                        <textarea name="description" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <h4>Butiker</h4>
                        <div id="product-choose-stores">

                        </div>
                    </div>
                    <input type="submit" class="btn btn-success" value="Spara produkt">
                </form>
            </div>
            <div class="col-xs-12 area" id="stores-area">
                <h1>Butiker</h1>
                <ul class="list-group" id="stores-list">

                </ul>
            </div>
            <div class="col-xs-12 area" id="reviews-area">
                <h1>Recensioner</h1>
                <ul class="list-group" id="reviews-list">

                </ul>
            </div>
        </div>

    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
