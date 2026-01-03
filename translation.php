<?php
    class translation{
        private $lang;
        private $translation;

        function __construct($lang) {
            $this->lang = $lang;
            $translation = [
                'en' => [
                    "title" => "Convert temperature",
                    "explanation" => "Use the calculation tool below to quickly convert between the different temperature units (Celsius, Kelvin, and Fahrenheit)",
                    "convert" => "Convert"],
                'de' => [
                    "title" => "Temperatur umrechnen",
                    "explanation" => "Verwenden Sie das unten stehende Berechnungswerkzeug, um schnell zwischen den verschiedenen Temperatureinheiten (Celsius, Kelvin und Fahrenheit) umzurechnen.",
                    "convert" => "Umrechnen"],
                'nl' => [
                    "title" => "Temperatuur omrekenen",
                    "explanation" => "Gebruik onderstaande rekentool om snel om te rekenen tussen de verschillende temperatuureenheden (Celsius, Kelvin en Fahrenheit)",
                    "convert" => "Omrekenen"]
            ];
            $this->translation = $translation[$lang];
        }
        
        public function get_language(){
            switch($lang){
                case "en":
                    return "English";
                case "de":
                    return "Deutsche";
                case "nl":
                    return "Nederlands";
                default:
                    return "Language not supported";
            }
        }

        public function get_title(){
            return $this->translation["title"];
        }

        public function get_explanation(){
            return $this->translation["explanation"];
        }

        public function get_convert(){
            return $this->translation["convert"];
        }
    }
?>