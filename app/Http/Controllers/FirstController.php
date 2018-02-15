<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\First;
class FirstController extends Controller
{
    public function index()
    {
        //insert biasa
            // $firsts = new First;
            // $firsts->title = 'halo cimahi';
            // $firsts->description = 'isi halo cimahi';
            // $firsts->save();

        //mas assigment
            // First::create([
            //     'title' => 'halo Gununghalu',
            //     'description' => 'Hai Gununghalu',
            //     'created_at' => '2017-09-8 00:00:01',
            // ]);

        //update
        // $first = First::where('title', 'halo Gununghalu')->first();
        // $first->title = 'Halo Rin!';
        // $first->save();

        //update mass assigment
        First::find(4)->update([
            'title' => 'Halo Yogyakarta',
            'description' => 'Hai Yogya'
        ]);

         //delete
         // $first = First::find(6);
         // $first->delete();

         //destroy
            // First::destroy(8);

         //soft deletes
         // $first = First::find(7);
         // $first->delete();

         //return soft deletes
        // First::withTrashed()->restore(7);

        $firsts = First::all();
        return view('first/home', ['first' => $firsts]);
    }
    public function show($id)
    {
        $blog = First::find($id);

        if (!$blog)

       dd('Not Found!');
        
        //   query builder 
//        $isi = 'ini adalah link nya ' .$id;
//        $users = DB::table('users')->get();    
//        $users = DB::table('users')->get();
            //where
//        $users = DB::table('users')->where('username', 'yusuf')->get();
        
        
        //like
//         $users = DB::table('users')->where('username', 'like', '%e%')->get();
        
        
        //insert
//      DB::table('users')->insert([
//            ['username' => 'kido', 'password' => 'abcde123']
//        ]);
        
        
        //update
//        DB::table('users')->where('username', 'kido')->update([
//            'username' => 'kido4'
//        ]);
        
        //delete
//        DB::table('users')->where('username', 'kido')->delete();
        
        //where
//        $users = DB::table('users')
//                    ->whereNotIn('id', [1, 2, 3])
//                    ->get();
        
        //order
//        $users = DB::table('users')
//                ->orderBy('username', 'asc')
//                ->get();

//        $unescaped = '<script> alert("salah") </script>';
//        return view('first/single', ['blog' => $isi, 'users' => $users]);
        
        return view('first/single', ['blog' => $blog]);
    }

    //create
    public function create(){
        return view('first/create');
    }

    public function store(Request $request){

        $this->validate($request, [
            'title'       => 'required|min:5',
            'description' => 'required|max:25'
        ]);
            $firsts = new First;
            $firsts->title = $request->title;
            $firsts->description = $request->description;
            $firsts->save();

            return redirect('/first');
    }

    //edit
    public function edit($id){
        $blog = First::find($id);

        if (!$blog)

       dd('Not Found!');

    return view('first/edit', ['blog' => $blog]);
    }

    public function update(Request $request, $id){
        //update
        $first              = First::find($id);
        $first->title       = $request->title;
        $first->description = $request->description;
        $first->save();

        return redirect('first/' . $id);
    }

    public function destroy($id){
         $first = First::find($id);
         // dd($first);
         $first->delete();

    return redirect('first');
    }
}
