.PHONY: server

server:
	@php artisan serve
	@npm run dev

cache:
	@php artisan route:cache
	@php artisan cache:clear