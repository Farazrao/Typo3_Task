# TYPO3 CMS Base Distribution

Get going quickly with TYPO3 CMS.

# TYPO3 Project Setup with Docker and ddev

This repository contains the setup and configuration for a TYPO3 project, utilizing Docker and ddev. The project includes basic technologies such such as TypoScript, Extbase, Fluid, template development based on Bootstrap, and uses PHP, HTML5, CSS3, JavaScript/Node, and MySQL/MariaDB.

## Prerequisites

Before getting started, ensure you have the following software installed on your system:

- Docker: [Installation guide](https://docs.docker.com/get-docker/)
- ddev: [Installation guide](https://ddev.readthedocs.io/en/stable/#installation)
- Git: [Installation guide](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)
- Composer: [Installation guide](https://getcomposer.org/download/)

## Getting Started

1. Clone this repository to your local machine using Git:

   ```bash
   git clone <repository_url>

## Change to the project directory:
-- cd <project_directory>
## Create a DDev configuration file for your project:
-- **DDev config**
Follow the prompts to configure your project. You can choose the default settings for a TYPO3 project.

## Start the ddev environment:
-- **ddev start**
This command will set up your development environment, including a web server, PHP, and a database server.

## Install TYPO3 and dependencies using Composer:
--** ddev composer install**
Access your TYPO3 project in your web browser at http://<project_name>.ddev.site. TYPO3's installation process should start automatically.

Follow the TYPO3 installation process and provide the necessary information for your project.

## Usage
You can start working on your TYPO3 project using Docker and ddev. To start your development environment, run:
-- **ddev start**
To stop the development environment when you're done, use:

-- **ddev stop**


## Prerequisites

* PHP 8.1
* [Composer](https://getcomposer.org/download/)


## Accessing the Database
To access the database container created by ddev, you can use the following command:

-- **ddev describe db**
This command will provide you with information on the database container, including the host, port, username, and password.


### Setup unattended (optional)

If you're a more advanced user, you might want to leverage the unattended installation.
To do this, you need to execute the following command and substitute the arguments
with your own environment configuration.

```bash
composer exec -- typo3 setup \
    --no-interaction \
    --driver=mysqli \
    --username=typo3 \
    --password=typo3 \
    --host=127.0.0.1 \
    --port=3306 \
    --dbname=typo3 \
    --admin-username=admin \
    --admin-email="info@typo3.org" \
    --admin-user-password=password \
    --project-name="My TYPO3 Project" \
    --create-site="https://localhost/"
```

### Development server

While it's advised to use a more sophisticated web server such as
Apache 2 or Nginx, you can instantly run the project by using PHPs` built-in
[web server](https://secure.php.net/manual/en/features.commandline.webserver.php).

* `TYPO3_CONTEXT=Development php -S localhost:8000 -t public`
* open your browser at "http://localhost:8000"

Please be aware that the built-in web server is single threaded and only meant
to be used for development.

## Additional Resources

-- TYPO3 documentation: https://docs.typo3.org/
-- ddev documentation: https://ddev.readthedocs.io/en/stable/
## License

**GPL-2.0 or later**

## Typo3 Version 12
