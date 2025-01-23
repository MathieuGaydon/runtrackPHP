SELECT salles.nom AS nom_salle, étage.nom AS nom_etage FROM salles JOIN étage ON salles.id_etage = étage.id;
