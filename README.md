# URL
Sommige functionaliteiten werkte niet op de gehoste website dus graag via docker openen :)

# Updates
Ik heb ten opzichte van kans 1 de volgende updates aangebracht:

- Ipv $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW); nu filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW); filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); Ik heb FILTER_UNSAFE_RAW getest en kan alsnog XSS gebruiken met deze code, met FILTER_SANITIZE_STRING is dat niet meer mogelijk.

- De meegegeven sql database is nu up to date, bij kans 1 miste de 'orders' table.

# Login credentials

Username: admin
Password: test123

## Usage

In a terminal, run:
```bash
docker-compose up
```

NGINX will now serve files in the app/public folder. Visit localhost in your browser to check.
PHPMyAdmin is accessible on localhost:8080

If you want to stop the containers, press Ctrl+C. 
Or run:
```bash
docker-compose down
```