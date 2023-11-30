<?php
namespace App\Interfaces\Doctors;

interface DoctorRepositoryInterface                         
{
    //get all Doctors
   public function index();
    // add Doctors
    public function create();
    // stor Doctors
  
    public function store($request);
   //update Doctors

   public function update($request);

   //destroy Doctors

   public function destroy($request);

   public function edit($id);

   public function update_password($request);

   public function update_status($request);

   
}