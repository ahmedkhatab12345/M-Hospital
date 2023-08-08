<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\Sections\SectionsRepositoryInterface; 

class SectionController extends Controller
{
    private $Sections;
  
    public function __construct(SectionsRepositoryInterface $Sections)
    {
        $this->Sections = $Sections;
    }

    public function index()
    {
      return  $this->Sections->index();
    }

    public function show($id)
    {
        return  $this->Sections->show($id);
    }

    public function store(Request $request)
    {
        return  $this->Sections->store($request);
    }

    public function update(Request $request, $id)
    {
        return  $this->Sections->update($request);
    }

    public function destroy(Request $request)
    {
        return  $this->Sections->destroy($request);
    }
}
