<?php

namespace App\Http\Controllers;

use App\Project;
use App\Mail\ProjectCreated;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    
    public function index(){
      $projects=Project::where('owner_id', auth()->id())->get();
      
      return view('index',compact('projects'));

    }
    public function create(){
    
    return view('create');
    }
    public function show(Project $project){
    abort_unless(\Gate::allows('update',$project),403);                                                   
   
    
    return view('show', compact('project'));

    }
    public function edit(Project $project){
        abort_unless(\Gate::allows('update',$project),403);
        
    return view('edit',compact('project'));

    }
    public function details(Project $project){
  return view('shopdetails',compact('project'));
}
    public function update(Request $request , Project $project){
      
        $this->validate($request,[ 
          'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'Description' => ['required','min:10'],
        'Name'=>'required',
        'Category'=>'required',
        
        'Price'=>'required',
        'InExchange'=>'required'

    ]);
     
   
     if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name =rand() . '.' .$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $project->image = $name;
      }
     $project->Description=$request->Description;
     $project->Name=$request->Name;
     $project->Category=$request->Category;
     $project->Price=$request->Price;
     $project->InExchange=$request->InExchange;
    
    $project->update();
        
    return redirect('/projects');
    }

    public function destroy(Project $project){
        $project->delete();
    return redirect ('/projects');
    }

public function store(Request $request){
    $this->validate($request,[ 
        'Description' => ['required','min:10'],
        'Name'=>'required',
        'Category'=>'required',
        'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'Price'=>'required',
        'InExchange'=>'required'

    ]);
     
    $project= new Project();
     if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name =rand() . '.' .$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $project->image = $name;
      }
     $project->Description=$request->get('Description');
     $project->Name=$request->get('Name');
     $project->Category=$request->get('Category');
     $project->Price=$request->get('Price');
     $project->InExchange=$request->get('InExchange');
    $project['owner_id']= auth()->id();
    $project->save();
    
    
    
     \Mail::to('dikshyakarki55@gmail.com')->send(
        new ProjectCreated($project));
    return redirect ('/projects');
}

}
