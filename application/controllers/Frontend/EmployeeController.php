<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class EmployeeController extends CI_Controller
  {
      public function __construct()
      {
        parent::__construct();
        $this->load->database();
      }
//////////////////////////////////////////////////////
      public function index()
      { 
        $this->show();
      }

      public function show()
      { 

        $this->load->model('EmployeeModel');
        $data['employee']=$this->EmployeeModel->getInfo();

        $this->load->view('template\header.php');
        $this->load->view('template\top.php');
        $this->load->view('template\side.php');
        $this->load->view('frontend\employee.php',$data); 
        $this->load->view('template\footer.php');
        $this->load->view('scriptSupport\employeeJS.php'); 
      }
      
      public function showDatatable()
      { 

        $this->load->model('EmployeeModel');
        $data['employee']=$this->EmployeeModel->getInfo();

        $this->load->view('template\header.php');
        $this->load->view('template\top.php');
        $this->load->view('template\side.php');
        $this->load->view('frontend\responsiveDatatable.php',$data); 
        $this->load->view('template\footer.php');
        $this->load->view('scriptSupport\responsiveDatatableJS.php'); 
      }

      //Validating inputs
      public function validate()
      {
        $this->form_validation->set_rules('first_name', 'First Name','trim|required|alpha_numeric_spaces|max_length[12]');
        $this->form_validation->set_rules('last_name', 'Last Name','trim|required|alpha_numeric_spaces|max_length[12]');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required|numeric');
        $this->form_validation->set_rules('email', 'EMail', 'trim|required|valid_email');

        return $this->form_validation->run();
      }


      //Storing from create page
      public function store()
      {        
        if($this->validate())
        {
          $data= [
            'first_name'=>$this->input->post('first_name'),
            'last_name'=>$this->input->post('last_name'),
            'phone'=>$this->input->post('phone'),
            'email'=>$this->input->post('email')
          ];

          $this->load->model('EmployeeModel');
          $this->EmployeeModel->insertInfo($data);
          $this->session->set_flashdata('status', 'Employee data inserted successfully');

          $status = ['success'=> true];

          // redirect(base_url('employee'));
        }

        else 
        {
          //$this->create();

          $status =[
            'error'   => true,
            'first_name_error'=>form_error('first_name'),
            'last_name_error'=>form_error('last_name'),
            'phone_error'=>form_error('phone'),
            'email_error'=>form_error('email')
          ];
        }

        echo json_encode($status);
      }

      ////Edit and update info
      public function edit_modal($id)
      {
        $this->load->model('EmployeeModel');
        $data= $this->EmployeeModel->editInfo($id);
        $status=[
          'id'=> $id,
          'first_name'=> $data->first_name,
          'last_name'=> $data->last_name,
          'phone'=> $data->phone,
          'email'=> $data->email  
        ];

        echo json_encode($status);
      }
      ///////
      public function update($id)
      {
        if($this->validate())
        {
          $data= [
            'first_name'=>$this->input->post('first_name'),
            'last_name'=>$this->input->post('last_name'),
            'phone'=>$this->input->post('phone'),
            'email'=>$this->input->post('email')
          ];

          $this->load->model('EmployeeModel');
          $this->EmployeeModel-> updateInfo($data,$id);
          $this->session->set_flashdata('status', 'Employee data edited successfully');

          $status = ['success'=> true];
        }

        else 
        {
          //$this->edit($id);
          $status =[
            'error'   => true,
            'first_name_error'=>form_error('first_name'),
            'last_name_error'=>form_error('last_name'),
            'phone_error'=>form_error('phone'),
            'email_error'=>form_error('email')
          ];
        }

        echo json_encode($status);
      }
///////////////////////////////////////////////////////
///////////////////////////////////////////////////////
//////Deleting Employee
      public function delete($id)
      {
        $this->load->model('EmployeeModel');
        $data['employee']= $this->EmployeeModel->deleteInfo($id);
        //$this->index();

      }
  }
?>  