# Countries, States, Cities, Phone Codes, Country ISO2 Code PHP Package

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

After installing, you can include the library in your project like this:

```php
<?php

require 'vendor/autoload.php';

use MasumPackagist\CountriesStatesCitiesPhp\Data; 

```

### 1. Creating an Object

To use the package, you need to create an instance of the `Data` class.

Example: 
```php
$data = new Data();

```

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

## Changelog

### [1.0.1]
- **Added**: Security checks to ensure the data is loaded before accessing it in all methods.
- **Improved**: Moved data loading logic from the constructor to a dedicated `loadData()` method for better control and optimization.
- **Fixed**: Potential issue with methods accessing uninitialized data.

### [1.0.0]
- Initial release of the package.
- Includes methods for fetching countries, states, cities, ISO2 codes, and phone codes.


## Contributing

Feel free to submit issues or pull requests if you encounter any bugs or have suggestions for improvements.

## License

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT) - see the LICENSE file for details.

