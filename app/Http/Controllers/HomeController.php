<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;

use Alert;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $post = Post::where('post_status','=','active')->get();
            $usertype = Auth()->user()->usertype;
            if($usertype=='user')
            {
                return view('home.homepage',compact('post'));
            }
            else if($usertype=='admin')
            {
                return view('admin.adminhome');
            }
        }
    }
    public function post()
    {
        return view('post');
    }

    public function homepage()
    {
        $post = Post::where('post_status','=','active')->get();
        return view('home.homepage',compact('post'));
    }

    public function post_details($id)
    {
        $post = Post::find($id);
        return view('home.post_details',compact('post'));
    }

    public function create_post()
    {
        return view('home.create_post');
    }

    public function user_post(Request $request)
    {
        $user = Auth()->user();

        $userid = $user->id;
        
        $username = $user->name;

        $usertype=$user->usertype;

        $post = new Post;

        $post->title = $request->title;

        $post->description = $request->description;

        $post->user_id = $userid;
        
        $post->name = $username;

        $post->usertype = $usertype;

        $post->post_status = 'pending';

        $image = $request->image;

        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postimage',$imagename);
            $post->image=$imagename;
        }

        $post->save();

        Alert::info('Congrats','You have added the data successfully.');

        return redirect()->back();
    }

    public function my_post()
    {
        $user = Auth::user();

        $userid = $user->id;

        $post = Post::where('user_id','=',$userid)->get();

        return view('home.my_post',compact('post'));
    }

    public function my_post_del($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back()->with('message','Post deleted successfully');
    }

    public function post_update_page($id)
    {
        $post = Post::find($id);

        return view('home.post_page',compact('post'));
    }

    public function update_post_data(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title=$request->title;
        $post->description=$request->description;

        $image = $request->image;

        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postimage',$imagename);
            $post->image = $imagename;
        }

        $post->save();
        return redirect()->back()->with('message','Post updated succesfully');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $posts = Post::where('post_status', '=', 'active')
                    ->where(function ($queryBuilder) use ($query) {
                        $queryBuilder->where('title', 'like', '%' . $query . '%')
                                    ->orWhere('description', 'like', '%' . $query . '%');
                    })
                    ->get();

        return view('home.search_results', compact('posts', 'query'));
    }

    public function sortPosts($order)
    {
        $validOrders = ['asc', 'desc'];

        $order = in_array($order, $validOrders) ? $order : 'asc';

        $post = Post::where('post_status', '=', 'active')
            ->orderBy('title', $order)
            ->get();

        return view('home.homepage', compact('post', 'order'));
    }
 
    public function blog()
{
    $posts = Post::where('post_status','=','active')->paginate(6); // Adjust the number per page as needed
    return view('home.blog', compact('posts'));
}

public function myhome()
    {
        $posts = Post::where('post_status', '=', 'active')->paginate(6); // Set the number of posts per page as needed
        return view('home.myhome', compact('posts'));
    }

public function getPaginatedPosts()
    {
        $posts = Post::where('post_status', '=', 'active')
            ->orderBy('title', 'desc') 
            ->paginate(6);

        return $posts;
    }
}
