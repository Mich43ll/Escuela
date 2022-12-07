<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Clases extends CI_Controller
{


  function _construct()
  {
    parent::__construct();
    $this->load->helper('form');
    $this->load->helper('html');
    $this->load->helper('url');
  }

  public function inicio()
  {
    $this->load->view('plantilla/head');
    $this->load->view('plantilla/nav');
    $this->load->view('clases/inicio');
    $this->load->view('plantilla/footer');
    $this->load->view('plantilla/scripts');
    $this->load->view('plantilla/end');
  }
  //Mostrar los datos de los alumnos
  public function show()
  {
    $this->load->model('clases_model');
    $data['titulo'] = 'Lista de Clases';
    $data['lista'] = $this->clases_model->show();
    $this->load->view('plantilla/head');
    $this->load->view('plantilla/nav');
    $this->load->view('clases/show', $data);
    $this->load->view('plantilla/footer');
    $this->load->view('plantilla/scripts');
    $this->load->view('plantilla/end');
  }
  //Guardar los datos de los alumnos
  public function save()
  {
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    $this->load->model('clases_model');
    if ($this->input->post()) {
      $NombreClase = $_POST["NombreClase"];
      $Estado = $_POST["Estado"];
      $idEmpleado = $_POST["idEmpleado"];
    
      //Validaciones
      $this->form_validation->set_rules(
        'NombreClase',
        'Nombre de la clase',
        'required',
        array(
          'required' => 'El campo %s no puede quedar vacio'
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
      $this->form_validation->set_rules(
        'idEmpleado',
        'ID Empleado',
        'required|numeric',
        array(
          'required' => 'El campo %s no puede quedar vacio',
          'numeric' => 'En el %s solo se pueden esribir numeros'
        )
      );
     
      //Fin de las validaciones
      if ($this->form_validation->run() === false) {
      } else {
        $this->clases_model->save($_POST);
        redirect(base_url("clases/show"));
      }
    }
    $this->load->view('plantilla/head');
    $this->load->view('plantilla/nav');
    $this->load->view('clases/save');
    $this->load->view('plantilla/footer');
    $this->load->view('plantilla/scripts');
    $this->load->view('plantilla/end');
  }
  
  //editar los datos de los alumnos
  public function edit($id = null)
  {
    $this->load->model('clases_model');
    if (!$id == null) {
      $id = $this->db->escape((int)$id);
      $clase = $this->clases_model->getdata($id);
      $this->load->view('plantilla/head');
      $this->load->view('plantilla/nav');
      $this->load->view('clases/edit', compact("clase"));
      $this->load->view('plantilla/footer');
      $this->load->view('plantilla/scripts');
      $this->load->view('plantilla/end');
    } else {
      redirect(base_url("clases/show"));
    }
  }
  public function update()
  {
    $this->load->model('clases_model');
    if ($this->input->post()) {
      $idClase = $this->db->escape((int)$_POST["idClase"]);
      $NombreClase = $this->db->escape($_POST["NombreClase"]);
      $Estado = $this->db->escape((int)$_POST["Estado"]);
      $idEmpleado = $this->db->escape((int)$_POST["idEmpleado"]);

      if ($this->clases_model->update($idClase, $NombreClase, $Estado, $idEmpleado)) {
        redirect(base_url("clases/show"));
      }
    }
    $this->load->view('plantilla/head');
    $this->load->view('plantilla/nav');
    $this->load->view('clases/update');
    $this->load->view('plantilla/footer');
    $this->load->view('plantilla/scripts');
    $this->load->view('plantilla/end');
  }

  public function delete(int $id)
  {
    $this->load->model('clases_model');
    if ($this->clases_model->delete($id)) {
      redirect(base_url("clases/show"));
    }
  }
}
