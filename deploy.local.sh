#!/bin/bash

init() {
    DIR="$( cd -P "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
    PHP="$(/bin/which php)"
    PHP_FPM="/etc/init.d/php5-fpm"
}

php_stop() {
    sudo ${PHP_FPM} stop
}

run_migrate() {
    ${PHP} ${DIR}/protected/yiic.php migrate --interactive=0
}

build_composer() {
    composer install
}

php_start() {
    sudo ${PHP_FPM} start
    sudo ${PHP_FPM} status
}

main() {
    init
    php_stop

    build_composer
#    run_migrate

    php_start
}
main
