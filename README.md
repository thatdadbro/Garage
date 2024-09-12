# Garage
## Running the project
- Create the .env file `cp .env.example .env`
- Create the database file (this is horrible and I only did it for the demo) `cp database/database.sqlite.example database/database.sqlite`
- Update and install vendor packages `composer update && composer install`
- Add Sail alias to make our lives easier `alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'`
- Start Sail in the background `sail up -d`
- Install Node packages and build assets `sail pnpm install && sail pnpm run build`
- Generate the app key (this is automatically inserted in .env) `sail artisan key:generate`
- The application will run on port 80, access the app at http://localhost

## Possible errors
I ran into an issue with the PHP version when trying to spin up this project. I upgraded by performing the following steps.
- `sudo apt update`
- `sudo apt upgrade`
- `sudo add-apt-repository ppa:ondrej/php`
- `sudo apt update`
- `sudo apt install php8.3-fpm php8.3-cli php8.3-mysql php8.3-curl php8.3-gd php8.3-mbstring php8.3-xml php8.3-intl`
- Choose the correct version `sudo update-alternatives --config php`

<b>Seeing the default Apache screen?</b> Stop the service with `sudo service apache2 stop`

## Features to be added
- Search
    - Add the ability for users to find cars via searching by make, model, year, condition, owner, license plate, VIN, etc...
- Social
    - Ability to "Like/Star/Heart" vehicles
    - Ability to follow users, cars, garages
    - Add flag for private cars/builds
        - Users should have the ability to share with registered users, or generate a link that will require the users to register to view the vehicle
    - Share
    - Profile templates
- Modifications per vehicle
    - Ability to add mods to a vehicle. Multiple entries/records with the ability to add documentation (tuning results, manual, user instructions, receipts, etc...)
- Modifications wish list and part price tracking
    - Users should be able to add a list of modifications they would like to make to the car.
    - Links can be added to parts, we will track the price and alert the user when there is a price drop.
