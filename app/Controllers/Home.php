<?php

namespace App\Controllers;

use CodeIgniter\Config\DotEnv;

class Home extends BaseController
{
<<<<<<< HEAD
    public function index()
=======
    private $token;

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $this->token = getenv('API_KEY');
    }

    public function index(): string
>>>>>>> 23f37b36481c590a07a1cfe9c6e9790a113db12f
    {
        echo view('navbar');
        echo view('v_home');
        echo view('bottom');
    }

    /**
     * Fetch all data based on WAQI json file
     */
    public function getWAQI($city_name = 'here')
    {
        $token = $this->token;

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
    public function getCityAQI(String $city_name = 'here'): int
    {
        $data = $this->getWAQI()['aqi'];

        return $data;
    }

    /**
     * Fetch dominant polutant name from WAQI json file
     */
    public function getDomPol(String $city_name = 'here'): string
    {
        $data = $this->getWAQI()['dominentpol'];

        return $data;
    }

    /**
     * Fetch all polutant name and values from WAQI json file
     */
    public function getPol(String $city_name = 'here')
    {
        $data = $this->getWAQI()['iaqi'];

        return $data;
    }

    /**
     * Fetch polutant forecast between 2 days before and 2 days after today from WAQI json file
     */
    public function getForecast(String $particle_type = null)
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
}
