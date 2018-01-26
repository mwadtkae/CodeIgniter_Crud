
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class qures extends CI_Controller {


    public function getpost(){

        $query = $this->db->get('tbl_posts');

        if($query->num_rows() > 0){

           return $query-> result();

        }


    }

    public function addpost($data){

        return $this->db->insert('tbl_posts', $data);

    }


    public function getsinglepost($id){


        $query = $this->db->get_where('tbl_posts', array('id' => $id));

        if($query->num_rows() > 0){

            return $query-> row();

         }
    }


    public function updatepost($data,$id){

       return $this->db->where('id',$id)
                   ->update('tbl_posts',$data);
    }




}



?>