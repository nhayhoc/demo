<?php 
namespace Core\Providers;
use Illuminate\Support\ServiceProvider;
use Core\Repositories\BookRepositoryContract;
use Core\Repositories\BookRepository;
use Core\Services\BookServiceContract;
use Core\Services\BookService;
class CoreServiceProvider extends ServiceProvider{
	public function register(){
		$this->app->bind(BookRepositoryContract::class,BookRepository::class);
		$this->app->bind(BookServiceContract::class, BookService::class);
	}
}