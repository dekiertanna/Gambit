
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller 
{

  function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
        $this->load->model('calendar_model');
        $this->load->helper('url');

    }
   public function index(){
      $this->load->view('calendar');
    }

    public function get_events()
    {
      $start = $this->input->get("start");
      $end = $this->input->get("end");

       $userId=$this->session->userdata('userId');
      


       $startdt = new DateTime('now');
       $startdt->setTimestamp($start);
       $start_format = $startdt->format('Y-m-d H:i:s');

       $enddt = new DateTime('now');
       $enddt->setTimestamp($end);
       $end_format=$enddt->format('Y-m-d H:i:s');

       $events = $this->calendar_model->get_events($start_format,$end_format,$userId);
       $data_events = array();
       foreach($events->result() as $r)
       {
         $data_events[] = array(
           "id" => $r->id,
           "title"=> $r->title,
           "description" => $r->description,
           "end" =>$r->end,
           "start"=>$r->start
         );
       }

       echo json_encode(array("events"=>$data_events));
       exit();


    }

    public function add_event() 
{
    /* Our calendar data */
    $name = $this->input->post("name", TRUE);
    $desc = $this->input->post("description", TRUE);
    $start_date = $this->input->post("start_date", TRUE);
    $end_date = $this->input->post("end_date", TRUE);

    if(!empty($start_date)) {
       $sd = DateTime::createFromFormat("Y/m/d H:i", $start_date);
       $start_date = $sd->format('Y-m-d H:i:s');
       $start_date_timestamp = $sd->getTimestamp();
    } else {
       $start_date = date("Y-m-d H:i:s", time());
       $start_date_timestamp = time();
    }

    if(!empty($end_date)) {
       $ed = DateTime::createFromFormat("Y/m/d H:i", $end_date);
       $end_date = $ed->format('Y-m-d H:i:s');
       $end_date_timestamp = $ed->getTimestamp();
    } else {
       $end_date = date("Y-m-d H:i:s", time());
       $end_date_timestamp = time();
    }
    $ID = $this->session->userdata('userId');
    $this->calendar_model->add_event(array(
       "id"=>NULL,
       "title" => $name,
       "description" => $desc,
       "start" => $start_date,
       "end" => $end_date,
       "UserId" => 1
       )
    );

    redirect("index.php/Calendar/index");
}

}