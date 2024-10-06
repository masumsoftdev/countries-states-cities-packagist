# Countries, States, Cities PHP Package

A PHP package that provides information about countries, states, cities, ISO2 codes, and phone codes. This package is designed for easy integration into PHP applications to fetch location-related data.

## Features
- Get a list of all countries
- Get a list of states by country
- Get a list of cities by state
- Fetch ISO2 country codes
- Fetch phone codes by country

## Installation

To install this package, use Composer:

`composer require masum-packagist/countries-states-cities-php`

## Usage

### 1. Creating an Object

To use the package, you need to create an instance of the `Data` class.

Example: 
`$data = new Data();`

### 2. Available Methods

#### getCountries()
- **Description**: Returns an array of all country names.
- **Usage**: Call the method to get the list of all countries.

#### getStatesByCountry($country_name)
- **Description**: Returns an array of state names for the specified country.
- **Parameters**: 
  - `$country_name`: The name of the country.
- **Usage**: Call the method with the country name to get its states.

#### getCitiesByState($country_name, $state_name)
- **Description**: Returns an array of city names located in the specified state of the given country.
- **Parameters**: 
  - `$country_name`: The name of the country.
  - `$state_name`: The name of the state.
- **Usage**: Call the method with the country and state names to get cities.

#### getIso2ByCountry($country_name)
- **Description**: Returns the ISO2 code for the specified country.
- **Parameters**: 
  - `$country_name`: The name of the country.
- **Usage**: Call the method with the country name to get its ISO2 code.

#### getAllIso2Codes()
- **Description**: Returns an array of ISO2 codes for all countries.
- **Usage**: Call the method to get all ISO2 codes.

#### getPhoneCodeByCountry($country_name)
- **Description**: Returns the phone code associated with the specified country.
- **Parameters**: 
  - `$country_name`: The name of the country.
- **Usage**: Call the method with the country name to get its phone code.

#### getAllPhoneCodes()
- **Description**: Returns an array of phone codes for all countries.
- **Usage**: Call the method to get all phone codes.

## Contributing

Feel free to submit issues or pull requests if you encounter any bugs or have suggestions for improvements.

## License

This project is licensed under the MIT License - see the LICENSE file for details.
