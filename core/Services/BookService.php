<?php 
namespace Core\Services;
use Core\Repositories\BookRepositoryContract;

class BookService implements BookServiceContract{
	protected $book; 
	

	public function __construct(BookRepositoryContract $book){
		$this->book = $book;
	}

	public function paginate(){
		return $this->book->paginate();
	}
    public function find($id){
    	return $this->book->find($id);
    }
    public function store($data){
    	return $this->book->store($data);
    }
    public function update($id, $data){
    	return $this->book->update($id,$data);
    }
    public function destroy($id){
    	return $this->book->update($id);
    }
}

