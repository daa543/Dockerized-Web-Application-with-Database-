# Dockerized-Web-Application-with-Database-

# Objective 
The objective of this final project is to design and implement a web application using Docker that includes a web server container and a database container. you will gain hands-on experience in containerization, communication between containers using Docker Compose, and web development.

# 1. Web Application:
- Students are required to create a simple website using a web server like Nginx, Apache, or Flask.
- The website should have a user-friendly interface and be visually appealing. 
- Students are encouraged to use suitable web technologies like HTML, CSS, and JavaScript or any preferred technology to create the website. 
- Create a Dockerfile to define the specifications and dependencies of the web server container. 
- The Dockerfile should include all the necessary instructions to build the container. 
- Ensure that the web server container runs the website successfully.

# Database: 
- Students are required to design and implement a database to store student data.
- The database schema should include fields for name, age, CGPA, ID, and any additional data they choose. 
- Encourage students to choose a suitable database technology like MySQL, PostgreSQL, or SQLite. 
- Students should create the necessary tables and define appropriate data types for each field.
  
# Docker Compose: 
- Students need to use Docker Compose to orchestrate the communication between the web server container and the database container. 
- Create a docker-compose.yml file that includes the specifications for both containers. 
- Configure the necessary environment variables, ports, and volumes in the docker compose.yml file.
- Make sure the web server container can communicate with the database container. 


# To run the code in docker
command to build an image
- docker-compose build

command to build containers
- docker-compose up

# Ports:

phpMyAdmin service
localhost:8001

Apache web server with PHP service
localhost:80
