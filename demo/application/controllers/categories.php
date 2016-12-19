<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categories extends CI_Controller {
	
    public function show()
	{
	    //$number=10;$start=0;
	    $data['categories'] = $this->db->select('*')->from('categories')->order_by('id ASC')->get()->result_array();        
        $this->load->view('categories/show',$data);
	}
    public function add()
	{	            
	   $this->load->library('Myclass');       
	   if($this->input->post('submit')){
	       $title = $this->input->post('title');
	       $url = $this->input->post('url');
           $data = array(
               'title' => $title,
               'url' => $this->myclass->seo_url($title),          
            );        
            $this->db->insert('categories', $data); 
            header('Location: http://localhost/CI/demo/index.php/categories/show/');
	   }
        
        
        $this->load->view('categories/add');
	}
    public function edit($id)
	{	            
	    $id = (int)$id;
        $data['categories'] = $this->db->select('*')->from('categories')->where(array('id'=>$id))->get()->row_array();
        if(!isset($data['categories'])){
            header('Location: http://localhost/CI/demo/index.php/categories/show/');
            die;
        }   
         if($this->input->post('submit')){
    	       $title = $this->input->post('title');
    	       $url = $this->input->post('url');
               $data = array(
                   'title' => $title,
                   'url' => $url,
                   'id' => $id          
                );
                $this->db->where('id', $id);        
                $this->db->update('categories', $data); 
                header('Location: http://localhost/CI/demo/index.php/categories/show/');
    	   }
        $this->load->view('categories/edit',$data);
	}
    public function delete($id)
	{	       
	    $id = (int)$id;
        $data['categories'] = $this->db->select('*')->from('categories')->where(array('id'=>$id))->get()->row_array();
	    $this->db->where('id', $id);
        $this->db->delete('categories'); 
        header('Location: http://localhost/CI/demo/index.php/categories/show/');   
        $this->load->view('categories/show',$data);
	}
    
    
}


