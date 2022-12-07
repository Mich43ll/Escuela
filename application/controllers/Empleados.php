<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller {
    

    function _construct()
    {
          parent::__construct();
          $this->load->helper('form');
          $this->load->helper('html');
          $this->load->helper('url');

    }
    public function inicio(){
      $this->load->view('plantilla/head');
      $this->load->view('plantilla/nav');
      $this->load->view('empleados/inicio');
      $this->load->view('plantilla/footer');
      $this->load->view('plantilla/scripts');
      $this->load->view('plantilla/end');
    }






    //Mostrar los datos de los empleados
    public function show(){
      $this->load->model('empleados_model');
      $data['titulo']='Lista de Empleados';
      $data['lista']= $this->empleados_model->show();
      $this->load->view('plantilla/head');
      $this->load->view('plantilla/nav');
      $this->load->view('empleados/show', $data);
      $this->load->view('plantilla/footer');
      $this->load->view('plantilla/scripts');
      $this->load->view('plantilla/end');
    }






    //Guardar los datos de los empleados
    public function save(){
      $this->load->model('empleados_model');
      $this->load->library('form_validation');
      $this->load->helper(array('form', 'url'));
      if($this->input->post()){
        $NombreCompleto = $_POST["NombreCompleto"];
        $idCargo = $_POST["idCargo"];
        $Direccion = $_POST["Direccion"];
        $Telefono = $_POST["Telefono"];
        $Estado = $_POST["Estado"];
        //validaciones 
        $this->form_validation->set_rules(
          'NombreCompleto',
          'Nombre Completo',
          'required|regex_match[/^[a-zñ A-ZÑ ]*$/i]|max_length[100]|trim',
          array(
            'required' => 'El campo %s no puede quedar vacio',
            'regex_match' => 'En el campo %s solo se pueden esribir letras',
            'max_length' => 'El campo %s no puede tener mas de 100 digitos'
          )
        );
        $this->form_validation->set_rules(
          'idCargo',
          'ID Cargo',
          'required|numeric|trim',
          array(
            'required' => 'El campo %s no puede quedar vacio',
            'numeric' => 'En el campo %s solo se pueden esribir numeros'
          )
        );
        $this->form_validation->set_rules(
          'Direccion',
          'Direccion',
          'required|regex_match[/^[a-zñ A-ZÑ ]*$/i]|max_length[100]|trim',
          array(
            'required' => 'El campo %s no puede quedar vacio',
            'regex_match' => 'En el campo %s solo se pueden esribir letras',
            'max_length' => 'El campo %s no puede tener mas de 100 digitos'
          )
        );
        $this->form_validation->set_rules(
          'Telefono',
          'Telefono',
          'required|numeric|min_length[8]|trim',
          array(
            'required' => 'El campo %s no puede quedar vacio',
            'regex_match' => 'En el campo %s solo se pueden esribir numeros',
            'min_length' => 'El campo %s debe tener minimo 8 digitos'
          )
        );
        $this->form_validation->set_rules(
          'Estado',
          'Estado',
          'required|numeric|less_than_equal_to[1]',
          array(
            'required' => 'El campo %s no puede quedar vacio',
            'numeric' => 'En el %s solo se pueden esribir numeros',
            'less_than_equal_to' => 'En el campo %s escriba 1 para Activo o 0 para Inactivo'
          )
        );
        //Fin de las validaciones
      if ($this->form_validation->run() === false) {
      } else {
        $this->empleados_model->save($_POST);
        redirect(base_url("empleados/show"));
      }
      }
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('empleados/save');
        $this->load->view('plantilla/footer');
        $this->load->view('plantilla/scripts');
        $this->load->view('plantilla/end');
    }






    //editar los datos de los empleados
    public function edit($id = null){
      $this->load->model('empleados_model');
      if(!$id == null){
        $id = $this->db->escape((int)$id);
        $empleado = $this->empleados_model->getdata($id);
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('empleados/edit', compact("empleado"));
        $this->load->view('plantilla/footer');
        $this->load->view('plantilla/scripts');
        $this->load->view('plantilla/end');
      }
      else{
        redirect(base_url("empleados/show"));
      }
    }






    //editar los datos de los empleados
    public function update(){
      $this->load->model('empleados_model');
      if($this->input->post()){
        $idAlumno=$this->db->escape((int)$_POST["idEmpleado"]);
        $NombreCompleto=$this->db->escape($_POST["NombreCompleto"]);
        $idCargo=$this->db->escape($_POST["idCargo"]);
        $Direccion=$this->db->escape($_POST["Direccion"]);
        $Telefono=$this->db->escape((int)$_POST["Telefono"]);
        $Estado=$this->db->escape((int)$_POST["Estado"]);
        if($this->empleados_model->update($idAlumno, $NombreCompleto, $idCargo, $Direccion, $Telefono, $Estado)){
          redirect(base_url("empleados/show"));
        }
      }
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('empleados/update');
        $this->load->view('plantilla/footer');
        $this->load->view('plantilla/scripts');
        $this->load->view('plantilla/end');
    }





    
    //eliminar los datos de los empleados
    public function delete(int $id){
      $this->load->model('empleados_model');
        if($this->empleados_model->delete($id)){
          redirect(base_url("empleados/show"));
        }
      
    }
}


?>