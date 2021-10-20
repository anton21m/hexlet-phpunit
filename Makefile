install:
	php composer install

console:
	php composer exec --verbose psysh

lint:
	php composer exec --verbose phpcs -- --standard=PSR12 src tests
	php composer exec --verbose phpstan -- --level=8 analyse src tests

lint-fix:
	php composer exec --verbose phpcbf -- --standard=PSR12 src tests

test:
	php composer exec --verbose phpunit tests

test-coverage:
	php composer exec --verbose phpunit tests -- --coverage-clover build/logs/clover.xml
