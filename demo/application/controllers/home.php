<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function index()
	{
		//$this->load->view('welcome_message');
        //echo 'okokk';
	}
    
    // Cách gọi trên url: domain=>index.php/home/hello/2/3/5
    public function hello($param_1,$param_2,$param_3)
	{	
        echo 'okokk-1111'.$param_1;
	}    
    // Cách gọi view
     //Cách gọi trên url: domain=>index.php/home/view
    public function view()
	{	
        $this->load->view('home/view');
	}
    
    public function show()
	{	
	    $number=10;$start=0;
        $data['categories'] = $this->db->select('*')->from('categories')->limit($number,$start)->get()->result_array();
        $this->load->view('home/show',$data);
	}
    /// update
    public function update($id=0)
	{		    
        $data = array(
           'title' => 'tin tức chuyển động'           
        );        
        $this->db->where('id', 2);
        $this->db->update('categories', $data);          
        // hoặc viết theo cách 2  
        //$this->db->where('id', 2)->update('categories', $data);   
        echo 'ok';            
	}
    public function delete($id=0)
	{		    
        $this->db->where('id', $id);
        $this->db->delete('categories'); 
	}
    
    public function insert()
	{		    
        $data = array(
           'title' => 'Thể thao 1'          
        );        
        $this->db->insert('categories', $data); 
	}
    public function detail($id=0)
	{		    
        $data['categories'] = $this->db->select('*')->from('categories')->where($data = array('id'=>$id))->get()->row_array();
        $this->load->view('home/detail',$data);
	}
    
    
    
    
}

