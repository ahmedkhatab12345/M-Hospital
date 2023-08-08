<?php
namespace App\Interfaces\Sections;

interface SectionsRepositoryInterface
{
    //get all sections
   public function index();
    // stor section
   public function store($request);

   //update section

   public function update($request);

   //destroy section

   public function destroy($request);

   public function show($id);

}