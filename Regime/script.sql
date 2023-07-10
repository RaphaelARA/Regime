CREATE DATABASE regime;
USE regime;

CREATE TABLE user(
    idUser INT AUTO_INCREMENT PRIMARY KEY,
    isAdmin boolean,
    name VARCHAR(20),
    mail VARCHAR(50),
    password VARCHAR(20),
    gender INT,
    height FLOAT,
    weight FLOAT,
    age INT
);

CREATE TABLE goal(
    idGoal INT AUTO_INCREMENT PRIMARY KEY,
    goal VARCHAR(10),
    idUser INT,
    FOREIGN KEY (idUser) REFERENCES user(idUser)
);

CREATE TABLE foods(
    idFood INT AUTO_INCREMENT PRIMARY KEY,
    nameFood VARCHAR(20),
    groupFood VARCHAR(20),
    calorie FLOAT,
    protein FLOAT,
    carbohydrate FLOAT, /* glucide */
    Lipide FLOAT
);

CREATE TABLE foodpref(
    idpref INT AUTO_INCREMENT PRIMARY KEY,
    allergy VARCHAR(20),
    restriction VARCHAR(20)
);

CREATE TABLE meal(
    idMeal INT AUTO_INCREMENT PRIMARY KEY,
    idUser INT,
    datemeal DATETIME,
    FOREIGN KEY (idUser) REFERENCES user(idUser)
);

CREATE TABLE mealplan(
    idPlan INT AUTO_INCREMENT PRIMARY KEY,
    idUser INT,
    idMeal INT,
    quantity INT,
    FOREIGN KEY (idUser) REFERENCES user(idUser),
    FOREIGN KEY (idMeal) REFERENCES meal(idMeal)
);

CREATE TABLE progression(
    idProg INT AUTO_INCREMENT PRIMARY KEY,
    idUser INT,
    /* ilay objectif atteint moa izany tsy aiko loatra hoe ahoana vu que tsy initié tanaty table Objectifs akory */
    FOREIGN KEY (idUser) REFERENCES user(idUser)
);

CREATE TABLE exercices(
    idExercice INT AUTO_INCREMENT PRIMARY KEY,
    nameExercice VARCHAR(20),
    description TEXT,
    category VARCHAR(20), 
    intensity FLOAT, 
);

CREATE TABLE recommandation(
    idRec INT AUTO_INCREMENT PRIMARY KEY,
    idUser INT,
    recExercice INT, 
    duration TIME,
    frequence FLOAT,
    FOREIGN KEY (recExercice) REFERENCES exercices(idExercice)
);

CREATE TABLE history(
    idHisto INT AUTO_INCREMENT PRIMARY KEY,
    idUser INT,
    seance VARCHAR(20),
    /* tsy ampy exercice effectué */
    duration TIME,
    burnedCal FLOAT,
    FOREIGN KEY (idUser) REFERENCES user(idUser)
);

CREATE TABLE code(
    idCode INT AUTO_INCREMENT PRIMARY KEY,
    numCode INT,
    value FLOAT
);

CREATE TABLE wallet(
    idWallet INT AUTO_INCREMENT PRIMARY KEY,
    idUser INT,
    idCode INT,
    FOREIGN KEY (idUser) REFERENCES user(idUser),
    FOREIGN KEY (idCode) REFERENCES code(idCode) 
);
