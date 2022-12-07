<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  use Dompdf\Dompdf;
class Alumnos extends CI_Controller {
    

    function _construct()
    {
          parent::__construct();
          $this->load->helper('form');
          $this->load->helper('html');
          $this->load->helper('url');
          $this->load->model('alumnos_model');

    }
    public function inicio(){
      $this->load->view('plantilla/head');
      $this->load->view('plantilla/nav');
      $this->load->view('alumnos/inicio');
      $this->load->view('plantilla/footer');
      $this->load->view('plantilla/scripts');
      $this->load->view('plantilla/end');
    }






    //Mostrar los datos de los alumnos
    public function show(){
      $this->load->model('alumnos_model');
      $data['titulo']='Lista de Alumnos';
      $data['lista']= $this->alumnos_model->show();
      $this->load->view('plantilla/head');
      $this->load->view('plantilla/nav');
      $this->load->view('alumnos/show', $data);
      $this->load->view('plantilla/footer');
      $this->load->view('plantilla/scripts');
      $this->load->view('plantilla/end');
    }



    


    //Guardar los datos de los alumnos
    public function save(){
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->load->model('alumnos_model');
      if($this->input->post()){
        $NombreCompleto = $_POST["NombreCompleto"];
        $Direccion = $_POST["Direccion"];
        $Genero = $_POST["Genero"];
        $Edad = $_POST["Edad"];
        $Estado = $_POST["Estado"];
        $idGrado = $_POST["idGrado"];
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
          'Direccion',
          'Direccion',
          'required|max_length[200]|regex_match[/^[a-z ,]*$/i]|trim',
          array(
            'required' => 'El campo %s no puede quedar vacio',
            'regex_match' => 'En el campo %s solo se pueden esribir letras',
            'max_length' => 'El campo %s no puede tener mas de 200 '
          )
        );
        $this->form_validation->set_rules(
          'Genero',
          'Genero',
          'required|alpha|in_list[Masculino,Femenino]|trim',
          array(
            'required' => 'El campo %s no puede quedar vacio',
            'alpha' => 'En el campo %s solo se pueden esribir letras',
            'in_list' => 'El campo %s no es correcto',
            'max_length'=> 'El campo %s solo permite 2 digitos'
          )
        );
        $this->form_validation->set_rules(
          'Edad',
          'Edad',
          'required|numeric|trim|max_length[2]|trim',
          array(
            'required' => 'El campo %s no puede quedar vacio',
            'numeric' => 'En el campo %s solo se pueden esribir numeros',
            'max_length' => 'El campo %s solo permite 2 digitos'
          )
        );
        $this->form_validation->set_rules(
          'Estado',
          'Estado',
          'required|numeric|trim|max_length[1]|trim',
          array(
            'required' => 'El campo %s no puede quedar vacio',
            'numeric' => 'En el campo %s solo se pueden esribir numeros',
            'max_length' => 'El campo %s solo permite 2 digitos'
          )
        );
        $this->form_validation->set_rules(
          'idGrado',
          'idGrado',
          'required|numeric|trim|max_length[1]|trim',
          array(
            'required' => 'El campo %s no puede quedar vacio',
            'numeric' => 'En el campo %s solo se pueden esribir numeros',
            'max_length' => 'El campo %s solo permite 2 digitos'
          )
        );
        //Fin de las validaciones
      if ($this->form_validation->run() === false) {
      } else {
        $this->alumnos_model->save($_POST);
        redirect(base_url("alumnos/show"));
      }
      }
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('alumnos/save');
        $this->load->view('plantilla/footer');
        $this->load->view('plantilla/scripts');
        $this->load->view('plantilla/end');
    }






    //obtener los datos de los alumnos
    public function edit($id = null){
      $this->load->model('alumnos_model');
      if(!$id == null){
        $id = $this->db->escape((int)$id);
        $alumno = $this->alumnos_model->getdata($id);
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('alumnos/edit', compact("alumno"));
        $this->load->view('plantilla/footer');
        $this->load->view('plantilla/scripts');
        $this->load->view('plantilla/end');
      }
      else{
        redirect(base_url("alumnos/show"));
      }
    }






    //editar los datos de los alumnos
    public function update(){
      $this->load->model('alumnos_model');
      if($this->input->post()){
        $idAlumno=$this->db->escape((int)$_POST["idAlumno"]);
        $NombreCompleto=$this->db->escape($_POST["NombreCompleto"]);
        $Direccion=$this->db->escape($_POST["Direccion"]);
        $Genero=$this->db->escape($_POST["Genero"]);
        $Edad=$this->db->escape((int)$_POST["Edad"]);
        $Estado=$this->db->escape((int)$_POST["Estado"]);
        $idGrado=$this->db->escape((int)$_POST["idGrado"]);
        if($this->alumnos_model->update($idAlumno, $NombreCompleto, $Direccion, $Genero, $Edad, $Estado, $idGrado)){
          redirect(base_url("alumnos/show"));
        }
      }
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('alumnos/update');
        $this->load->view('plantilla/footer');
        $this->load->view('plantilla/scripts');
        $this->load->view('plantilla/end');
    }






    //Eliminar los datos de los alumnos
    public function delete(int $id){
      $this->load->model('alumnos_model');
        if($this->alumnos_model->delete($id)){
          redirect(base_url("alumnos/show"));
        }
      
    }






    //Imprimir los datos de los alumnos
    public function imprimir(){
      $this->load->model('alumnos_model');
      $alumnos['titulo']='Alumnos';
      $alumnos['lista']= $this->alumnos_model->show();
      $this->load->view('alumnos/imprimir', $alumnos);
    }





    //pdf los datos de los alumnos
    public function pdfalumnos(){
      $this->load->model('alumnos_model');
      $alumnos['titulo']='Alumnos';
      $alumnos['lista']= $this->alumnos_model->show();
      $dompdf = new Dompdf();
      $dompdf->loadHtml('<h1>Pdf de Alumnos</h1>');
      $dompdf->setPaper('A4', 'landscape');
      $dompdf->render();
      $dompdf->stream();
    }
}


?>