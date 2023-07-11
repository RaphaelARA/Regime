

CREATE TABLE utilisateur(
    idUser INTEGER PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    mail VARCHAR(100) NOT NULL,
    mdp varchar(50) NOT NULL,
    isAdmin INTEGER NOT NULL
);

CREATE TABLE infoUtilisateur(
    idUser INTEGER NOT NULL,
    age INTEGER NOT NULL,
    taille double NOT NULL,
    poids double NOT NULL,
    solde double  NOT NULL,
    FOREIGN KEY (idUser) REFERENCES utilisateur(idUser)
);


CREATE TABLE code (
    idCode INTEGER PRIMARY KEY AUTO_INCREMENT,
    code VARCHAR(5) NOT NULL,
    montant double NOT NULL,
    etat int NOT NULL
);

CREATE TABLE validationCode(
    idValidation INTEGER PRIMARY KEY AUTO_INCREMENT,
    idUser INTEGER NOT NULL,
    code INTEGER NOT NULL,
    dateArriver DATE NOT NULL,
    dateValidation DATE,
    FOREIGN KEY (idUser) REFERENCES utilisatuer(idUser)
);

CREATE TABLE objectif(
    idObjectif INTEGER PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL
);

CREATE TABLE regime(
    idRegime INTEGER PRIMARY KEY AUTO_INCREMENT,
    idObjectif INTEGER NOT NULL,
    num INTEGER NOT NULL,

    duree INTEGER NOT NULL,
    pourcentageV INTEGER NOT NULL,
    pourcentageL INTEGER NOT NULL,
    pourcentageP INTEGER NOT NULL,
    prix DOUBLE NOT NULL,
    FOREIGN KEY (idObjectif) REFERENCES objectif(idObjectif)
);

CREATE TABLE activiteSportif(
    idActivite INTEGER PRIMARY KEY AUTO_INCREMENT,
    idRegime INTEGER NOT NULL,
    nom VARCHAR(50) NOT NULL,
    FOREIGN KEY (idRegime) REFERENCES regime(idRegime)
);

CREATE TABLE regimeUser(
    idUser INTEGER NOT NULL,
    idRegime INTEGER NOT NULL,
    duree INTEGER NOT NULL,
    prix DOUBLE NOT NULL,
    FOREIGN KEY (idUser) REFERENCES utilisateur(idUser),
    FOREIGN KEY (idRegime) REFERENCES regime(idRegime)
);

create table plats(
    idPlats INTEGER NOT NULL, 
    idObjectif INTEGER NOT NULL,
    nom VARCHAR(50) NOT NULL,
    FOREIGN KEY (idObjectif) REFERENCES objectif(idObjectif)
);

INSERT INTO `utilisateur` (`idUser`, `nom`,`gender`, `mail`, `mdp`, `isAdmin`) VALUES
(NULL, 'admin','homme', 'admin@gmail.com', 'admin', 1),
(NULL, 'mano','homme' ,'mano@gmail.com', 'admin', 0),
(NULL, 'jimmy','homme' ,'jimmy@gmail.com', 'admin', 0),
(NULL, 'antonio','homme', 'antonio@gmail.com', 'admin', 0);
