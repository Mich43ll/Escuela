<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

class matricula extends CI_Controller {
    

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
      $this->load->view('matricula/inicio');
      $this->load->view('plantilla/footer');
      $this->load->view('plantilla/scripts');
      $this->load->view('plantilla/end');
    }
    //Mostrar los datos de la matricula
    public function show(){
      $this->load->model('matricula_model');
      $data['titulo']='Lista de Matriculas';
      $data['lista']= $this->matricula_model->show();
      $this->load->view('plantilla/head');
      $this->load->view('plantilla/nav');
      $this->load->view('matricula/show', $data);
      $this->load->view('plantilla/footer');
      $this->load->view('plantilla/scripts');
      $this->load->view('plantilla/end');
    }
    //Guardar los datos de la Matricula
    public function save(){
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->load->model('matricula_model');
      if($this->input->post()){
        $IdAlumno =$_POST["IdAlumno"];
        $Jornada =$_POST["Jornada"];
        $idGrado =$_POST["idGrado"];
      //Validaciones
      $this->form_validation->set_rules(
        'Jornada',
        'JORNADA',
        'required|alpha',
        
        array(
          'required' => 'El campo %s no puede quedar vacio',
          'alpha' => 'no se pueden escribir numeros ni caracteres especiales :3'
        )
      );
      $this->form_validation->set_rules(
        'IdAlumno',
        'ID ALUMNO',
        'required|numeric',
        array(
          'required' => 'El campo %s no puede quedar vacio',
          'numeric' => 'En el %s solo se pueden esribir numeros'
        
        )
      );
      $this->form_validation->set_rules(
        'idGrado',
        'ID GRADO',
        'required|numeric',
        array(
          'required' => 'El campo %s no puede quedar vacio',
          'numeric' => 'En el %s solo se pueden esribir numeros'
        )
      );
      //Fin de las validaciones
      if ($this->form_validation->run() === false) {
      } else {
        $this->matricula_model->save($_POST);
        redirect(base_url("matricula/show"));
      }
    }  
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('matricula/save');
        $this->load->view('plantilla/footer');
        $this->load->view('plantilla/scripts');
        $this->load->view('plantilla/end');
    }
    //editar los datos de los matricula
    public function edit($id = null){
      $this->load->model('matricula_model');
      if(!$id == null){
        $id = $this->db->escape((int)$id);
        $matricula = $this->matricula_model->getdata($id);
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('matricula/edit', compact("matricula"));
        $this->load->view('plantilla/footer');
        $this->load->view('plantilla/scripts');
        $this->load->view('plantilla/end');
      }
      else{
        redirect(base_url("matricula/show"));
      }
    }
      //actualizar los datos de las matriculas
    public function update(){
      $this->load->model('matricula_model');
      if($this->input->post()){
        $idMatricula=$this->db->escape((int)$_POST["idMatricula"]);
        $IdAlumno=$this->db->escape((int)$_POST["IdAlumno"]);
        $Jornada=$this->db->escape($_POST["Jornada"]);
        $idGrado=$this->db->escape((int)$_POST["idGrado"]);
        if($this->matricula_model->update($idMatricula,$IdAlumno, $Jornada, $idGrado)){
          redirect(base_url("matricula/show"));
        }

      }
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('matricula/update');
        $this->load->view('plantilla/footer');
        $this->load->view('plantilla/scripts');
        $this->load->view('plantilla/end');        
    }
    // borrar los datos de la
    public function delete(int $id){
      $this->load->model('matricula_model');
        if($this->matricula_model->delete($id)){
          redirect(base_url("matricula/show"));
        }
  }

}   
?>