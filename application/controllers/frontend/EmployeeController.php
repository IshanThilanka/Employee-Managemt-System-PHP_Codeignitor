<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeController extends CI_Controller
{




    public function index()
    {
        $this->load->view('template/header');

        $this->load->model('EmployeeModel');
        $data['employee'] = $this->EmployeeModel->getEmployeeData('first_name');
        $this->load->view('frontend/employee', $data);
        $this->load->view('template/footer');
    }

    public function create()
    {
        $this->load->view('template/header');
        $this->load->view('frontend/create');
        $this->load->view('template/footer');
    }

    public function store()
    {



        $this->form_validation->set_rules('fname', 'FirstName', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('phoneNo', 'Phone Number', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required|valid_email');

        if ($this->form_validation->run()){

            $data = [
                'first_name' => $this->input->post('fname'),
                'last_name' => $this->input->post('lname'),
                'phone' => $this->input->post('phoneNo'),
                'email' => $this->input->post('Email')
            ];
            $this->load->model('EmployeeModel');
            $this->EmployeeModel->insertEmployee($data);
            
            $this->session->set_flashdata('status','Employee Data inserted successfully');
            redirect(base_url('employee'));

        }else {

            $this->create();
         }

    }


    public function edit($id)
    {
        $this->load->view('template/header');


        $this->load->model('EmployeeModel');
        $data['employee'] = $this->EmployeeModel->edit($id);

        $this->load->view('frontend/edit',$data);

        $this->load->view('template/footer');
        $this->session->set_flashdata('status','Employee Data edited successfully');


        
    }

    public function update($id)
    {

        $this->form_validation->set_rules('fname', 'FirstName', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('phoneNo', 'Phone Number', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required|valid_email');

        if ($this->form_validation->run()):

        $data = [
            'first_name' => $this->input->post('fname'),
            'last_name' => $this->input->post('lname'),
            'phone' => $this->input->post('phoneNo'),
            'email' => $this->input->post('Email')
        ];
      


        $this->load->model('EmployeeModel');
        $this->EmployeeModel->update($id,$data);
        $this->session->set_flashdata('status','Employee Data updated successfully');
        redirect(base_url('employee'));
       

    else: 

    
        $this->edit($id);
    
endif;
}

public function delete($id){
    $this->load->model('EmployeeModel');
    $this->EmployeeModel->delete($id);
   
    $this->session->set_flashdata('status','Employee Data deleted successfully');
    redirect(base_url('employee'));
}
}
