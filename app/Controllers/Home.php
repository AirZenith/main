<?php

namespace App\Controllers;

use CodeIgniter\Config\DotEnv;

class Home extends BaseController
{
    public function index()
    {
        $request = \Config\Services::request();
        $response = \Config\Services::response();
        $logger = \Config\Services::logger();

        $aqiController = new AqiController();
        $aqiController->initController($request, $response, $logger);
        $weather = $aqiController->getWeatherForecast();
        $pollutant = $aqiController->getPol();

        $data = [
            'url' => $this->url(),
            'aqi' => $aqiController->getCityAQI(),
            'city' => $weather['location']['name'],
            'country' => $weather['location']['country'],
            'date' => date('d F Y'),
            'time' => date('h:i A'),
            'tempC' => $weather['current']['temp_c'],
            'tempF' => $weather['current']['temp_f'],
            'humidity' => $weather['current']['humidity'],
            'uv' => $weather['current']['uv'],
            'pm10' => $pollutant['pm10']['v'],
            'pm25' => $pollutant['pm25']['v'],
        ];

        if ($data['aqi'] > 100) {
            $data['message'] = '<span class="fs-4">The air is kinda polluted right now.</span><span class=" text-danger fs-4"> You should use a mask.</span>';
        } else {
            $data['message'] = '<span class="fs-4 text-success">The air is good, Have a nice day 👍</span>';
        }

        echo view('top');
        echo view('navbar', $data);
        echo view('v_home');
        echo view('footer', $data);
        echo view('bottom');
    }

    public function challenges()
    {
        $link['url'] = $this->url();
        echo view('top');
        echo view('navbar', $link);
        echo view('v_challenges');
        echo view('footer', $link);
        echo view('bottom');
    }

    public function history()
    {
        $link['url'] = $this->url();
        echo view('top');
        echo view('navbar', $link);
        echo view('v_history');
        echo view('footer', $link);
        echo view('bottom');
    }

    public function reward()
    {
        $link['url'] = $this->url();
        echo view('top');
        echo view('navbar', $link);
        echo view('v_reward');
        echo view('footer', $link);
        echo view('bottom');
    }

    public function appreciatingYouAppreciatingMe($password)
    {
        if ($password == '🐱‍💻') {
            echo " 
                Sponsored by goDaddy(eventhough we're not using it 😁) & canva \n
                Spoonfeed by Alvaro Muyassar \n
                Spokeneed by Arief Ammar \n
                Supported by Nadine Maulia (and almost everyone i know lol) \n
                SpacePPTd by Daffa Dians (eventhough we're not using it[for now 😉]) \n
                \n
                Special thanks to nasa earth science division for the EMIT data (please make an api for us so we don't need to download all of it)
            ";
        } else {
            echo '403 Access Forbidden';
        }
    }
}
