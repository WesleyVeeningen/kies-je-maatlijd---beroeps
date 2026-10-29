# Gordon Ramsay Bar & Grill (school project)

A website for a restaurant, built as a group school project ("Kies je maatlijd – beroeps"). It has a homepage, menus, an info page and an ordering page, plus a small PHP and MySQL booking system for adding, listing and removing reservations. The site content is in Dutch.

## Pages

| File | Page |
| --- | --- |
| `index.html` | Homepage |
| `menu.html` | Menus, with the PDF menus in `bestanden/` |
| `info.html` | Information about the restaurant |
| `bestel.html` | Ordering page |
| `bedankt.html` | Thank-you page |
| `navbar.html`, `footer.html` | Shared header and footer, loaded with jQuery |

### Booking system (PHP)

| File | What it does |
| --- | --- |
| `booking.php` | Lists all reservations from the `booking` table |
| `toevoegForm.php` → `toevoegVerwerk.php` | Form to add a reservation |
| `verwijder.php` → `verwijder_verwerk.php` | Remove a reservation |

## Running it

The static pages open straight in a browser. The booking pages need PHP and MySQL, for example with XAMPP or MAMP:

1. Put the project folder in your web server's document root.
2. Create a database with a `booking` table holding `Naam`, `Datum`, `Tijd` and `Personen`.
3. Add a `config.php` (it isn't in the repo) that connects to the database as `$mysqli`:

   ```php
   <?php
   $mysqli = mysqli_connect('localhost', 'root', '', 'your_database');
   ```

4. Open `booking.php` through the web server, for example `http://localhost/kies-je-maatlijd---beroeps/booking.php`.

## Stack

HTML, CSS, JavaScript with jQuery, PHP and MySQL.
