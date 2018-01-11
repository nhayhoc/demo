<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EditBookRequest;
use Core\Services\BookServiceContract;
use App\Http\Requests\CreateBookRequest;

class BooksController extends Controller
{

    
    protected $service;

    public function __construct(BookServiceContract $service)
    {
        $this->service = $service;
    }
    public function index()
    {
        return view('book');
    }

 
    public function create()
    {
        
    }

  
    public function store(CreateBookRequest $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

   
    public function update(EditBookRequest $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
