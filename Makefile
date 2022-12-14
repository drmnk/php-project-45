install:
	composer install

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

brain-gcd:
	./bin/brain-gcd

brain-progression:
	./bin/brain-progression

brain-simple:
	./bin/brain-simple

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin