<div style="height: 1900px; " class="container mt-5">
    
    <! –– Membuat OPENING ––>
    <div class="jumbotron bg-gradient-primary" style="height: 460px; background-color: rgb(182, 222, 235);">
        <div class="baru container mt-4" >
            <img src="<?= BASEURL; ?>/img/jumbotron.jpeg" class="rounded float-right img-fluid" alt="Cinque Terre" width="415" height="300">
            <h1 class="display-4 font-weight-bold">Good Talk </br>Good World</h1>
        <p class="lead font-weight-normal">We aim to educate ourself, people, and World</p>
        <div class="invisible">I am invisible</div>
        <a class="btn btn-primary btn-lg mt-4" href="<?= BASEURL; ?>/about" role="button">Let's Talk</a>
        </div>        
    </div>

    <! –– Membuat CURL INFO COVID19 ––>
    <main role="main" class="flex-shrink-0">
        <div style="height: 700px; " class="contanier">
            <h1 class="text-center mt-5 "> COVID-19 Updates</h1>

            <! –– Membuat COVID GLOBAL ––>
            <h6 class="mt-5">World Wide Last Updates</h6>
            <hr/>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card border-warning">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <h5 class="card-title text-warning">Positive Cases</h5>
                                <h3><?= $data['global_positiv']; ?></h3>
                                <p class="card-text">People</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <img src="<?= BASEURL; ?>/img/cases.png" height="100">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card border-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <h5 class="card-title text-info">Recovered Cases</h5>
                                <h3><?= $data['global_sembuh']; ?></h3>
                                <p class="card-text">People</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <img src="<?= BASEURL; ?>/img/recover.png" height="100">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card border-danger">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <h5 class="card-title text-danger">Death Cases</h5>
                                <h3><?= $data['global_meninggal']; ?></h3>
                                <p class="card-text">People</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <img src="<?= BASEURL; ?>/img/death.png" height="100">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <! –– Membuat COVID INDO ––>
            <h6 class="mt-5">Indonesia Last Updates</h6>
            <hr/>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card border-warning">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <h5 class="card-title text-warning">Positive Cases</h5>
                                <h3><?= $data['indo_positiv']; ?></h3>
                                <p class="card-text">People</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <img src="<?= BASEURL; ?>/img/cases.png" height="100">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card border-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <h5 class="card-title text-info">Recovered Cases</h5>
                                <h3><?= $data['indo_sembuh']; ?></h3>
                                <p class="card-text">People</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <img src="<?= BASEURL; ?>/img/recover.png" height="100">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card border-danger">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <h5 class="card-title text-danger">Death Cases</h5>
                                <h3><?= $data['indo_meninggal']; ?></h3>
                                <p class="card-text">People</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <img src="<?= BASEURL; ?>/img/death.png" height="100">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    <! –– Membuat ABOUT US ––>
    <div style="height: 0px; " class="container mt-5">
        <h1 class="text-center mt-5 "> Anyway, What is GTGW? </h1>
        <hr/>
        <div class="card bg-gradient-primary mt-5" style="height: 400px; background-color: rgb(182, 222, 235);">
            <div class="container mt-5 ml-4 pr-5" >
                <h1 class="display-4 font-weight-bold mb-3">Good Talk Good World</h1>
                <p class="text-justify lead font-weight-normal">GOOD TALK GOOD WORLD or known as GTGW UN is an organization concerned with education around the world. We are people who hope education can be felt by all corners of the earth. Through several projects that we have developed such as NO MORE UNDERAGE MARRIED, LIVING BY READ, and LUNGPLANT  we will and brighten the earth. </p>
                <hr/>
                <blockquote class="blockquote">
                    <p class="mb-0">Our quality of life depends on what we continue to consume.</p>
                    <footer class="blockquote-footer">Syahirah, Founder GTGW</footer>
                </blockquote>
            </div>
        </div>
    </div>
</div>
