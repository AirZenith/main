<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AqiController extends BaseController
{
    private $current_location;
    private $city_name;
    private $waqi_token;
    private $weather_token;

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $this->waqi_token = getenv('WAQI_TOKEN');
        $this->weather_token = getenv('WEATHER_TOKEN');
        $this->current_location = $this->getCurrentLocation();
        $this->city_name = 'Jakarta';

        if ($this->current_location->status == 'ok') {
            $this->city_name = $this->current_location->city;
        }
    }

    public function getCurrentLocation()
    {
        $user_ip = getenv('REMOTE_ADDR');
        $geo = json_decode(file_get_contents("http://ip-api.com/json/{$user_ip}"));

        return $geo;
    }

    /**
     * Fetch all data based on WAQI json file
     */
    public function getWAQI()
    {
        $city_name = $this->city_name;
        $token = $this->waqi_token;

        $api_url = "https://api.waqi.info/feed/$city_name/?token=$token";

        $response = file_get_contents($api_url);
        $data = json_decode($response, true);

        if ($data['status'] != 'ok') {
            return false;
        }

        return $data['data'];
    }

    /**
     * Fetch city's AQI number from WAQI json file
     */
    public function getCityAQI(): int
    {
        $data = $this->getWAQI()['aqi'];

        return $data;
    }

    /**
     * Fetch dominant polutant name from WAQI json file
     */
    public function getDomPol(): string
    {
        $data = $this->getWAQI()['dominentpol'];

        return $data;
    }

    /**
     * Fetch all polutant name and values from WAQI json file
     */
    public function getPol()
    {
        $data = $this->getWAQI()['iaqi'];

        return $data;
    }

    /**
     * Fetch polutant forecast between 2 days before and 2 days after today from WAQI json file
     */
    public function getPolForecast(String $particle_type = null)
    {
        $data = $this->getWAQI()['forecast']['daily'];

        if ($particle_type !== null) {
            try {
                $data = $this->getWAQI()['forecast']['daily'][$particle_type];
            } catch (\Throwable $th) {
                return "Particle must be between o3, pm10, and pm25";
            }
        }

        return $data;
    }

    /**
     * Fetch complete current weather and weather forecast status
     */
    public function getWeatherForecast()
    {
        $token = $this->weather_token;
        $city = $this->city_name;
        $api_url = "http://api.weatherapi.com/v1/forecast.json?key={$token}&q={$city}";
        $response = file_get_contents($api_url);
        $data = json_decode($response, true);

        return $data;
    }

    /**
     * Fetch current temperature from WeatherAPI
     */
    public function getCurrentTemp(String $type = 'celcius')
    {
        $data = $this->getWeatherForecast();
        $data = $data['current'];

        if ($type == 'celcius') {
            $data = [
                'temp' => $data['temp_c'],
                'humidity' => $data['humidity'],
                'feelslike' => $data['feelslike_c'],
                'uv' => $data['uv']
            ];
        } else {
            $data = [
                'temp' => $data['temp_f'],
                'humidity' => $data['humidity'],
                'feelslike' => $data['feelslike_f'],
                'uv' => $data['uv']
            ];
        }

        return $data;
    }

    /**
     * Fetch current temperature from WeatherAPI
     */
    public function getForecast()
    {
        $data = $this->getWeatherForecast();
        $data = $data['forecast']['forecastday'][0]; //? For now we can only had 1 data because we're so broke rn and cant afford the pro version😭

        return $data;
    }
}
