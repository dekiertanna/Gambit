<?php

class Calendar_Model extends CI_Model
{

    public function get_events($start, $end, $userId)
    {
       
       //return $this->db->where("start>=", $start)->where("end<=",$end)->where("UserId",$userId)->get("event"); not working ATM

        return $this->db->where("start>=", $start)->where("end<=",$end)->get("event"); 

    }

    public function add_event($data)
    {
        $this->db->insert("event",$data);
    }

    public function get_event($id)
    {
        return $this->where("id", $id)->get("event");
    }

    public function update_event($id, $data)
    {
        $this->db->where("id",$id)->update("event",$data);
    }

    public function delete_event($id)
    {
        $this->db->where("id",$id)->delete("event");
    }

}

?>