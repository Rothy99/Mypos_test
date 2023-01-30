<?php

namespace App\Controllers;
use App\Models\CategoryModel;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
class DatasetupController extends BaseController
{
    public function index()
    {
        $Cate_model=new CategoryModel();
        $data['category']=$Cate_model->FindAll();
        return view('Datasetup/Category',$data);
    }
    public function save_category(){
        $category=new CategoryModel();
       // $add_by=session('username');
       $data=[
        //    'id'=>$this->request->getPost('txtid'),
           'cate_name'=>$this->request->getPost('catename'),
           'des'=>$this->request->getPost('des'),
       ];
       $category->insert($data);
       $data = ['status'=>'Category Inserted Successfully'];
       return $this->response->setJSON($data);
    //    if ($category->insert($data)) {
    //                $response = [
    //                    'success' => true,
    //                    'msg' => "Category created",
    //                            ];
    //            } else {
    //                $response = [
    //                    'success' => true,
    //                    'msg' => "Failed to create Category",
    //                             ];
    //            }
    //    echo json_encode(array("status" => TRUE));
   }
   public function delete_category($id){
       $category=new CategoryModel();
       $data=$category->find($id);
       $category->delete($id);
       echo json_encode(array("status" => TRUE));
   }
   public function edit_category($id){
       $category=new CategoryModel();
       $data=$category->find($id);
       echo json_encode($data);
   }
   public function update_category(){
       $category=new CategoryModel();
       $id=$this->request->getPost('txtid');
       $data=array(
        // 'id'=>$this->request->getPost('txtid'),
        'cate_name'=>$this->request->getPost('cate_name'),
        'des'=>$this->request->getPost('des'),
       );
       if ($category->update($id,$data)) {
           $response = [
                       'success' => true,
                       'msg' => "User created",
                       ];
       } else {
           $response = [
                       'success' => true,
                       'msg' => "Failed to create user",
                       ];
       }
       echo json_encode(array("status" => TRUE));
   }
}