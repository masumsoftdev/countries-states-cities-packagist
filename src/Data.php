<?php

namespace MasumPackagist\CountriesStatesCitiesPhp;

class Data
{
    protected $data;

    public function __construct()
    {
        $this->loadData();
    }

    /**
     * Load the JSON data from the file.
     */
    protected function loadData()
    {
        if (empty($this->data)) {  // Load data only if not already loaded
            $this->data = json_decode(file_get_contents(__DIR__ . '/../data/data.json'), true);
        }
    }

    /**
     * Get all countries.
     */
    public function getCountries()
    {
        $this->loadData();  // Ensure data is loaded
        $countries_names = [];

        foreach ($this->data['countries_data'] as $country) {
            $countries_names[] = $country['name'];  // Add each country name to the array
        }

        return $countries_names;
    }

    /**
     * Get states by country name.
     */
    public function getStatesByCountry($country_name)
    {
        $this->loadData();  // Ensure data is loaded
        $states = [];

        foreach ($this->data['countries_data'] as $country) {
            if ($country['name'] === $country_name) {
                if (isset($country['states']) && is_array($country['states'])) {
                    foreach ($country['states'] as $state) {
                        if (isset($state['name'])) {
                            $states[] = $state['name'];
                        }
                    }
                }
                break;
            }
        }

        return $states;
    }

    /**
     * Get cities by country and state name.
     */
    public function getCitiesByState($country_name, $state_name)
    {
        $this->loadData();  // Ensure data is loaded
        $cities = [];

        foreach ($this->data['countries_data'] as $country) {
            if ($country['name'] === $country_name) {
                if (isset($country['states']) && is_array($country['states'])) {
                    foreach ($country['states'] as $state) {
                        if ($state['name'] === $state_name) {
                            if (isset($state['cities']) && is_array($state['cities'])) {
                                foreach ($state['cities'] as $city) {
                                    if (isset($city['name'])) {
                                        $cities[] = $city['name'];
                                    }
                                }
                            }
                            break;
                        }
                    }
                }
                break;
            }
        }

        return $cities;
    }

    /**
     * Get ISO2 code by country name.
     */
    public function getIso2ByCountry($country_name)
    {
        $this->loadData();  // Ensure data is loaded
        $iso2_codes = [];

        foreach ($this->data['countries_data'] as $country) {
            if ($country['name'] === $country_name && isset($country['iso2'])) {
                $iso2_codes[] = $country['iso2'];
                break;
            }
        }

        return $iso2_codes;
    }

    /**
     * Get all ISO2 codes.
     */
    public function getAllIso2Codes()
    {
        $this->loadData();  // Ensure data is loaded
        $iso2_codes = [];

        foreach ($this->data['countries_data'] as $country) {
            if (isset($country['iso2'])) {
                $iso2_codes[] = $country['iso2'];
            }
        }

        return $iso2_codes;
    }

    /**
     * Get phone code by country name.
     */
    public function getPhoneCodeByCountry($country_name)
    {
        $this->loadData();  // Ensure data is loaded

        foreach ($this->data['countries_data'] as $country) {
            if ($country['name'] === $country_name && isset($country['phone_code'])) {
                return $country['phone_code'];
            }
        }

        return null;
    }

    /**
     * Get all phone codes.
     */
    public function getAllPhoneCodes()
    {
        $this->loadData();  // Ensure data is loaded
        $phone_codes = [];

        foreach ($country['countries_data'] as $country) {
            if (isset($country['phone_code'])) {
                $phone_codes[] = $country['phone_code'];
            }
        }

        return $phone_codes;
    }
}
