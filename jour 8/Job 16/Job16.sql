SELECT 
    e.nom AS "Etage",
    s.nom AS "Biggest Room",
    s.capacite
FROM 
    étage e
JOIN 
    Salles s ON e.id = s.id_etage  
WHERE 
    s.capacite = (SELECT MAX(capacite) FROM Salles);