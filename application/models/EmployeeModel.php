<?php
class EmployeeModel extends CI_Model
{
    public function insertEmployee($data)
    {
        $this->db->insert('users', $data);
    }

    public function getEmployeeData($data)
    {
        $query = $this->db->get('users');
        return $query->result();
    }

    public function edit($id)
    {
        $query = $this->db->get_where('users', ['id'=> $id]);
        return $query->row();
    }

    public function update($id,$data){
        //return $this->db->update('users',$data, ['id'=> $id]);
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
        
    }

    public function delete($id){
        $this->db->where('id', $id);
    return $this->db->delete('users');

    }
}
?>