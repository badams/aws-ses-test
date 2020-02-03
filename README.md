
This is a minimal example to reproduce [symfony/symfony #35468](https://github.com/symfony/symfony/issues/35468)

```
# Install Dependencies
docker run --rm -i --tty \
  --volume $PWD:/app \
  --volume ${COMPOSER_HOME:-$HOME/.composer}:/tmp \
  composer install

# Run mailer script
docker run --rm -i --tty --volume $PWD:/app php:7.3-cli php /app/send.php
```

Output:
```shell script
Fatal error: Uncaught Symfony\Component\Mailer\Exception\HttpTransportException: Unable to send an email: The security token included in the request is invalid. (code InvalidClientTokenId). in /app/vendor/symfony/amazon-mailer/Transport/SesApiTransport.php:68
```