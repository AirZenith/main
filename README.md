# Welcome to AirZenith main repository!

## What is AirZenith?

AirZenith is an air quality monitoring application that aims to provide information about air quality index and greenhouse gas emissions, as well as promote a healthy lifestyle to users by giving them prizes every time they complete the available challenges.

This app was made in [Codeigniter 4 framework](https://github.com/codeigniter4/CodeIgniter4). The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Installation & updates

click the green code button on the top right and download it they way you want.
After that, you can run `composer update` to install the vendor folders

## Setup

1.  Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.
2. Create a WAQI api key from [aqicn.org](https://aqicn.org/data-platform/token/) and replace the first `YOUR_API_KEY` in `.env` file with your api key.
3. Create a WeatherAPI api key from [WeatherAPI.com](https://www.weatherapi.com/signup.aspx) and replace the second `YOUR_API_KEY` in `.env` file with your api key.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
