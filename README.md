# HRIS v2

## UI/Template
https://github.com/Trans-7/hris-v2-mockup

## Setup

1. (Windows) Install WSL2. https://docs.microsoft.com/en-us/windows/wsl/install-manual#step-4---download-the-linux-kernel-update-package
2. Install Docker.
3. Clone repo ini.
4. Run command ini:
`
    docker run --rm \
    -v "$(pwd)":/opt \
    -w /opt \
    laravelsail/php81-composer:latest \
    bash -c "composer install"
`
5. Run cp .env.example .env
6. Run `/vendor/bin/sail artisan key:generate`
7. Run `/vendor/bin/sail npm build`
8. Run `/vendor/bin/sail up -d`
