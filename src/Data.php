<?php

namespace MasumPackagist\CountriesStatesCitiesPhp;

class Data
{
    protected $data;

    public function __construct()
    {
        // Load the JSON data from the file
        $this->data = json_decode(file_get_contents(__DIR__ . '/../data/data.json'), true);
    }

    /**
     * Get all countries.
     */
    public function getCountries()
    {
        $countries_names = []; // Initialize an array to hold the country names
    
        // Loop through the array and collect country names
        foreach ($this->data['countries_data'] as $country) {
            $countries_names[] .= $country['name']; // Add each country name to the array
        }
    
        return $countries_names; // Return the array of country names
    }

    public function getStatesByCountry($country_name)
    {
        $states = []; // Initialize an array to hold the states
    
        // Loop through the countries data to find the matching country
        foreach ($this->data['countries_data'] as $country) {
            if ($country['name'] === $country_name) { // Match by country name
                if (isset($country['states']) && is_array($country['states'])) {
                    // Loop through the states and collect the state names
                    foreach ($country['states'] as $state) {
                        if (isset($state['name'])) {
                            $states[] = $state['name']; // Add each state name to the states array
                        }
                    }
                }
                break; // Exit the loop once the country is found
            }
        }
    
        return $states; // Return the array of states
    }
    public function getCitiesByState($country_name, $state_name)
    {
        $cities = []; // Initialize an array to hold the cities

        // Loop through the countries data to find the matching country
        foreach ($this->data['countries_data'] as $country) {
            if ($country['name'] === $country_name) { // Match by country name
                if (isset($country['states']) && is_array($country['states'])) {
                    // Loop through the states to find the matching state
                    foreach ($country['states'] as $state) {
                        if ($state['name'] === $state_name) { // Match by state name
                            if (isset($state['cities']) && is_array($state['cities'])) {
                                // Loop through the cities and collect city names
                                foreach ($state['cities'] as $city) {
                                    if (isset($city['name'])) {
                                        $cities[] = $city['name']; // Add each city name to the cities array
                                    }
                                }
                            }
                            break; // Exit the loop once the state is found
                        }
                    }
                }
                break; // Exit the loop once the country is found
            }
        }

        return $cities; // Return the array of cities
    }

    public function getIso2ByCountry($country_name)
    {
        $iso2_codes = []; // Initialize an array to hold the ISO2 codes

        // Loop through the countries data to find the matching country
        foreach ($this->data['countries_data'] as $country) {
            if ($country['name'] === $country_name) { // Match by country name
                if (isset($country['iso2'])) {
                    $iso2_codes[] = $country['iso2']; // Add the ISO2 code to the array
                }
                break; // Exit the loop once the country is found
            }
        }

        return $iso2_codes; // Return the array of ISO2 codes
    }

    public function getAllIso2Codes()
    {
        $iso2_codes = []; // Initialize an array to hold all ISO2 codes

        // Loop through the countries data and collect all ISO2 codes
        foreach ($this->data['countries_data'] as $country) {
            if (isset($country['iso2'])) {
                $iso2_codes[] = $country['iso2']; // Add each ISO2 code to the array
            }
        }

        return $iso2_codes; // Return the array of ISO2 codes
    }

    public function getPhoneCodeByCountry($country_name)
    {
        // Loop through the countries data to find the matching country
        foreach ($this->data['countries_data'] as $country) {
            if ($country['name'] === $country_name) { // Match by country name
                if (isset($country['phone_code'])) {
                    return $country['phone_code']; // Return the phone code
                }
            }
        }

        return null; // Return null if the country is not found
    }

    public function getAllPhoneCodes()
    {
        $phone_codes = []; // Initialize an array to hold all phone codes

        // Loop through the countries data and collect all phone codes
        foreach ($this->data['countries_data'] as $country) {
            if (isset($country['phone_code'])) {
                $phone_codes[] = $country['phone_code']; // Add each phone code to the array
            }
        }

        return $phone_codes; // Return the array of phone codes
    }


}