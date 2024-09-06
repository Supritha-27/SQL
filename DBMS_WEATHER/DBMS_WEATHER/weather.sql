CREATE TABLE users (
    user_id INT PRIMARY KEY,
    user_name VARCHAR(255) NOT NULL,
    user_password VARCHAR(255) NOT NULL
);
CREATE TABLE locations (
    location_id INT PRIMARY KEY,
    city VARCHAR(255) NOT NULL,
    country VARCHAR(255) NOT NULL
);
CREATE TABLE weather (
    weather_id INT PRIMARY KEY,
    location_id INT,
    dates DATE,
    timing time(20),
    temperature float(10),
    windspread float(10),
    FOREIGN KEY (location_id) REFERENCES location(location_id)
);

CREATE TABLE events (
    event_id INT PRIMARY KEY,
    weather_id INT,
    event_type VARCHAR(255),
    severity VARCHAR(50),
    start_time datetime(20),
    end_time datetime(20),
    FOREIGN KEY (weather_id) REFERENCES weather(weather_id)
);
CREATE TABLE reports (
    report_id INT PRIMARY KEY,
    user_id INT,
    weather_id INT,
    report_text TEXT,
    report_status VARCHAR(50),
    FOREIGN KEY (user_id) REFERENCES user(user_id),
    FOREIGN KEY (weather_id) REFERENCES weather(weather_id)
);
-- USER TABLE
INSERT INTO users (user_id, user_name, user_password)
VALUES 
  (1, 'JohnDoe', 'password123'),
  (2, 'JaneSmith', 'securePass'),
  (3, 'AliceJohnson', 'pass123'),
  (4, 'BobMiller', 'bobPassword'),
  (5, 'EvaWilliams', 'evaPass');

-- WEATHER TABLE
INSERT INTO weather (weather_id, location_id, dates, timing, temperature, windspread)
VALUES 
  (101, 201, '2024-02-20', '12:00 PM', '25°C', '10 mph'),
  (102, 202, '2024-02-21', '3:00 PM', '20°C', '8 mph'),
  (103, 203, '2024-02-22', '9:00 AM', '28°C', '15 mph'),
  (104, 204, '2024-02-23', '6:00 PM', '22°C', '12 mph'),
  (105, 205, '2024-02-24', '11:00 AM', '30°C', '18 mph');

-- LOCATION TABLE
INSERT INTO location (location_id, city, country)
VALUES 
  (201, 'New York', 'USA'),
  (202, 'London', 'UK'),
  (203, 'Tokyo', 'Japan'),
  (204, 'Sydney', 'Australia'),
  (205, 'Rio de Janeiro', 'Brazil');

-- EVENTS TABLE
INSERT INTO events (event_id, weather_id, event_type, severity, start_time, end_time)
VALUES 
  (301, 101, 'Rain', 'High', '7:00 PM', '10:00 PM'),
  (302, 102, 'Thunder Storm', 'Medium', '2:30 PM', '5:30 PM'),
  (303, 103, 'Heat Wave', 'High', '10:00 AM', '6:00 PM'),
  (304, 104, 'Snowfall', 'Low', '4:00 PM', '7:00 PM'),
  (305, 105, 'Sunny', 'Medium', '12:00 PM', '3:00 PM');

-- REPORTS TABLE
INSERT INTO reports (report_id, user_id, weather_id, report_text, report_status)
VALUES 
  (401, 1, 101, 'Incident reported near the park', 'Pending'),
  (402, 2, 102, 'Traffic disruption due to construction', 'Resolved'),
  (403, 3, 103, 'Power outage reported in the area', 'Pending'),
  (404, 4, 104, 'Minor earthquake reported', 'Under Investigation'),
  (405, 5, 105, 'Flooding in low-lying areas', 'Pending');
