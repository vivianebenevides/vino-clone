@extends('layouts.app')
@section('titre', 'VINO')
@section('content')
        <main>
            <section class="container">
                <div class="titre">
                    <h1>Bonjour <span>"Nom client"</span></h1>
                </div>
                <div>
                    <a href="#" class="text-container">
                        <img src="{{asset('assets/add.png')}}" alt="add">
                        Ajouter un cellier
                    </a>
                </div>
                <div class="recherche">
                    <img src="{{asset('assets/lupe.png')}}" alt="lupe">
                    <input type="text" placeholder="Rechercher un vin">
                </div>
            </section>

            <section class="catalogue">
                <div class="carte">
                    <div>
                        <img src="{{asset('assets/vin-rouge.png')}}" alt="bouteille">
                    </div>
                    <div class="text-carte">
                        <h2>EA Cartuxa Reserva</h2>
                        <p>Vin rouge | 750 ml | Portugal</p>
                        <h3>23,49 $</h3>
                        <div class="btn-carte">
                            <a href="#">Détails</a>
                            <a href="#">Ajouter à mon celier</a>
                        </div>
                    </div>
                </div>
                <div class="carte">
                    <div>
                        <img src="{{asset('assets/vin-rouge.png')}}" alt="bouteille">
                    </div>
                    <div class="text-carte">
                        <h2>EA Cartuxa Reserva</h2>
                        <p>Vin rouge | 750 ml | Portugal</p>
                        <h3>23,49 $</h3>
                        <div class="btn-carte">
                            <a href="#">Détails</a>
                            <a href="#">Ajouter à mon celier</a>
                        </div>
                    </div>
                </div>
                <div class="carte">
                    <div>
                        <img src="{{asset('assets/vin-rouge.png')}}" alt="bouteille">
                    </div>
                    <div class="text-carte">
                        <h2>EA Cartuxa Reserva</h2>
                        <p>Vin rouge | 750 ml | Portugal</p>
                        <h3>23,49 $</h3>
                        <div class="btn-carte">
                            <a href="#">Détails</a>
                            <a href="#">Ajouter à mon celier</a>
                        </div>
                    </div>
                </div>
                <div class="carte">
                    <div>
                        <img src="{{asset('assets/vin-rouge.png')}}" alt="bouteille">
                    </div>
                    <div class="text-carte">
                        <h2>EA Cartuxa Reserva</h2>
                        <p>Vin rouge | 750 ml | Portugal</p>
                        <h3>23,49 $</h3>
                        <div class="btn-carte">
                            <a href="#">Détails</a>
                            <a href="#">Ajouter à mon celier</a>
                        </div>
                    </div>
                </div>
                <div class="carte">
                    <div>
                        <img src="{{asset('assets/vin-rouge.png')}}" alt="bouteille">
                    </div>
                    <div class="text-carte">
                        <h2>EA Cartuxa Reserva</h2>
                        <p>Vin rouge | 750 ml | Portugal</p>
                        <h3>23,49 $</h3>
                        <div class="btn-carte">
                            <a href="#">Détails</a>
                            <a href="#">Ajouter à mon celier</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pagination">
                <p>1 | 2 | 3</p>
            </section>
        </main>
@endsection
