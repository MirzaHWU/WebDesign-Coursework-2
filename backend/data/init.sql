drop database CourseWorkTravels;

CREATE DATABASE CourseWorkTravels;

  use CourseWorkTravels;

  CREATE TABLE users (
    uuid INT PRIMARY KEY,
    userName VARCHAR(255),
    email VARCHAR(255),
    userPassword VARCHAR(255),
    reviewedDestinations INT
  );

  CREATE TABLE countries (
    uuid INT PRIMARY KEY,
    countryName VARCHAR(255),
    numberOfDestinations INT,
    numberOfCities INT,
    avgScore FLOAT
  );

   CREATE TABLE cities (
    uuid INT PRIMARY KEY,
    cityName VARCHAR(255),
    numberOfDestinations INT,
    originCountry VARCHAR(255),
    avgScore FLOAT
  );

  CREATE TABLE destinations (
    uuid INT PRIMARY KEY,
    originCity VARCHAR(255),
    originCountry VARCHAR(255),
    numberOfReviews INT,
    avgScore FLOAT
  );

  
