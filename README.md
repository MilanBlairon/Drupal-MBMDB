# 📽️ MBMDb - Milan Blairon Movie Database

Welkom bij **MBMDb**!  
Dit project is gemaakt voor het vak **Webdevelopment 2**. MBMDb is een filmdatabase-website gebouwd met **Drupal**, waarin je films, acteurs en regisseurs kunt ontdekken, beoordelen en beheren.

---

## 📚 Inhoud

- **Films ontdekken**: met uitgebreide info zoals samenvatting, duur, genre, rating, storyline, afbeeldingen en video's.
- **Overzichtspagina's**: aparte pagina's voor films, acteurs en regisseurs.
- **Reacties plaatsen**: alleen geregistreerde gebruikers kunnen reageren.
- **Gebruikersrollen**:
  - **Junior Moderator**: kan reacties verwijderen.
  - **Junior Editor**: kan reacties verwijderen en inhoud (films, acteurs, regisseurs) aanmaken/bewerken.
  - **Senior Editor**: kan ook pagina’s verwijderen.
- **Responsive design**: geschikt voor mobiel, tablet en desktop.
- **Hosting in Docker**: voor eenvoudige en snelle deployment.

---

## 🛠️ Installatiehandleiding

### Vereisten
- Docker & Docker Compose
- Git

### Installatiestappen

1. Clone deze repository:
   ```bash
   git clone https://github.com/MilanBlairon/drupal-project
   cd drupal-project
   ```

2. Start de Docker containers:
   ```bash
   docker-compose up -d
   ```

3. Open de website:
   - Bezoek `http://localhost:8080` in je webbrowser.

4. (Optioneel) Admin toegang:
   - **Gebruikersnaam:** `Milan`  
   - **Wachtwoord:** `vives`
   Alle wachtwoorden voor overige accounts staan in een TXT bestand op Github!

---

## 🔒 Gebruikersrollen & rechten

| Rol               | Permissies                                   |
|-------------------|----------------------------------------------|
| Junior Moderator  | Kan reacties verwijderen |
| Junior Editor     | Kan reacties verwijderen + inhoud aanmaken/bewerken |
| Senior Editor     | Kan reacties verwijderen + pagina’s verwijderen |
| Geregistreerde gebruiker | Kan reacties plaatsen en inhoud lezen |
| Anonieme gebruiker | Kan inhoud lezen |

---

## 🎬 Gegevens in de site

- **10 films toegevoegd**, waarvan meer dan **4 in hetzelfde genre**.
- Elke film bevat:
  - Een samenvatting en storyline
  - Genre-tags
  - Duur en rating
  - Afbeeldingen en video's
  - Links naar de acteurs en regisseurs

---

**Veel plezier met MBMDb!** 🍿🎥
