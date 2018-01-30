<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;

class manager extends Controller
{
    //view records
    public function view(){
        $addBook = Book::all();
        $recs=array('record'=>$addBook);
       return view('manager.view',$recs);
       // return $recs;

    }
    //add new record
    public function add(Request $request){
        if ($request->isMethod('post')){
            $addBook = new Book();

            $addBook->name=$request->input('name');
            $addBook->number = $request->input('number');
            $addBook->address=$request->input('address');
            $addBook->save();
            echo "Added successfully";
            $request->input('number');
        }
        return view('manager.add');

    }
    //modify a record
    public function modify(Request $request , $id){
        $addBook = Book::findorfail($id);
        if ($request->isMethod('post')){
            $addBook->name=$request->input('name');
            $addBook->number=$request->input('number');
            $addBook->address=$request->input('address');
            $addBook->save();
            echo "modified successfully";
            return redirect('view');


        }else {
            $recs = array('record' => $addBook);
            return view('manager.modify', $recs);
        }
    }
    //delete a record
    public function delete($id){
        $record = Book::findorfail($id);
        $record->delete();
        return redirect('view');

    }

}
