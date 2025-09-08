  
    <div class="recherche">
        <form action="" method="GET">
            <div>
                <label for="depart">Départ</label>
                <input type="text" id="depart" placeholder="Ville de départ">
            </div>

            <div>
                <label for="arrivee">Arrivée</label>
                <input type="text" id="arrivee" placeholder="Arrivée">
            </div>

            <div>
                <label for="nombre_passager">Nombre de passager</label>
                <input type="text" id="passager">
            </div>

        </form>

        <button class="bouton-recherche" type="submit">Rechercher</button>
    </div>

    <h2>Resultat de tout les covoiturages :</h2>
    <div class="resultats" id="resultats">
        <div class="carte-covoiturage">
            <h3>Covoiturage pour [destination]</h3>
            <p><b>Départ :</b> [ville de départ]</p>
            <p><b>Arrivée :</b> [ville de départ]</p>
            <p><b>Nombre de passager :</b> [nombre de passager]</p>
            <p><b>Prix :</b> [prix] €</p>
            <a href=""> Voir les details</a> <!--lier avec detailcovoiturage.php-->
        </div>
    </div>
    