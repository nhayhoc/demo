<?php 
namespace Core\Repositories;
/*use Core\Repository\BookRepositoryContract;*/
use App\Book;
class BookRepository implements BookRepositoryContract{
	protected $book;
	public function __construct(Book $book){
		$this->book = $book;
	}


	public function paginate(){
		return $this->book->paginate(10);
	}
    public function find($id){
    	return $this->book->findOrFail($id);
    }

    public function store($data){
    	return $this->book->create($data);
    }
    public function update($id, $data){
    	$book = $this->book->find($id);
    	return $book->update($data);
    }
    public function destroy($id){
    	$book = $this->book->find($id);
    	return $book->destroy();
    }
}