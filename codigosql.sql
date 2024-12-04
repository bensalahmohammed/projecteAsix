CREATE TABLE players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    team VARCHAR(255) NOT NULL,
    position VARCHAR(255) NOT NULL,
    birthYear INT NOT NULL
);
  
INSERT INTO players (name, team, position, birthYear) 
VALUES 
('Lionel Messi', 'Paris Saint-Germain', 'Forward', 1989),
('Cristiano Ronaldo', 'Al Nassr', 'Forward', 1985),
('Neymar Jr', 'Al Hilal', 'Forward', 1992),
('Luka Modric', 'Real Madrid', 'Midfielder', 1985),
('Sergio Ramos', 'Paris Saint-Germain', 'Defender', 1986),

